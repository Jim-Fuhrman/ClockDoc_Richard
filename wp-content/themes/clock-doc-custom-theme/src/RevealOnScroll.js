import throttle from "lodash/throttle";
import debounce from 'lodash/debounce';

class RevealOnScroll {
  constructor(els, thresholdPercent) {
    /*console.log("in constructor function of RevealOnScroll");*/
    this.thresholdPercent = thresholdPercent;
    this.itemsToReveal = els;
    this.browserHeight = window.innerHeight;
    this.hideInitially();
    this.scrollThrottle = throttle(this.calcCaller, 200).bind(this);
    this.events();
  }

  calcCaller() {
    /*console.log("scroll function ran");*/
    this.itemsToReveal.forEach(el => {
      if (el.isRevealed == false) {
        this.calculateIfScrolledTo(el);
      }
    });
  }

  events() {
    window.addEventListener("scroll", this.scrollThrottle);
    window.addEventListener("resize", debounce(() => {
      console.log("resize just ran");
      this.browserHeight = window.innerHeight
    }, 333))
  }
  /*
    const nav = document.querySelector(".site-header__nav");
    console.log("in events function of RevealOnScroll");
    this.itemsToReveal.addEventListener("click", () =>
      this.itemsToReveal.forEach((el) => nav.classList.remove("active"))
    ); 
  }
  */

  hideInitially() {
    this.itemsToReveal.forEach(el => {
      el.classList.add("reveal-item")
      el.isRevealed = false
    });
    this.itemsToReveal[this.itemsToReveal.length - 1].isLastItem = true;
  }

  calculateIfScrolledTo(el) {
    if (window.scrollY + this.browserHeight > el.offsetTop) { /* if we've scrolled far enough that the up arrow should now be coming into view*/
      let scrollPercent =
        (el.getBoundingClientRect().y / this.browserHeight) * 100;
        /*console.log("browser /"/"/"/" = " + this.browserHeight + " offsetTop = " + el.offsetTop + " C. Rect.y = " + el.getBoundingClientRect().y) + " scroll % = " + scrollPercent;*/
      console.log("scroll % = " + scrollPercent + " threshhold % = " + this.thresholdPercent);
      if (scrollPercent < this.thresholdPercent) {
        el.classList.add("reveal-item--is-visible");
        el.isRevealed = true;
        if (el.isLastItem) {
          window.removeEventListener("scroll", this.scrollThrottle);
        }
      }
    }
  }

  upArrowWasClicked() {
    nav.classList.remove("active");
  }
}

export default RevealOnScroll;
