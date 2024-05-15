<?php
    // uploads хавтас үүсгэх
    $upload_directory = 'uploads/';
    if (!file_exists($upload_directory)) {
        mkdir($upload_directory, 0777, true);
    }

    if(isset($_POST['submit'])){
        // Файлыг хавтас руу хадгалах
        $target_file = $upload_directory . basename($_FILES['file']['name']);
        
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
            echo 'Файл ' . basename( $_FILES['file']['name']) . ' амжилттай орууллаа';
        }else{
            echo 'Файл оруулж чадсангүй';
        }
    }
?>
