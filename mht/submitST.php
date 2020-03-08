<?php

include 'dbh.php';

$stGoals = $_POST['stGoals'];
$stDates = $_POST['stDates'];

session_start();
$id = $_SESSION['user_id'];

$sql="DELETE FROM `shortgoals` WHERE `user_id`=".$id;
$result = mysqli_query($con, $sql);

for( $i = 0; $i<sizeof($stGoals); $i++ ) {
    $sql = "INSERT INTO `shortgoals`(`user_id`, `short_goal`, `date`) VALUES ('$id', '$stGoals[$i]','$stDates[$i]');";
    $result = mysqli_query($con, $sql);
}



?>




?>