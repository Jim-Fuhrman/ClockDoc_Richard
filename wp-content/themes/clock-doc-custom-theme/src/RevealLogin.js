class RevealLogin {
  constructor() {
    this.loginBtn = document.querySelector(".site-header__util");
    this.events();
  }

  events() {
    window.addEventListener("keydown", (keyPressed) => {
      if (keyPressed.key === "Escape") {
        console.log("the Escape key was pressed.");
        this.loginBtn.classList.toggle("hide");
      }
    });
  }
}

export default RevealLogin;
