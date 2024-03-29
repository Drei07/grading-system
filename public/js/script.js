window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
    // Set a timer to hide the loader after a certain duration (e.g., 3000 milliseconds or 3 seconds)
    setTimeout(() => {
        loader.classList.add("loader--hidden");

        loader.addEventListener("transitionend", () => {
            document.body.removeChild(loader);
        });
    }, 2000); // Adjust the time interval as needed
});


// jQuery script to allow only numeric input
$(document).ready(function () {
    $('.numbers').on('input', function () {
        // Remove non-numeric characters
        $(this).val($(this).val().replace(/[^0-9]/g, ''));
    });
});



$(function () {
    var app = $("#app"),
      init = $("#init"),
      layer = $("#layer"),
      input = $("#inp-cover input"),
      button = $("button");

    function toggleApp() {
      app.toggleClass("opened");

      if (button.hasClass("shadow")) button.toggleClass("shadow");
      else
        setTimeout(function () {
          button.toggleClass("shadow");
        }, 300);

      if (app.hasClass("opened")) {
        setTimeout(function () {
          input.toggleClass("move-up");
        }, 200);
        setTimeout(function () {
          input.focus();
        }, 500);
      } else
        setTimeout(function () {
          input.toggleClass("move-up").val("");
        }, 200);

      if (!layer.hasClass("sl")) {
        setTimeout(function () {
          layer.addClass("sl");
        }, 800);
      } else
        setTimeout(function () {
          layer.removeClass("sl");
        }, 300);
    }

    layer.on("click", toggleApp);
    init.on("click", toggleApp);
  });
