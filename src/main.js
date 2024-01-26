const core = require("@actions/core");
const { isValidURL, wait } = require("./utils.js");
const { chromium } = require("playwright");

const DEFAULT_TYPE = "png";
const DEFAULT_FILENAME = "screenshot.jpg";

async function run() {
  try {
    let delay = core.getInput("delay") || "0";
    const url = core.getInput("url", { required: true });
    const fullPage = core.getInput("fullPage") === "true";
    let filename = core.getInput("filename") || DEFAULT_FILENAME;
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

    filename = filename.includes(".")
      ? filename.slice(0, filename.lastIndexOf("."))
      : filename;

    const includedTypes = ["png", "jpeg"];
    screenshotType = screenshotType.toLowerCase();
    if (!includedTypes.includes(screenshotType)) {
      core.debug(`type must be one of [${includedTypes.join(", ")}]`);
      screenshotType = DEFAULT_TYPE;
    }

    core.startGroup("inputs");
    console.log("Inputs: ", {
      url,
      fullPage,
      filename,
      type: screenshotType,
    });
    core.endGroup();

    const browser = await chromium.launch();
    const page = await browser.newPage();
    await page.goto(url);
    await wait(delay);

    const path = process.env.GITHUB_WORKSPACE || ".";
    const filePath = `${path}/${filename}.${screenshotType}`;
    await page.screenshot({
      path: filePath,
      fullPage,
    });
    await browser.close();

    let fileExt = filePath.split("/").pop();
    core.setOutput("filename", fileExt);
    core.startGroup("Outputs");
    console.log("Outputs: ", {
      fileName: fileExt,
    });
    core.endGroup();
  } catch (error) {
    core.setFailed(error.message);
  }
}

module.exports = {
  run,
};
