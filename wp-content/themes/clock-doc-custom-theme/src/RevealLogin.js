class RevealLogin {
  constructor() {
    /* the site-header__util will appear in the site-header.php file right after the closing nav tag when we want users to see the login/logout buttons. Right now we don't want them to see them. */
    this.loginBtn = document.querySelector(".site-header__util");
    this.events();
  }

  events() {
    window.addEventListener("keydown", (keyPressed) => {
      if (keyPressed.key === "Escape") {
        this.loginBtn.classList.toggle("hide");
      }
    });
  }
}

export default RevealLogin;
