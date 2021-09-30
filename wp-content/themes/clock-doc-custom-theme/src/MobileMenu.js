class MobileMenu {
  constructor() {
    this.hamburgerIcon = document.querySelector(
      ".site-header__mobile-menu--icons--hamburger"
    );
    this.menuContent = document.querySelector(".site-header__menu-content");
    this.shlssi = document.querySelector(
      ".site-header__large-screen-search-icon"
    );
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
