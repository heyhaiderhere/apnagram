<?php
include("./connection.php");
$id = $_GET['id'];
$check = serverQuery("select likes from posts where ID=$id;");
$row = mysqli_fetch_assoc($check);
$likes = $row['likes'];

$likes += 1;

$conn = serverQuery("UPDATE `posts` SET `likes` = $likes WHERE `posts`.`ID` = $id ;");
header("Location: feed.php");
