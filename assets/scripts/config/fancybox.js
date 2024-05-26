import { Fancybox } from "@fancyapps/ui";
import "../../../node_modules/@fancyapps/ui/dist/fancybox/fancybox.css";
import { pt } from "@fancyapps/ui/dist/fancybox/l10n/pt.esm.js";

import { Thumbs } from "@fancyapps/ui/dist/carousel/carousel.thumbs.esm.js";
import "@fancyapps/ui/dist/carousel/carousel.thumbs.css";

import { Carousel } from "@fancyapps/ui/dist/carousel/carousel.esm.js";
import "@fancyapps/ui/dist/carousel/carousel.css";

import { Panzoom } from "@fancyapps/ui/dist/panzoom/panzoom.esm.js";
import "@fancyapps/ui/dist/panzoom/panzoom.css";

Fancybox.bind('[data-fancybox="gallery"]', {
  l10n: pt,
});

const container = document.getElementById("myCarousel");

if (container) {
  const options = {
    Dots: false,
    Thumbs: {
      type: "classic",
    },
    Navigation: {
      prevEl: ".custom-prev-button",
      nextEl: ".custom-next-button",
    },
  };

  new Carousel(container, options, { Thumbs });
}

if (window.innerWidth > 1000) {
  document.addEventListener("DOMContentLoaded", function () {
    const panzoomReference = document.querySelector(
      ".wkode-single-panzoom-reference"
    );
    if (panzoomReference) {
      const pzContainer =
        panzoomReference.querySelectorAll(".f-carousel__slide");
      const middleIndex = Math.floor(pzContainer.length / 2);
      let navs = document.querySelectorAll(".f-thumbs__slide");
      let instance = [];
      let config = {
        panMode: "mousemove",
        mouseMoveFactor: 1.25,
        click: false,
        wheel: false,
        scaleFactor: 3,
      };

      async function firstChunk() {
        // Code of the first chunk
        // ...
        navs.forEach(function (item, i) {
          if (i === middleIndex) {
            item.click();
          }
        });
        // Return a resolved promise
        return Promise.resolve();
      }

      function secondChunk() {
        // Code of the second chunk
        // ...
        setTimeout(function () {
          pzContainer.forEach(function (item, i) {
            instance[i] = new Panzoom(item, config);
            item.addEventListener("mouseenter", (event) => {
              if (!event.buttons) {
                instance[i].zoomToMax(event);
              }
            });

            item.addEventListener("mouseleave", () => {
              instance[i].zoomToFit();
            });
          });

          navs.forEach(function (item, i) {
            if (i === 0) {
              item.click();
            }
          });
        }, 100);
      }

      // Usage
      (async function () {
        await firstChunk(); // Wait for the first chunk to complete
        // This code will run only after the first chunk has completed
        secondChunk();
      })();
    }
  });
}

/* Fancybox.bind('[data-fancybox="galleryServices"]', {
  l10n: pt,
}); */

window.addEventListener("load", function () {
  const fancyGalleryCards = document.querySelectorAll(
    ".wkode-quartos-image-wrapper"
  );
  for (let fancyCard of fancyGalleryCards) {
    let fancyBoxCard = fancyCard.getAttribute("get-this-fancybox");
    Fancybox.bind(`[data-fancybox="${fancyBoxCard}"]`, {
      l10n: pt,
    });
  }

  //const servicesContainer = document.getElementById("myServicesCarousel");
  const galleryWrapper = document.querySelectorAll(".wkode-quartos-carousel");
  if (galleryWrapper) {
    const options = {
      Dots: true,
      transition: "slide",
      Navigation: {
        prevEl: ".custom-prev-button",
        nextEl: ".custom-next-button",
      },
    };
    for (let card of galleryWrapper) {
      new Carousel(card, options);
    }
    //new Carousel(servicesContainer, options);
  }
});

Fancybox.bind('[data-fancybox="galleryTourism"]', {
  l10n: pt,
});

const options = {
  transition: "slide",
  Dots: true,
  Navigation: {
    prevEl: ".custom-prev-button",
    nextEl: ".custom-next-button",
  },
};

window.addEventListener("load", function () {
  const imageCarousel1 = document.querySelector(
    ".wkode-single-new-bikes-template-block__image--first"
  );
  new Carousel(imageCarousel1, options);

  Fancybox.bind(`[data-fancybox="firstMainBlock"]`, {
    l10n: pt,
  });

  const imageCarousel2 = document.querySelector(
    ".wkode-single-new-bikes-template-block__image--second"
  );
  new Carousel(imageCarousel2, options);

  Fancybox.bind(`[data-fancybox="secondMainBlock"]`, {
    l10n: pt,
  });
});
