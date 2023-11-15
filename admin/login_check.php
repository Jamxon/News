<?php
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    include '../database.php';
    $state = $conn->prepare("select * from user where username = :username");
    $state->bindParam(":username", $username);
    if ($state->execute()) {
        $user = $state->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['success'] = "ok";
                $_SESSION['loginIn'] = "ok";
                header("location: /php/admin/");
            } else {
                $_SESSION['error'] = "Parol xato!";
                $_SESSION['user'] = $username;
                header("location: login.php");
            }
        } else {
            $_SESSION['error'] = "Foydalanuvchi topilmadi!";
            $_SESSION['user'] = $username;
            header("location: login.php");
        }
    } else {
        $_SESSION['error'] = "Xatolik yuz berdi!";
        header("location: login.php");
    }
}