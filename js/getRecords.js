// Update User Function

function getRecords(uid) {
  $.ajax({
    method: "POST",
    url: "/crud/includes/getRecords.php",
    data: { id: uid },
    dataType: "json",
    success: function (response) {
      let { id, firstname, lastname, address, age, contactNumber } =
        response[0];

      $("#new-firstname").val(firstname);
      $("#new-lastname").val(lastname);
      $("#new-address").val(address);
      $("#new-age").val(age);
      $("#new-contactNumber").val(contactNumber);

      UpdateUser(id);
      // To display Modal
      $(".update-modal").css("display", "block");
    },
    error: function (err) {
      console.log(err);
    },
  });
}
