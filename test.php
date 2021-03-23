<?php
include('./connection.php');
session_start();
$caption = $_POST['share'];
$user = $_SESSION['usern'];
$name = $_FILES['image']['name'];
$temp_name = $_FILES['image']['tmp_name'];
$type = $_FILES['image']['type'];
$size = $_FILES['image']['size'];
$postName = substr($user, 0, 5);
$source = 'images/' . $postName . time() . '.jpg';
move_uploaded_file($temp_name, $source);

$conn = serverQuery("INSERT INTO `posts` (`image`, `caption`, `time`, `email`, `likes`) VALUES ('" . $source . "', '" . $caption . "', CURRENT_TIME(), '" . $user . "', '0');");

if (!$conn) {
    echo "connection failed" . mysqli_connect_error();
} else {
    echo "record added";
    header("Location: ./feed.php");
}
