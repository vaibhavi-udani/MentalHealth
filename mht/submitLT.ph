<?php

include 'dbh.php';

$dgGoals = $_POST['dgGoals'];

session_start();
$id = $_SESSION['user_id'];

$sql="DELETE FROM `dailygoals` WHERE `user_id`= ".$id;
$result = mysqli_query($con, $sql);

for( $i = 0; $i<sizeof($dgGoals); $i++ ) {
    $sql = "INSERT INTO `dailygoals` (`user_id`, `daily_goal`) VALUES ('$id', '$dgGoals[$i]');";
    $result = mysqli_query($con, $sql);
}



?>