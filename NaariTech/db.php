<?php

    $server = "sql204.epizy.com";
    $username = "epiz_33855678";
    $password = "bYcoz0eElQB";
    $dbname = "epiz_33855678_naaritechDb";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }

?>