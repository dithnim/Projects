$(document).ready(function () {
  function menu_panel() {
    ReactDOM.render();
  }

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

        document.getElementById("success-alert").style.display = "block";
        document.getElementById("null-alert").style.display = "none";
        document.getElementById("warning-alert").style.display = "none";
        setTimeout(function () {
          document.getElementById("success-alert").style.display = "none";
        }, 5000);

        $("#user-email").val("");
      } else {
        document.getElementById("warning-alert").style.display = "block";
        document.getElementById("null-alert").style.display = "none";
        document.getElementById("success-alert").style.display = "none";
        setTimeout(function () {
          document.getElementById("warning-alert").style.display = "none";
        }, 5000);

        $("#user-email").val("");
      }
    } else {
      document.getElementById("null-alert").style.display = "block";
      document.getElementById("success-alert").style.display = "none";
      document.getElementById("warning-alert").style.display = "none";
      setTimeout(function () {
        document.getElementById("null-alert").style.display = "none";
      }, 5000);
    }
  });
});
