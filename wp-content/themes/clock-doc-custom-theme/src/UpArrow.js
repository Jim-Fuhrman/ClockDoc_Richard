import throttle from "lodash/throttle"
class upArrow {
  constructor() {
    /* The upArrow class cannot be in the footer.php file. 
    The next querySelectorAll couldn't find it there.
    However, it works fine in the content-contactInfo.php file. */
    this.nav = document.querySelector(".site-header__nav")
    this.upArrow = document.querySelector(".upArrow")
    this.browserHeight = window.innerHeight
    /* the next line runs 5 times a second or once every 200 milliseconds.*/
    this.scrollThrottle = throttle(this.calcCaller, 200).bind(this)
    this.events()
  }

  events() {
    window.addEventListener("scroll", this.scrollThrottle)
    this.upArrow.addEventListener("click", () => this.scrollTo())
  }

  calcCaller() {
    this.arrowOpacityControl()
  }

  scrollTo() {
    window.scrollTo({ top: 0, behavior: "smooth" })
    this.nav.classList.remove("active")
  }

  arrowOpacityControl() {
    if (window.scrollY + this.browserHeight > this.browserHeight * 1.5) {
      this.upArrow.classList.add("upArrow__make-visible")
    } else {
      this.upArrow.classList.remove("upArrow__make-visible")
    }
  }
}

export default upArrow
