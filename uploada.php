<?php
if(isset($_FILES['file'])){
    $errors= array();
    $file_name = $_FILES['file']['name'];
    $file_size =$_FILES['file']['size'];
    $file_tmp =$_FILES['file']['tmp_name'];
    $file_type=$_FILES['file']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));

    $extensions= array("jpeg","jpg","png","pdf");

    if(in_array($file_ext,$extensions)=== false){
        $errors[]="Розширення файлу не підтримується, виберіть файли JPEG, JPG, PNG або PDF.";
    }

    if($file_size > 2097152){
        $errors[]='Файл повинен бути не більше 2 МБ';
    }

    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"Archi/".$file_name);
        echo "Файл успішноно завантажен";
    }else{
        print_r($errors);
    }
}
?>

