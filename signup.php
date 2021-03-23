<?php
include('./connection.php');
$user = $_POST['usern'];
$pass = $_POST['passn'];
$Fname = $_POST['firstName'];
$Lname = $_POST['lastName'];
$result = serverQuery("SELECT * FROM UserInfo WHERE user = '$user'");
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 0) {
    $conn = serverQuery("INSERT INTO `UserInfo` (`User`, `Password`, `firsr_name`, `last_name`) VALUES ('" . $user . "', '" . $pass . "', '" . $Fname . "', '" . $Lname . "');");
    header("Location: index.js");
} else {
    // header("Location: index.php");
    echo "this record is already added";
}
