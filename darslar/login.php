<?php
if (!empty($_POST)){
    if ($_POST['username'] == 'Jamkhan' && $_POST['password'] == '09022005'){
        header("Location:main_page.html");
    }
    else{
        header("Location:login.html");
    }
}