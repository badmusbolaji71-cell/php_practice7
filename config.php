<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jumia";

$connection = new mysqli($servername,$username,$password , $dbname);
if($connection){
    echo "The database is connected";
}else{
    echo "Error";
}
?>