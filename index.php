<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP AJAX CRUD</title>
    <link rel="stylesheet" href="css/styles.css" />

    <script src="https://code.jquery.com/jquery-3.6.1.js" refer></script>
    <script src="js/addUsers.js" defer></script>
    <script src="js/users.js" defer></script>
    <script src="js/updateUser.js" defer></script>
    <script src="js/deleteUser.js" defer></script>
    <script src="js/getRecords.js" defer></script>


</head>

<body>
    <div class="container">
        <h1>PHP-OOP CRUD</h1>
        <header class="header">
            <form id="search-user">
                <input id="searchInput" name="searchUser" type="text" placeholder="Search User..." />
            </form>

            <button type="button" onclick="$('.adduser-modal').css('display', 'block')" class="btn modalbtn">Add
                User</button>
        </header>

        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                </tr>

            </thead>
            <tbody id="table-body">
                <!-- Table data -->

            </tbody>
        </table>

        <?php include_once "./addUserModal.php"; ?>
        <?php include_once "./updateUserModal.php"; ?>

    </div>
</body>

</html>