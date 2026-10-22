<?php
session_start();
include("validation_logic.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- // <link rel="stylesheet" href="&7.css"> -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <!-- <logo>Yours</logo> -->
    <side>
        <b><h1>Hi  , <?php echo $_SESSION['email']?></h1></b>
       
    </side>
    </header>
</body>
</html>