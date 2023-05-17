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
        $errors[]="Расширение файла не поддерживается, выберите файл JPEG, JPG, PNG или PDF.";
    }

    if($file_size > 20971520){
        $errors[]='Файл должен быть не более 2 МБ';
    }

    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"Bodya/".$file_name);
        echo "Файл успешно загружен";
    }else{
        print_r($errors);
    }
}
?>

