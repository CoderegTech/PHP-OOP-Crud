$(document).ready(function () {
  $("#addUserForm").submit(function (e) {
    e.preventDefault();

    let firstname = $("#firstname").val();
    let lastname = $("#lastname").val();
    let address = $("#address").val();
    let age = $("#age").val();
    let contactNumber = $("#contactNumber").val();

    $.ajax({
      method: "POST",
      url: "/crud/includes/AddUser.php",
      data: { firstname, lastname, address, age, contactNumber },
      dataType: "text",
      success: function (response) {
        alert(response);
        displayUsers();
      },
      error: function (err) {
        console.log(err);
      },
    });
  });
});
