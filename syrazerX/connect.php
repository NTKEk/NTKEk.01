<?php
     $server = "localhost";
     $username = "root";
     $password = "1111";
     $dbname = "syrazerx";
$connect = new mysqli("$server","$username","$password","$dbname");
if($connect->connect_error){
    die(echo "Finish",$connect->connect_error);
}
else{
    echo "Error";
}

?>