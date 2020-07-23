<?php session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include 'getConnection.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $loginEmail = $_POST["loginEmail"];
    $loginPassword = $_POST["loginPassword"];

    $sql = 'SELECT id FROM users where mail="'.$loginEmail.'" and password = "'.$loginPassword.'"';
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        echo "ok";
        $_SESSION["mail"] = $loginEmail;
        $_SESSION["isLogin"]=true;
    } else {
        echo "no";
    }

   $conn->close();
}