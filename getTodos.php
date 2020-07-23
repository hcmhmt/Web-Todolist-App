<?php session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include 'getConnection.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_SESSION["mail"];
    $sql = "SELECT * FROM todolist where useremail ='$email'";
    $result = $conn->query($sql);
    echo json_encode($result->fetch_all());

    $conn->close();
}