<?php

    $db_username = 'root';
    $db_password = $_ENV['MYSQL_PASSWORD'];
    $host = 'mysql';
    $db_name = 'xss';

    $con = mysqli_connect($host,$db_username,$db_password,$db_name);

?>
 
