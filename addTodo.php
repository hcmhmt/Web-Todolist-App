<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include 'getConnection.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $todo = $_POST["todo"];
    $email = $_SESSION["mail"];
    $sql = "INSERT INTO todolist(todo,useremail) VALUES ('$todo','$email')";
    $result = mysqli_query($conn,$sql);

    echo "ok";


}