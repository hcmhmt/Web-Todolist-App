<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include 'getConnection.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $registerEmail = $_POST["registerEmail"];
    $registerFullname = $_POST["registerFullname"];
    $registerPassword = $_POST["registerPassword"];

    $sql = 'SELECT id FROM users where mail="'.$registerEmail.'"';
    $result = $conn->query($sql);

    if ($result->num_rows < 1) {
        $sql = "INSERT INTO users(mail,fullname,password) VALUES ('$registerEmail','$registerFullname','$registerPassword')";
        $result = mysqli_query($conn,$sql);
        $_SESSION["mail"] = $registerEmail;
        $_SESSION["isLogin"]=true;
        echo "ok";
    } else {
        echo "no";
    }

    $conn->close();
}