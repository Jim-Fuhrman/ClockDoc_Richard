import axios from "axios";

class Search {
  // 1. constructor is where we describe and create/initiate our object. we define properties in the constructor like eye color, name of a person, etc.
  constructor() {
    this.addSearchHTML(); /* addSearchHTML must be coded first; otherwise, the next lines will not run correctly. The elements they're trying to access won't even exist yet. */
    this.resultsDiv = document.querySelector("#search-overlay__results");
    /* Can't use getElementById on the line above. I tried it. It didn't work. Turning search-overlay__results into a class didn't work either. */
    this.openButton = document.querySelectorAll(".js-search-trigger");
    this.closeButton = document.querySelector(".search-overlay__close");
    this.searchOverlay = document.querySelector(".search-overlay");
    this.searchField = document.querySelector("#search-term");
    this.events(); /* This makes sure our add event listeners get added right away. */
    this.isOverlayOpen = false;
    this.isSpinnerVisible = false;
    this.previousValue;
    this.typingTimer;
  }

  // 2. events - when something gets clicked on, for example. Where we connect the dots between the constructor and the actions it can perform. the main central office. if this.head feels, cold, we wear a hat.
  events() {
    this.openButton.forEach((el) => {
      el.addEventListener("click", (e) => {
        e.preventDefault();
        this.openOverlay();
      });
    });

    this.closeButton.addEventListener("click", () => this.closeOverlay());
    /* keyup/keydown pass along keycode info (e) to the method typingLogic */
    this.searchField.addEventListener("keyup", () => this.typingLogic());
    /* we use keyup because keydown fires off so fast, it doesn't give the search field a chance to update its own value. */
  }

  // 3. methods (function, action...)
  typingLogic() {
    /* typingLogic executes for every keystroke typed. */
    if (this.searchField.value != this.previousValue) {
      clearTimeout(
        this.typingTimer
      ); /* this says nope, forget the previous typingTimer. We only want the setTimeout function to run after 3/4 of a second or 750 millisecond wait without a keystroke event. */
      if (this.searchField.value) {
        /* as long as the search field isn't completely blank, this evaluates to true. */
        /* If there's something in the search box -- */
        if (!this.isSpinnerVisible) {
          /* if the spinner isn't visible -- spinner-loader is in /layout/shame.scss */
          this.resultsDiv.innerHTML = `<div class="spinner-loader"></div>`;
          this.isSpinnerVisible = true;
        }
        this.typingTimer = setTimeout(this.getResults(), 750);
      } else {
        /* if there's nothing in the search box, then erase the previous search results and make the spinner invisible as well. */
        this.resultsDiv.innerHTML = "";
        this.isSpinnerVisible = false;
      }
    }
    this.previousValue = this.searchField.value; /* we keep track of the search criteria's previous value so arrow keys won't trigger the spinner. */
  }

  /* When I removed the await in front of axios.get, the execution made it past console.log(getResults #1. Now it's dying when it reaches generalInfo. */
  async getResults() {
    try {
      const apiUrl =
        clockdoctorData.root_url +
        "/wp-json/clockdoc/v1/search?term=" +
        this.searchField.value;
      const response = await axios.get(apiUrl);
      const results = response.data;
      this.resultsDiv.innerHTML = `
    <div class="row">   
        <div class="one-third">
            <h2 class="search-overlay__section-title">Clocks</h2>
            ${
              results.clocks.length
                ? '<ul class="link-list min-list">'
                : `<p>No clocks match that search. <a href="${clockdoctorData.root_url}/clocks">View all clocks</a></p>`
            }
              ${results.clocks
                .map(
                  (item) =>
                    `<li><a href="${item.permalink}">${item.title}</a></li>`
                )
                .join("")}
            ${results.clocks.length ? "</ul>" : ""}
        </div>
        <div class="one-third">
            <h2 class="search-overlay__section-title">Watches</h2>
            ${
              results.watches.length
                ? '<ul class="link-list min-list">'
                : `<p>No watches match that search. <a href="${clockdoctorData.root_url}/watches">View all watches</a></p>`
            }
              ${results.watches
                .map(
                  (item) =>
                    `<li><a href="${item.permalink}">${item.title}</a></li>`
                )
                .join("")}
            ${results.watches.length ? "</ul>" : ""}
        </div>
        <div class="one-third">
            <h2 class="search-overlay__section-title">Miscellaneous Items</h2>
            ${
              results.misc_items.length
                ? '<ul class="link-list min-list">'
                : `<p>No misc. items match that search. <a href="${clockdoctorData.root_url}/misc_items">View all Miscellaneous Items</a></p>`
            }
              ${results.misc_items
                .map(
                  (item) =>
                    `<li><a href="${item.permalink}">${item.title}</a></li>`
                )
                .join("")}
            ${results.misc_items.length ? "</ul>" : ""}
        </div>
        <div class="one-whole t-center">  
            <h2 class="search-overlay__section-title">General Information</h2>
              ${
                results.generalInfo.length
                  ? '<ul class="link-list min-list">'
                  : "<p> no general info matches that search </p>"
              }
                  ${results.generalInfo
                    .map(
                      (item) =>
                        `<li><a href="${item.permalink}">${item.title}</a> ${
                          item.postType == "post" ? `by ${item.authorName}` : ""
                        }</li>`
                    )
                    .join("")}
                ${results.generalInfo.length ? "</ul>" : ""}
        </div>
    </div>
      `;
      this.isSpinnerVisible = false;
    } catch (e) {
      console.log(e);
    }
  } /* the dollar sign with curly brackets is a native part of Javascript. This tells Javascript everything between the curly brackets needs to be evaluated as real Javascript code. */

  openOverlay() {
    this.searchOverlay.classList.add("search-overlay--active");
    document.body.classList.add("body-no-scroll");
    this.searchField.value = "";
    this.isOverlayOpen = true;
    setTimeout(() => this.searchField.focus(), 301);
  }

  closeOverlay() {
    this.searchOverlay.classList.remove("search-overlay--active");
    document.body.classList.remove("body-no-scroll");
    this.isOverlayOpen = false;
  }

  addSearchHTML() {
    /* The container class horizontally centers everything on the screen. */
    document.body.insertAdjacentHTML(
      "beforeend",
      `
        <div class="search-overlay">   
            <div class="search-overlay__top">
                <div class="container">  
                    <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
                    <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
                    <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
                </div>
            </div>

            <div class="container">
                <div id="search-overlay__results"></div>
            </div>
        </div>    
    `
    );
  }
}

export default Search;
