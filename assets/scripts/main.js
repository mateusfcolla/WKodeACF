import "../styles/main.scss";
import "../../node_modules/@fancyapps/ui/dist/fancybox/fancybox.css";

import "./base/scroll-entrance";
import "../slick/slick.min.js";
import "./config/product-slider";
import "./config/fancybox";

import "./blocks/slider";

import "./header/header-scroll-logic";
import "./header/megamenu-logic";

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    if (window.innerWidth <= 1000) {
      let menu = document.querySelector(
        ".wkode-header--mobile .wkode-header__nav--bottom"
      );
      let body = document.querySelector("body");
      menu.classList.toggle("wkode-header__nav--active");
      body.classList.toggle("body-megamenu-active");
    }
    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});
