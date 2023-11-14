<?php
$upload_folder = "uploads/";
if (isset($_FILES['fileToUpload'])){

    if (!is_dir($upload_folder)){
        mkdir($upload_folder);
    }

    $errors = array();
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_format_arr = explode('.', $_FILES['fileToUpload']['name']);
    $file_ext = strtolower(end($file_format_arr));

    $extentions = (array('jpg', 'jpeg', 'png', 'gif'));

    if (in_array($file_ext, $extentions) === false){
        $errors[] = "Bu formatda fayl yuklay olmaysiz";
    }

    if ($file_size > 2097152){
        $errors[] = "Fayl hajmi 2mb dan katta bo'lmasligi kerak";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, $upload_folder . $file_name);
        echo "Fayl muvaffaqiyatli yuklandi";
    }
    else{
        print_r($errors);
    }
}