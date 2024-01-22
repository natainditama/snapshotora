const { chromium } = require("playwright");

(async () => {
  try {
    const browser = await chromium.launch();
    const page = await browser.newPage();
    await page.goto("https://github.com/natainditama");
    await page.screenshot({ path: "screenshot.png" });

    await browser.close();
  } catch (error) {
    console.log(error);
  }
})();
