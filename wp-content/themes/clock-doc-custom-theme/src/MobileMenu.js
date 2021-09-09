class MobileMenu {
  constructor() {
    this.mobileMenuIcon = document.querySelector(
      ".site-header__mobile-menu--icons--hamburger"
    );
    this.menuContent = document.querySelector(".site-header__menu-content");
    this.siteHeader = document.querySelector(".site-header");
    this.events();
  }
  events() {
    this.mobileMenuIcon.addEventListener("click", () => this.toggleTheMenu());
  }

  toggleTheMenu() {
    this.menuContent.classList.toggle("site-header__menu-content--is-visible");
    this.siteHeader.classList.toggle("site-header--is-expanded");
    this.mobileMenuIcon.classList.toggle(
      "site-header__mobile-menu--icons--hamburger--close-x"
    );
  }

  goToTopOfWebsite() {}
}

export default MobileMenu;
