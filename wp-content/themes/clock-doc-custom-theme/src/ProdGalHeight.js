class ProdGalHeight {
  constructor() {
    this.productGallery = document.querySelector(".products-background");
    if (this.productGallery !== null) {
      this.calcHeight();
    }
  }
  calcHeight() {
    if (window.innerWidth <= 355) {
      switch (window.innerHeight) {
        case 480 /* iphone 4 has a height of 480px */:
          this.productGallery.style.height = "310vh";
          break;
        case 533 /* Nokia Lumia 520 has a height of 533px */:
          this.productGallery.style.height = "280vh";
          break;
        case 568 /* iphone5/SE has a height of 568px */:
          this.productGallery.style.height = "260vh";
          break;
        default:
          this.productGallery.style.height = "310vh";
      }
    }
    if (window.innerWidth <= 280) {
      this.productGallery.style.height = "200vh";
    }

    if (window.innerWidth <= 240) {
      this.productGallery.style.height = "350vh";
    }
  }
}

export default ProdGalHeight;
