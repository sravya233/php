<?php
session_start();
include('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM login WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if ($password == $row['password']) {
            $_SESSION['user'] = $username;
            header("Location: /phplogin/welcome.php");
            exit();
        } else {
            echo "<script>alert('Wrong password'); window.location='index.php';</script>";
        }
    } else {
        echo "<script>alert('User not found'); window.location='index.php';</script>";
    }
}
?>