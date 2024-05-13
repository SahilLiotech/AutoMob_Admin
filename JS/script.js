//Get The Form Data from the index.php and send it to login.php
$(document).ready(function () {
  $(".admin-login-form").submit(function (e) {
    e.preventDefault();
    var uname = $("#username").val();
    var password = $("#password").val();

    if (uname === "" || password === "") {
      alert("Both email and password are required.");
    } else {
      $.ajax({
        type: "POST",
        url: "login.php",
        data: $(this).serialize(),
        dataType: "JSON",
        success: function (response) {
          if (response["success"] == false) {
            alert(response["message"]);
          } else {
            alert(response["message"]);
            location.href = "dashboard.php";
          }
        },
      });
    }
  });

  //Get The Data from the add_admin.php and send to the add_admin_data.php
  $(".admin-add-form").submit(function (e) {
    e.preventDefault();
    var fullname = $("#fullname").val();
    var uname = $("#uname").val();
    var email = $("#email").val();
    var password = $("#password").val();

    if (fullname === "" || uname === "" || email === "" || password === "") {
      alert("All the fields are required.");
    } else {
      $.ajax({
        type: "POST",
        url: "add_admin_data.php",
        data: $(this).serialize(),
        dataType: "JSON",
        success: function (response) {
          if (response["success"] == false) {
            alert(response["message"]);
          } else {
            alert(response["message"]);
            location.href = "index.php";
          }
        },
      });
    }
  });
});
