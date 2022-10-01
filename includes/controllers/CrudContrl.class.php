<?php

class CrudContrl extends Dbh {


	protected function getUserUpdate($id) {
		try {
			// MSQL Query
			$sql = "SELECT * FROM users WHERE id = ?;";
			$stmt = $this->connect()->prepare($sql);
			$execute = $stmt->execute([$id]);  

			if ($execute && $stmt->rowCount() > 0) {

				$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
				echo json_encode($results);

			} else {
				echo "No Records Found!";
			}
		} catch (Exception $e) {
			echo "Query Failed: " . $e->getMessage();
	}
	}


	// Search User to Database
	protected function searchUsr($firstname, $lastname) {

		try {
			// MSQL Query
			$sql = "SELECT * FROM users WHERE firstname LIKE '%$firstname%' OR lastname LIKE '%$lastname%';";
			$stmt = $this->connect()->prepare($sql);
			$execute = $stmt->execute();  
			if ($execute && $stmt->rowCount() > 0) {

				$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
				echo json_encode($results);

			} else {
				echo "No Records Found!";
			}
		} catch (Exception $e) {
			echo "Query Failed: " . $e->getMessage();
	}
			
	}


	// Add Users to Database
	protected function createUser($firstname, $lastname ,$address ,$age, $contactNumber) {
		try {
			// MSQL Query
			$sql = "INSERT INTO users (firstname, lastname, address, age, contactNumber) VALUES (?, ?, ?, ?, ?);";

			$stmt = $this->connect()->prepare($sql);

			$execute = $stmt->execute([$firstname, $lastname ,$address ,$age, $contactNumber]);

			if ($execute) {
				echo "User added successfully";
			}
		} catch (Exception $e) {
			echo "Query Failed: " . $e->getMessage();
	}

			
	}

	// Show Users from Database
	protected function getUsers() {
		try {
			// MSQL Query
			$sql = "SELECT * FROM users;";
			$stmt = $this->connect()->prepare($sql);
			$execute = $stmt->execute();  

			if ($execute && $stmt->rowCount() > 0) {

				$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
				echo json_encode($results);

			} else {
				echo "No Records Found!";
			}
		} catch (Exception $e) {
			echo "Query Failed: " . $e->getMessage();
	}
			
	}

	// Update Users
	protected function updateUser($id, $firstname, $lastname ,$address ,$age, $contactNumber) {
		try {

			// MSQL Query
			$sql = "UPDATE users SET firstname= ?, lastname= ?,
			address= ?, age= ?, contactNumber= ? WHERE id = ?";

			$stmt = $this->connect()->prepare($sql);

			$execute = $stmt->execute([$firstname, $lastname ,$address ,$age, $contactNumber, $id]);

			if ($execute) {
				echo "User Updated!";
			}
		} catch (Exception $e) {
			echo "Query Failed: " . $e->getMessage();
	}
	}

	// Delete Users 
	protected function deleteUser($id) {
		try {

			// MSQL Query
			$sql = "DELETE FROM users WHERE id = ?;";

			$stmt = $this->connect()->prepare($sql);

			$execute = $stmt->execute([$id]);

			if ($execute && $stmt->rowCount() > 0) {
				echo "User Deleted!";
			}
		} catch (Exception $e) {
			echo "Query Failed: " . $e->getMessage();
	}
	}

}