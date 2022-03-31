<?php 
    require_once '../../../database/config.php';
    require_once '../../../database/function.php';
    if(!$getUser){
        session_destroy();
        //unset cookie
        setcookie('mxho.net', '', time() - 3600);
        header("location: $welecome");
    }
    if($getUser['level'] == 4){
        if(!isset($_POST['_token'])){
            echo requestJson(400, false, "Lỗi không xác định!");
        }elseif(isset($_POST['_token']) == $_SESSION['csrf_token']){
            if(empty(check_string($_POST['id']))){
                echo requestJson(400, false, "Vui lòng nhập đầy đủ thông tin!");
            }else{
                $id = check_string($_POST['id']);
                $delete = $DUONGSHADO->remove('stk_bank',"id = '$id'");
                if($delete){
                    echo requestJson(200, true, "Xóa thành công!");
                }else{
                    echo requestJson(400, false, "Xóa thất bại!");
                }
            }
        }else{
            echo requestJson(400, false, "Lỗi CSRF Token!");
        }
    }
?>