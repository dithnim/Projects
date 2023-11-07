$(document).ready(function () {
  function resize() {
    let screen_width = screen.width;

    if (screen_width < 735) {
      $(".navlist").css("display", "none");
      $(".menu-icon").css("display", "block");
    } else {
      $(".navlist").css("display", "block");
      $(".menu-icon").css("display", "none");
    }
  }

  resize();

  $(window).resize(function () {
    resize();
  });

  $("#user-input-button").click(function () {
    let user_email = document.getElementById("user-email").value;

    if (user_email != "") {
      if (user_email.indexOf("@gmail.com") > -1) {
        //?Sending json data to php API
        var jsondata = {
          email: user_email,
        };

        jQuery.post(
          "http://localhost/projects/Projects/WG-new/apis/post_email.php",
          JSON.stringify(jsondata),
          function (returnData) {
            alert(returnData);
          }
        );

        $("#success-alert").css("display", "block");
        $("#null-alert").css("display", "none");
        $("#warning-alert").css("display", "none");
        setTimeout(function () {
          $("#success-alert").css("display", "none");
        }, 5000);

        $("#user-email").val("");
      } else {
        $("#warning-alert").css("display", "block");
        $("#null-alert").css("display", "none");
        $("#success-alert").css("display", "none");
        setTimeout(function () {
          $("#warning-alert").css("display", "none");
        }, 5000);

        $("#user-email").val("");
      }
    } else {
      $("#null-alert").css("display", "block");
      $("#success-alert").css("display", "none");
      $("#warning-alert").css("display", "none");
      setTimeout(function () {
        $("#null-alert").css("display", "none");
      }, 5000);
    }
  });
});
