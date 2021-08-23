class Search {
  // 1. constructor is where we describe and create/initiate our object.
  constructor() {
    this.openButton = document.querySelector(".js-search-trigger");
    this.closeButton = document.querySelector(".search-overlay__close");
    this.searchOverlay = document.querySelector(".search-overlay");
    this.events(); /* This makes sure our add event listeners get added right away. */
  }

  // 2. events - when something gets clicked on, for example. Where we connect the dots between the constructor and the actions it can perform. the main central office. if this.head feels, cold, we wear a hat.
  events() {
    this.openButton.addEventListener("click", openOverlay());
    this.closeButton.addEventListener("click", closeOverlay());
  }

  // 3. methods (function, action...)
  openOverlay() {
    this.searchOverlay.classList.add("search-overlay--active");
  }

  closeOverlay() {
    this.searchOverlay.classList.remove("search-overlay--active");
  }
}

export default Search;
