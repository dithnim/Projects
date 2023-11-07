$(document).ready(function () {
  //?Forgot password section
  $("#forgot-password").click(function () {
    ReactDOM.render(
      <div>
        <label htmlFor="email">Email</label>
        <input
          type="email"
          id="email"
          className="form-control mt-1 mb-2"
          placeholder="Enter your email"
        />

        <label htmlFor="phone">Mobile NO.</label>
        <input
          type="tel"
          maxLength="10"
          id="phone"
          placeholder="Enter your mobile number"
          className="form-control mt-1 mb-2"
        />

        <label htmlFor="new password">New password</label>
        <input
          type="password"
          id="new-password"
          className="form-control mt-1 mb-2"
          placeholder="Enter the new password"
        />

        <label htmlFor="confirm password">Confirm password</label>
        <input
          type="password"
          id="confirm-password"
          className="form-control mt-1"
          placeholder="Retype to confirm"
        />
      </div>,
      document.getElementById("login-content")
    );

    ReactDOM.render(
      <label style={{ cursor: "pointer" }}>Confirm</label>,
      document.getElementById("button-login")
    );
  });

  //?Reset entered data
  $("#button-cancel").click(function () {
    $("#username").val("");
    $("#password").val("");
    $("#phone").val("");
    $("#email").val("");
    $("#new-password").val("");
    $("#confirm-password").val("");
  });

  $("#button-login").click(function () {
    let uname = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    if (uname != "") {
      if (pass != "") {
        var jsondata = {
          username: uname,
          password: pass,
        };

        jQuery.post(
          "http://localhost/projects/Projects/WG-new/apis/admin_login.php",
          JSON.stringify(jsondata)
        );
      }
    }

    if (uname == "") {
      $("#username").addClass("is-invalid").removeClass("is-valid mb-2");
      $("#password_validation").addClass("mb-2");
    } else {
      $("#username").addClass("is-valid").removeClass("is-invalid");
    }

    if (pass == "") {
      $("#password").addClass("is-invalid").removeClass("is-valid");
    } else {
      $("#password").addClass("is-valid").removeClass("is-invalid");
    }
  });
});
