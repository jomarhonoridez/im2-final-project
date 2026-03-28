<?php
include '../db/dbconnect.php';

session_start();


$post = htmlspecialchars($_POST['post-area'] );
$aid = htmlspecialchars($_SESSION['aid']);

$sql = "INSERT INTO post VALUES (0, $aid,'$post',NOW(),NOW())";

if ($con ->query ($sql)=== TRUE){
    echo "Post Successful";
}
else{
    echo "Error message:". $sql . "". $can->error;
}