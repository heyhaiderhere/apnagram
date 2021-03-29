<?php
include('./connection.php');
session_start();
$caption = $_POST['share'];
$user = $_SESSION['usern'];
$UserID = $_SESSION['UID'];
$img = $_FILES['img'];
if (isset($_POST['submit'])) {
    if ($img['name'] == '') {
        echo "<h2>An Image Please.</h2>";
    } else {
        $filename = $img['tmp_name'];
        $client_id = "5581099526865a0";
        $handle = fopen($filename, "r");
        $data = fread($handle, filesize($filename));
        $pvars   = array('image' => base64_encode($data));
        $timeout = 30;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
        curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
        $out = curl_exec($curl);
        curl_close($curl);
        $pms = json_decode($out, true);
        $url = $pms['data']['link'];
        if ($url != "") {
            $conn = serverQuery("INSERT INTO `posts` (`UserID`,`image`, `caption`, `time`, `email`, `likes`) VALUES ('" . $UserID . "','" . $url . "', '" . $caption . "', CURRENT_TIME(), '" . $user . "', '0');");
            if (!$conn) {
                echo "connection failed" . mysqli_connect_error();
            } else {
                echo "record added";
                header("Location: ./feed.php");
            }
        } else {
            echo "<h2>There's a Prodjfblem</h2>";
            echo $pms['data']['error'];
        }
    }
}
