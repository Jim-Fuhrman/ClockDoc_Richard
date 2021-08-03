class ImportantNoticeCheck {
  constructor() {
    this.importantNotice = document.querySelector(
      ".page-banner__important-notice"
    );
    if (this.importantNotice === null) {
      return null;
    }
    this.textBox = document.querySelector(".page-banner__text-box");
    this.events();
  }
  events() {
    this.adjustTops();
  }

  adjustTops() {
    let topMinusNotice = "40%";
    let topPlusNotice = "45%";

    if (window.screen.width >= 767) {
      topMinusNotice = "45%";
      topPlusNotice = "55%";
    }

    console.log("topMinusNotice = " + topMinusNotice);
    console.log("topPlusNotice = " + topPlusNotice);
    console.log("window screen width = " + window.screen.width);

    this.textBox.style.top = topMinusNotice;

    if (this.importantNotice) {
      if (this.importantNotice.textContent !== null) {
        this.textBox.style.top = topPlusNotice;
      } /* end of inner If */
    } /* end of outer If */
    console.log("top set to " + this.textBox.style.top);
  } /* end of adjustTops function */
} /* end of the entire class ImportantNoticeCheck */

export default ImportantNoticeCheck;
