<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="submit" value="submit" name = "submit">
            <!-- <input type="submit" value="dlesubmit" name = "submitt"> -->

    </form>
</body>
</html>
<?php
// update
session_start();
// include("config.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "validation";

$connection = new mysqli($servername,$username,$password , $dbname);
// if($connection){
//     echo "The database is connected";
// }else{
//     echo "Error";
// }
if(isset($_POST["submit"])){
$update = "UPDATE validation set password = '676767' where id=27";
$update_query = mysqli_query($connection,$update);
if(!$update_query){
    echo "error";
}
}
// if(isset($_POST["submitt"])){
//     $delete = "DELETE FROM validation where id = 24";
//     $delete_query = mysqli_query($connection,$delete);
//     if(!$delete_query){
//         echo "error";
//     }
// }
?>