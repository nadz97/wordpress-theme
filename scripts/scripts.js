jQuery(document).ready(function ($) {
  function activateMenuItem(element) {
    var menuItems = document.querySelectorAll(".menu li");
    menuItems.forEach(function (item) {
      item.classList.remove("active");
    });
    element.classList.add("active");
  }

  $(".client-logo").slick({
    centerMode: true,
    centerPadding: "60px",
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1,
        },
      },
    ],
  });
});
