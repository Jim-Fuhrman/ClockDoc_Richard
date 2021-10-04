class ClassHeights {
  constructor() {
    this.contactInfo = document.querySelector(".contactInfo__bkgd");
    this.contactInfoColor = document.querySelector(".contactInfo__bkgd--color");
    this.productGallery = document.querySelector(".products-background");
    this.events();
  }

  events() {
    /*if (this.contactInfo !== null) {
      this.calcContactInfoHeight();
    } else {
      alert(`contactInfo is null`);
    }*/
    this.calcContactInfoHeight();
    if (this.productGallery !== null) {
      this.calcProdGalHeight();
    }
  }

  calcContactInfoHeight() {
    /* this next if was coded because a big problem was unique to the Nest Hub contactInfo section. Nest Hub is 1024px by 600. 
    Its contactInfo was spilling over into the footer. It looked really bad! */
    if (window.innerWidth === 1024) {
      if (window.innerHeight === 600) {
        this.contactInfo.style.height = "90vh";
        this.contactInfoColor.style.height = "90vh";
      }
    }
  }

  calcProdGalHeight() {
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

export default ClassHeights;
