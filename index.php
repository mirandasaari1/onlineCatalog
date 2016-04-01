<?php
    $username = "karentafolla";
    $password = "";
    $hostname = "localhost";
    $dbname="online_catalog";
    $dbPort = "127.0.0.1";

    $dbConn = new PDO("mysql:host=$hostname;port=$dbPort;dbname=$dbname", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>
<?php

        
    $sql = "SELECT * FROM movie";
    $stmt = $dbConn->prepare($sql);
                    
    $stmt -> execute ();
                    
    while ($row = $stmt -> fetch())  {
        echo $row['title'] . " - " . $row['rating'];
        echo "<br/>";
        
    }

?>