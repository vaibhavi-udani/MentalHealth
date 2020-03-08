<?php

include 'dbh.php';

$compliment = $_POST['compliment'];
$happy = $_POST['happy'];
$thankful = $_POST['thankful'];

session_start();
$id = $_SESSION['user_id'];
            
$sql = "INSERT INTO `message` (`user_id`, `compliment`, `thankful`, `happy`, `date`) VALUES ('$id', '$compliment', '$happy', '$thankful', CURDATE());";

$result = mysqli_query($con, $sql);
header("Location: option_pg.php");

?>