<?php
session_start();
if ($_SESSION['loginIn']){
    unset($_SESSION['loginIn']);
    unset($_SESSION['success']);
    header("Location: /php/admin/login.php");
}