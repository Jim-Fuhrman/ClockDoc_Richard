class MobileMenu {
  constructor() {
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
  }

  goToTopOfWebsite() {}
}

export default MobileMenu;
