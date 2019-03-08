<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'repairs');
if ($_SERVER['REQUEST_METHOD'] =='POST') {

    $name = $mysqli->real_escape_string($_POST['name']);
    $machine = $mysqli->real_escape_string($_POST['machine']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $contact = $mysqli->real_escape_string($_POST['contact']);
    $problem = $mysqli->real_escape_string($_POST['problem']);
    $location = $mysqli->real_escape_string($_POST['location']);

    $sql = "INSERT INTO users (user_name, user_machine, user_email, user_contact, user_problem, user_location) VALUES ('$name', $machine, '$email', '$contact', '$problem', '$location');";

    header("Location: index.php?submit=success");
    exit();

} else {
    header("Location: index.html?submit=failed");
    exit(); 
}
?>