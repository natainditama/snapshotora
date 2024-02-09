const core = require("@actions/core");
const { isValidURL, wait, getExecutablePath } = require("./utils.js");
const { chromium } = require("playwright");

const DEFAULT_TYPE = "png";
const DEFAULT_FILENAME = "screenshot.png";

async function run() {
  try {
    let delay = core.getInput("delay") || "0";
    const url = core.getInput("url", { required: true });
    const fullPage = core.getInput("fullPage") === "true";
    let fileName = core.getInput("fileName") || DEFAULT_FILENAME;
    let screenshotType = core.getInput("type") || DEFAULT_TYPE;

    if (!isValidURL(url)) {
      core.error("url must be a valid URL");
      return;
    }

    delay = parseInt(delay);
    if (Number.isNaN(delay)) {
      core.debug("delay must be a number");
      delay = 0;
    }

    fileName = fileName.includes(".")
      ? fileName.slice(0, fileName.lastIndexOf("."))
      : fileName;

    const includedTypes = ["png", "jpeg"];
    screenshotType = screenshotType.toLowerCase();
    if (!includedTypes.includes(screenshotType)) {
      core.debug(`type must be one of [${includedTypes.join(", ")}]`);
      screenshotType = DEFAULT_TYPE;
    }

    core.startGroup("Inputs");
    console.log("Inputs: ", {
      url,
      fullPage,
      fileName,
      type: screenshotType,
    });
    core.endGroup();

    const browser = await chromium.launch({
      args: ["--no-sandbox", "--start-fullscreen"],
      executablePath: getExecutablePath(),
    });
    const page = await browser.newPage();
    await page.goto(url);
    await wait(delay);

    const path = process.env.GITHUB_WORKSPACE || ".";
    const filePath = `${path}/${fileName}.${screenshotType}`;
    await page.screenshot({
      path: filePath,
      fullPage,
    });
    await browser.close();

    const fileExt = filePath.replace(`${path}/`, "");
    core.setOutput("path", fileExt);
    core.startGroup("Outputs");
    console.log("Outputs: ", {
      path: fileExt,
    });
    core.endGroup();
  } catch (error) {
    core.setFailed(error.message);
  }
}

module.exports = {
  run,
};
