<?php

include 'dbh.php';

$mood = $_POST['mood'];
$health = $_POST['health'];
$active = $_POST['active'];
$social = $_POST['social'];
//messages
$compliment = $_POST['compliment'];
$happy = $_POST['happy'];
$thankful = $_POST['thankful'];

session_start();
$id = $_SESSION['user_id'];

$sql = "INSERT INTO `scoreslumo` (`user_id`, `mood`, `active`, `health`, `social`, `date`) VALUES ('$id','$mood','$social','$active','$health', CURDATE());";

$result = mysqli_query($con, $sql);

            
$sql = "INSERT INTO `message` (`user_id`, `compliment`, `thankful`, `happy`, `date`) VALUES ('$id', '$compliment', '$happy', '$thankful', CURDATE());";

$result = mysqli_query($con, $sql);

?>