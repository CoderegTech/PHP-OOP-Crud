// Delete User Function

function deleteUser(id) {
  if (confirm("Do you want to delete this record?")) {
    $.ajax({
      method: "POST",
      url: "/crud/includes/DeleteUser.php",
      data: { id: id },
      success: function (response) {
        alert(response);
        displayUsers();
      },
      error: function (err) {
        console.log(err);
        displayUsers();
      },
    });
  }
}
