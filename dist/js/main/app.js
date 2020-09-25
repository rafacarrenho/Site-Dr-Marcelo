/*------------------------*\
    OWL CAROUSEL
\*------------------------*/

$(".owl-clinica").owlCarousel({
  autoplay: false,
  autoplayTimeout: 6000,
  loop: true,
  margin: 10,
  responsiveClass: true,
  dots: true,
  nav: false,
  navContainerClass: "owl-nav",
  navClass: ["owl-prev", "owl-next"],
  responsive: {
    0: {
      items: 1,
    },
    960: {
      items: 3,
    },
  },
});

/*------------------------*\
    OWL Doutor
\*------------------------*/

$(".owl-doutor").owlCarousel({
  autoplay: false,
  autoplayTimeout: 6000,
  loop: true,
  margin: 10,
  responsiveClass: true,
  dots: true,
  nav: false,
  navContainerClass: "owl-nav",
  navClass: ["owl-prev", "owl-next"],
  responsive: {
    0: {
      items: 1,
    },
    960: {
      items: 3,
    },
  },
});

/*------------------------*\
    OWL CAROUSEL
\*------------------------*/

$(".owl-icons").owlCarousel({
  autoplay: true,
  autoplayTimeout: 6000,
  loop: true,
  margin: 10,
  responsiveClass: true,
  dots: true,
  nav: false,
  navContainerClass: "owl-nav",
  navClass: ["owl-prev", "owl-next"],
  responsive: {
    0: {
      items: 2,
    },
    662: {
      items: 3,
    },
    960: {
      items: 4,
    },
  },
});

/*------------------------*\
    OWL CAROUSEL
\*------------------------*/

$(".tumor-carousel").owlCarousel({
  autoplay: true,
  autoplayTimeout: 6000,
  loop: true,
  margin: 10,
  responsiveClass: true,
  dots: true,
  nav: false,
  navContainerClass: "owl-nav",
  navClass: ["owl-prev", "owl-next"],
  responsive: {
    0: {
      items: 2,
    },
    662: {
      items: 3,
    },
    960: {
      items: 6,
    },
  },
});

/*------------------------*\
    Deslizar suavemente ao Scroll
\*------------------------*/

// Somente para LP
// $("nav .menu-deslizante a, footer a.nav-link").click(function (e) {
//   // $(".navbar-toggler").click();
//   e.preventDefault();
//   var id = $(this).attr("href"),
//     targetOffSet = $(id).offset().top;
//   /* menuHeight = $('nav').innerHeight(); */
//   $("html, body").animate(
//     {
//       scrollTop: targetOffSet,
//     },
//     700
//   );
// });

$("h5.btn-agende-agora").click(function (e) {
  e.preventDefault();
  var id = $("#banner"),
    targetOffSet = $(id).offset().top;
  /* menuHeight = $('nav').innerHeight(); */
  $("html, body").animate(
    {
      scrollTop: targetOffSet,
    },
    700
  );
});

/*------------------------*\
  #MODAL-GALERIA
\*------------------------*/

$("#clinicaAbout figure").click(function () {
  let modalImg = document.getElementById("img");
  $("#modal-galeria").fadeToggle();
  let bg = $(this).find("img").attr("src");
  modalImg.src = bg;
});

$("#modal-galeria").click(function () {
  $("#modal-galeria").fadeToggle();
});

/*------------------------*\
  #MODAL-Doutor
\*------------------------*/

$(".owl-doutor button").click(function () {
  let modalImg = document.querySelector("#modal-doutor figure img");
  let modalTitulo = document.querySelector("#modal-doutor h2");
  let modalCurriculo = document.querySelector("#modal-doutor .modal-curriculo");

  $("#modal-doutor").fadeToggle();
  let fotoDoutor = $(this).parent().find("img").attr("src");
  let nomeDoutor = $(this).parent().find("h2").html();
  let curriculoDoutor = $(this).parent().find(".curriculo-doutor").html();
  modalImg.src = fotoDoutor;
  modalTitulo.innerHTML = nomeDoutor;
  modalCurriculo.innerHTML = curriculoDoutor;
});

$("#modal-doutor span.close").click(function () {
  $("#modal-doutor").fadeOut();
});

$("#modal-doutor").click(function (e) {
  if (!(e.target !== this)) {
    $("#modal-doutor").fadeOut();
  }
});

/*------------------------*\
  #Formulario TOP
\*------------------------*/
$(".form-row input, .form-row textarea").change(function () {
  if ($(this).val()) {
    $(this).closest(".form-row").addClass("active");
  } else {
    $(this).closest(".form-row").removeClass("active");
  }
});
