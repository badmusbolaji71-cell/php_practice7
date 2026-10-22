<?php 
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:100%;
            border:1px solid black;
            border-collapse:collapse;
            justify-content:center;
            align-items:center;
            align-self:center;
            justify-self:center;
            /* display:flex; */
            /* background-color:blue; */

        }
        tr,th,td{
             border:1px solid black;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <center>Input the details</center>
    <form method = "post">
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="phonenumber">
        <input type="submit" value="submit" name="submit">



    </form>
    <?php
    if(isset($_POST["submit"])){
    $name =$_POST["name"];
    $email =$_POST["email"];
    $number =$_POST["phonenumber"];


    $insert = "INSERT into admin(name,email,phonenumber) VALUES('$name','$email','$number')";
    $insert_query = mysqli_query($connection,$insert);
    //  $insert_query = mysqli_query($connection,$insert);
    if($insert_query){
        echo "Success";
    }else{
        echo "failed";
    };
    //  $i = $insert;  
  

    };
    ?>
    <form method="post">
        <input type="text" name = "searchbox">
        <button type="submit" name = "submitt"> search</button>
    </form>
  <table>
  <tr>
  <th>sn</th>
  <th>name</th>
  <th>email</th>
  <th>phonenumber</th>
  <th>status</th>
  </tr>
  <?php
  
  if(isset($_POST["submitt"])){
    $search = $_POST["searchbox"];
    $email = "email";
    $select = mysqli_query($connection,"SELECT * FROM admin WHERE name LIKE '%$search%'");
  }else{
    
    $select =mysqli_query($connection,"SELECT * FROM admin");};
    $i = 1;
    while($row = mysqli_fetch_array($select)){
?>

    <tr>
    <td><?php echo $i++?></td>
    <td><?php echo $row["name"]?></td>
    <td><?php echo $row["email"]?></td>
    <td><?php echo $row["phonenumber"]?></td>
    <td><?php echo $row["status"]?></td>
    </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>