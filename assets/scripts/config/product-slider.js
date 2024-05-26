import $ from "jquery";

$(".wkode-quartos__slider").slick({
  autoplay: true,
  autoplaySpeed: 6000,
  dots: true,
  infinite: false,
  speed: 500,
  arrows: true,
  prevArrow: `<button class="arrow-button left-arrow" style="background-image: url('../../wp-content/themes/WKode-theme-pvm/assets/img/svg/new-carrousel-left.svg')"></button>`,
  nextArrow: `<button class="arrow-button right-arrow" style="background-image: url('../../wp-content/themes/WKode-theme-pvm/assets/img/svg/new-carrousel-right.svg')"></button>`,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});
$(".testimonial-wrapper-wrapper").slick({
  autoplay: true,
  autoplaySpeed: 6000,
  dots: true,
  infinite: true,
  speed: 500,
  arrows: true,
  prevArrow: `<button class="arrow-button left-arrow" style="background-image: url('../../wp-content/themes/WKode-theme-pvm/assets/img/svg/new-carrousel-left.svg')"></button>`,
  nextArrow: `<button class="arrow-button right-arrow" style="background-image: url('../../wp-content/themes/WKode-theme-pvm/assets/img/svg/new-carrousel-right.svg')"></button>`,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});
