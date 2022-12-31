<?php

$file = $_FILES['file'];

if (is_uploaded_file($file['tmp_name']) && $file['error'] === 0) {
    // The file was uploaded successfully
}

$file_name = uniqid() . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);

$upload_path = './img/categories/' . $file_name;
if (move_uploaded_file($file['tmp_name'], $upload_path)) {
    echo 'File uploaded successfully';
} else {
    echo 'Error uploading file';
}

?>