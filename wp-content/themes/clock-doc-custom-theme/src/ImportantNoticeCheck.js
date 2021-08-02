class ImportantNoticeCheck {
  constructor() {
    this.importantNotice = document.querySelector(
      ".page-banner__important-notice"
    );
    this.textBox = document.querySelector(".page-banner__text-box");
    this.events();
  }
  events() {
    this.adjustTops();
  }

  adjustTops() {
    console.log("Imp. Ntc. Check 1");
    if (this.importantNotice.textContent == "") {
      this.textBox.style.top = "30%";
    } else {
      this.textBox.style.top = "45%";
    }
  }
}

export default ImportantNoticeCheck;
