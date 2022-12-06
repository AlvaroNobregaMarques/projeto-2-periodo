<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <h1>OLÁ <?php echo $_SESSION['nome'] ?></h1><br>
    <a href="logout.php">Logout</a><br>
</body>
</html>

<?php 
    header("Location: home.php");
    exit();

?>