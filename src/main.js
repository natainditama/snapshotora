const path = require("path");
const core = require("@actions/core");
const captureWebsite = require("capture-website");
const { getExecutablePath } = require("./utils.js");

const DEFAULT_TYPE = "png";
const DEFAULT_FILENAME = "screenshot.png";

async function run() {
  try {
    const destPath = process.env.GITHUB_WORKSPACE || "./";
    const dest = path.join(destPath, DEFAULT_FILENAME);

    const executablePath = await getExecutablePath();
    const options = {
      launchOptions: {
        executablePath,
      },
    };

    await captureWebsite.file("http://github.com/", dest, options);
    core.setOutput("path", dest);
  } catch (error) {
    core.setFailed(error.message);
  }
}

module.exports = {
  run,
};
