<?php 

class User extends CrudContrl {
	
	private $id;
	private $firstname;
	private $lastname;
	private $address;
	private $age;
	private $contactNumber;

	public function __construct($id, $firstname, $lastname ,$address ,$age, $contactNumber) {
			$this->id = $id;
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->address = $address;
			$this->age = $age;
			$this->contactNumber = $contactNumber;

	}

	// Get User to Update
	public function getUserToUpdate() {
		$this->getUserUpdate($this->id);
	}

	// Search User from Database
	public function searchUser() {
		$this->searchUsr($this->firstname, $this->lastname);
	}


	// Add User to Database
	public function addUser() {

		if (!$this->isEmpty()) {

			$this->createUser($this->firstname, $this->lastname ,$this->address ,$this->age, $this->contactNumber);
		} else {

			echo "Please fill out all fields!";
		}	
	}



	// Show Users from Database
	public function showUsers() {
		$this->getUsers();
	}



	// // Delete User from Database
	public function delUser() {
		$this->deleteUser($this->id);
	}

	

	// Update User from Database
	public function updateNewUser() {
			if (!$this->isEmpty()) {
			$this->updateUser($this->id, $this->firstname, $this->lastname ,$this->address ,$this->age, $this->contactNumber);
			} else {
			echo "Please fill out all fields!";

			}
	}

	// Verify if inputs in Empty
	private function isEmpty() {
		if (empty(empty($this->id) || $this->firstname) || empty($this->lastname) || empty($this->address) || empty($this->age)  || empty($this->contactNumber)) {
			return true;
		} else {
			return false;
		}
	}


}