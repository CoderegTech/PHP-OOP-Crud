<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Content-Type: application/json; charset=UTF-8");

include_once "model/Database.class.php";
include_once "controllers/CrudContrl.class.php";
include_once "controllers/User.class.php";


$method = $_SERVER['REQUEST_METHOD'];


if ($method === "POST") {

	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$age = $_POST['age'];
	$contactNumber = $_POST['contactNumber'];

	$user = new User($id, $firstname, $lastname ,$address ,$age, $contactNumber);
	$user->updateNewUser();
	
} 

?>