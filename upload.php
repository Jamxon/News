<?php
$upload_folder = "images/";
if (isset($_FILES['image'])) {

    if(!is_dir($upload_folder))
        mkdir($upload_folder);

    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_format_arr = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($file_format_arr));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Fayl formati JPEG yoki PNG bo`lishi kerak.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File hajmi 2 MB dan katta bo`lmasligi kerak';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, $upload_folder . $file_name);
        echo "Yuklandi";
    } else {
        print_r($errors);
    }
}