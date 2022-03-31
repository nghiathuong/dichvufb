<?php 
    require_once '../../../database/config.php';
    require_once '../../../database/function.php';
    if(!isset($_SESSION['email_user'])){
        header("location: $welecome");
    }if($getUser['level'] ==4){
        if(empty($_GET['id'])){
           echo JSON(400, 'Không tìm thấy id');
        }else{
            $id = check_string($_GET['id']);
            $del = $DUONGSHADO->remove('thongbao', "id = $id");
            header("location: ../thongbao");
        }
    }
?>