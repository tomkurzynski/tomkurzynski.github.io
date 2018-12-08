 <?php
    $servername = "localhost";
    $username = "tomek";
    $password = "tomek";
    $dbname = "project";

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if (!$mysqli){
        die('Could not connect: ' . mysql_error());
    }
?> 