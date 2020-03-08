<?php

include 'dbh.php';

$ltGoals = $_POST['ltGoals'];

session_start();
$id = $_SESSION['user_id'];

$sql="DELETE FROM `longgoals` WHERE `user_id`= ".$id;
$result = mysqli_query($con, $sql);

for( $i = 0; $i<sizeof($ltGoals); $i++ ) {
    $sql = "INSERT INTO `longgoals` (`user_id`, `long_goals`) VALUES ('$id', '$ltGoals[$i]');";
    $result = mysqli_query($con, $sql);
}



?>