<?php
session_start();
if (isset($_POST['register'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    if ($password != $confirmpassword){
        $_SESSION['error'] = "Password va cofirm passwordlar bir xil emas";
    }else{
        include "../database.php";
        $sql = "SELECT * FROM user WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        if ($stmt->rowCount() > 0){
            $_SESSION['error'] = "Bu username mavjud";
        }else{
            $role = "admin";
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (username, password, firstname, lastname, role) 
                VALUES (:username, :password, :firstname, :lastname, :role)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':role', $role);
            try {
                $stmt->execute();
                $_SESSION['success'] = "Muvaffaqiyatli ro'yxatdan o'tdingiz";
            }catch (PDOException $e){
                $_SESSION['error'] = "Xatolik sodir bo'ldi: " . $e->getMessage();
            }
        }
    }
}
header("Location: register.php");