<?php
function serverQuery($query)
{
    $serverName = "remotemysql.com";
    $userName = "NcLc7Ecx9a";
    $password = "Pv1RkqGQCU";
    $selectDB = "NcLc7Ecx9a";


    $connection = mysqli_connect($serverName, $userName, $password, $selectDB);
    $result = mysqli_query($connection, $query);
    return $result;
}
