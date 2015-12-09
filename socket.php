<?php
    $host = getenv('IP');
    $user = 'mblanton';
    $pass = "";
    $db = "shelby";
    $port = 3306;

    // Create connection
    $connection = mysqli_connect($host, $user, $pass, $db, $port)
    or die(mysql_error());
?>