<?php
include('./connection.php');
include('./alert.php');
$user = $_POST['usern'];
$pass = $_POST['passn'];
$result = serverQuery("SELECT * FROM UserInfo WHERE user = '$user' and password = '$pass' ");
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
   session_start();
   header("Location: ./feed.php", false, 302);
   $_SESSION['usern'] = $user;
   $_SESSION['passn'] = $pass;
   $_session['uid'] =  $row['UID'];
} else {
   header("Location: index.php");
}
