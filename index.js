const { chromium } = require("playwright");
const core = require("@actions/core");

const filename = "screenshot.png";
const workspace = process.env.GITHUB_WORKSPACE;
const path = workspace ? `${workspace}/` : `./`;
const filePath = `${path}/${filename}`;

(async () => {
  try {
    const url = core.getInput("url", { required: true });

    const browser = await chromium.launch();
    const page = await browser.newPage();
    await page.goto(url);
    await page.screenshot({ path: filePath });

    await browser.close();
  } catch (error) {
    console.log(error);
    core.setFailed(error.message);
  }
})();
