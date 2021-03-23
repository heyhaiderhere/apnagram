<?php
function serverQuery($query)
{
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $selectDB = "instagram";
    
    $connection = mysqli_connect($serverName, $userName, $password, $selectDB);
    $result = mysqli_query($connection, $query);
    return $result;
}
?>