class MobileMenu {
  constructor() {
    this.shlssi = document.querySelector(
      /* this prevents the search icon from showing when the user clicks Products */
      ".site-header__large-screen-search-icon"
    );
    this.hamburgerIcon = document.querySelector(
      ".site-header__mobile-menu--icons--hamburger"
    );
    this.menuContent = document.querySelector(".site-header__menu-content");
    this.events();
  }
  events() {
    this.hamburgerIcon.addEventListener("click", () => this.toggleTheMenu());
  }

  toggleTheMenu() {
    this.menuContent.classList.toggle("site-header__menu-content--is-visible");
    this.hamburgerIcon.classList.toggle(
      "site-header__mobile-menu--icons--hamburger--close-x"
    );
    this.shlssi.classList.toggle("hide");
  }

  goToTopOfWebsite() {}
}

export default MobileMenu;
