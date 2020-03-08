<?php

include 'dbh.php';

$goal = $_POST['goal'];

session_start();
$id = $_SESSION['user_id'];

$sql = "UPDATE `dailygoals` SET `date`=CURRENT_DATE WHERE `daily_goal`='".$goal."' AND `user_id` = ".$id;
$result = mysqli_query($con, $sql);


?>