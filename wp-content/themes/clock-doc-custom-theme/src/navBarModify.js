import throttle from "lodash/throttle";

class NavBarModify {
  constructor() {
    this.nav = document.querySelector(".site-header__nav");
    this.dropdownMenu = document.querySelector(".dropdown__content");
    this.doctorKitIcon = document.querySelector(".site-header__nav-icon");
    this.hamburgerIcon = document.querySelector(".site-header__menu-icon");
    this.scrollThrottle = throttle(this.calcCaller, 200).bind(this);
    this.events();
  }

  calcCaller() {
    this.fixNav(this.nav);
  }

  events() {
    window.addEventListener("scroll", this.scrollThrottle);
  }

  /* We don't want the doctor's kit icon to overlap into the page-banner title. */
  /* On screen sizes smaller than 616px we don't want the hamburger icon to overlap anything either. */
  fixNav() {
    if (window.innerWidth < 616) {
      this.fixNavOnSmallScreens();
    } else {
      if (window.scrollY > this.nav.offsetHeight + 10) {
        this.doctorKitIcon.classList.add("hide");
        if (window.scrollY > this.nav.offsetHeight + 170) {
          this.nav.classList.add("active");
          this.dropdownMenu.classList.add("active");
        } else {
          this.nav.classList.remove("active");
          this.dropdownMenu.classList.remove("active");
        }
      } else {
        this.doctorKitIcon.classList.remove("hide");
      }
    }
  }

  fixNavOnSmallScreens() {
    if (window.scrollY > this.nav.offsetHeight + 100) {
      this.nav.classList.add("hide");
      this.hamburgerIcon.classList.add("hide");
    } else {
      this.nav.classList.remove("hide"); /* Please show it */
      this.hamburgerIcon.classList.remove("hide"); /* Please show it */
    }
  }
}

export default NavBarModify;
