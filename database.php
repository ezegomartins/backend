<?php
declare(strict_types=1);
 //mysql_connect("localhost", "username" ,"password");
// $connection = new mysqli("localhost", "root","","student");
// if ($connection->connect_error){
    //   echo "unable to connect";
// }


// pdo connection-
try {
    $conx = new PDO('mysql:host=localhost;dbname=student', 'root', '');

} catch (Expection $e) {
    echo "Error:" . $e->getmessage();
}




?>
