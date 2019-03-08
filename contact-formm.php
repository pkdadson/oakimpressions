<?php
//define the variables and set to  empty values
$name_error = $email_error = "";
$name = $email = $message = "";

//forms is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST[["name"])) {
		$name_error = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		//check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			$anem_error = "Only letters allowed";
		}
	}
	if (empty($_POST["email"])) {
		$email_error = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		//check if email address is well formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email_error = "Invalid email format";
		}
	}

	if (empty($_POST["message"])) {
		$message = "";
	} else {
		$message = test_input($_POST["message"]);
	 }
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

