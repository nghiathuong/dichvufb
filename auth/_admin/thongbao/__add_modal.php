<?php 
    require_once '../../../database/config.php';
    require_once '../../../database/function.php';
    if(!isset($_SESSION['email_user'])){
        header("location: $welecome");
    }elseif($getUser['level'] == 4){
        if(!isset($_POST['_token'])){
            echo JSON(400, "Có lỗi sảy ra");
        }elseif(isset($_POST['_token']) == $_SESSION['csrf_token']){
            if (empty($_POST['note'])){
                echo JSON(400, "Vui lòng nhập đầy đủ thông tin");
            }else{
                $note = check_string($_POST['note']);
                $update = $DUONGSHADO->update('modal_thongbao',[
                    'note' => $note
                ], "id = 1");
                if($update){
                    echo JSON(200, "Cập nhật thành công");
                }else{
                    echo JSON(400, "Có lỗi sảy ra");
                }
            }
        }else{
            echo JSON(400, "Có lỗi sảy ra");
        }
    }
?>