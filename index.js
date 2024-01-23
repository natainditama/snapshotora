const { chromium } = require("playwright");
const core = require("@actions/core");

const type = "png";
const filename = "screenshot";
const path = process.env.GITHUB_WORKSPACE || `./`;
const filePath = `${path}/${filename}.${type}`;

(async () => {
  try {
    const url = core.getInput("url") || "https://github.com";

    const browser = await chromium.launch();
    const page = await browser.newPage();
    await page.goto(url);
    await page.screenshot({ path: filePath });

    await browser.close();
    core.setOutput("filename", `${filename}.${type}`);
  } catch (error) {
    console.log(error);
    core.setFailed(error.message);
  }
})();
