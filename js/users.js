$(document).ready(function () {
  // Display Users
  displayUsers();

  // Search For User in Query
  $("#searchInput").keyup((e) => {
    let name = e.target.value;

    $.ajax({
      method: "POST",
      url: "/crud/includes/SearchUser.php",
      data: { firstname: name, lastname: name },
      dataType: "json",
      success: function (response) {
        let num = 1;
        const users = response.map(
          ({ id, firstname, lastname, address, age, contactNumber }) => {
            return `
                        <tr>
                                <td>${num++}</td>
                                <td>${firstname}</td>
                                <td>${lastname}</td>
                                <td>${address}</td>
                                <td>${age}</td>
                                <td>${contactNumber}</td>
                                <td>
                                  <button onclick="getRecords(${id})" class='btn edit'>Edit</button>
                                  <button onclick="deleteUser(${id})" class='btn delete'>Delete</button>
                                </td>
                               </tr>
                        
                               
                             `;
          }
        );
        $("#table-body").html(users);
      },
      error: function (error) {
        $("#table-body").html(
          `<h1 class="no-records">${error.responseText}</h1>`
        );
      },
    });
  });
});

function displayUsers() {
  // Display User to Website
  $.ajax({
    method: "GET",
    url: "/crud/includes/ShowUsers.php",
    dataType: "json",
    success(response) {
      let num = 1;
      const users = response.map(
        ({ id, firstname, lastname, address, age, contactNumber }) => {
          return `
                      <tr>
                              <td>${num++}</td>
                              <td>${firstname}</td>
                              <td>${lastname}</td>
                              <td>${address}</td>
                              <td>${age}</td>
                              <td>${contactNumber}</td>
                              <td>
                                <button onclick="getRecords(${id})" class='btn edit'>Edit</button>
                                <button onclick="deleteUser(${id})" class='btn delete'>Delete</button>
                              </td>
                             </tr>
                      
                             
                           `;
        }
      );
      $("#table-body").html(users);
    },
    error(error) {
      $("#table-body").html(
        `<h1 class="no-records">${error.responseText}</h1>`
      );
    },
  });
}
