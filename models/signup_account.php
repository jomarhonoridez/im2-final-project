<?php

include '../db/dbconnect.php';

$email = htmlspecialchars( $_POST['email']);
$fn = htmlspecialchars( $_POST ['firstname']);
$ln = htmlspecialchars( $_POST ['lastname']);
$pass = htmlspecialchars( $_POST ['password']);
$cpass = htmlspecialchars( $_POST ['cpassword']);

$sql = "INSERT INTO account (email, firstname, lastname, password) VALUES ('$email', '$fn', '$ln', '$pass')";

$result = $con->query($sql);
if (!$result) {
    echo "failed to signup";
}
?>

<a href="/login.php">back to home</a>