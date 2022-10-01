function UpdateUser(id) {
  $("#updateUserForm").submit((e) => {
    e.preventDefault();

    let newFirstname = $("#new-firstname").val();
    let newLastname = $("#new-lastname").val();
    let newAddress = $("#new-address").val();
    let newAge = $("#new-age").val();
    let newContactNumber = $("#new-contactNumber").val();

    $.ajax({
      method: "POST",
      url: "/crud/includes/UpdateUser.php",
      data: {
        id,
        firstname: newFirstname,
        lastname: newLastname,
        address: newAddress,
        age: newAge,
        contactNumber: newContactNumber,
      },
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
}
