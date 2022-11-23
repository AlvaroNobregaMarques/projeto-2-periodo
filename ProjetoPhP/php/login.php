<?php
session_start();
include "db_com.php.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST["uname"]);
    $pass = validate($_POST["password"]);

    if (empty($uname)) {
        header("Location: index.php?error=Username is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Passoword is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
        } else {
            header("Location: index.php?error=usuario incorreto ou seja incorreta");
            exit();
        }
    }
}