<?php 
    require_once '../../../../database/config.php';
    require_once '../../../../database/function.php';
    if(!$getUser){
        session_destroy();
        header('Location: ../../../hahas');
    }elseif(!isset($_POST['_token'])){
        echo JSON(400, 'Đã sảy ra lỗi, vui lòng thử lại sau');
    }elseif(isset($_POST['_token']) == $_SESSION['csrf_token']){

        if(empty(check_string($_POST['id_sv'])) || empty(check_string($_POST['loai_dv'])) || empty(check_string($_POST['server'])) || empty(check_string($_POST['sotien'])) || empty(check_string($_POST['noidung']))){
            echo JSON(400, 'Vui lòng nhập đầy đủ thông tin');
        }else{
            $id_sv = check_string($_POST['id_sv']);
            $loai_dv = check_string($_POST['loai_dv']);
            $server = check_string($_POST['server']);
            $sotien = check_string($_POST['sotien']);
            $noidung = check_string($_POST['noidung']);
            
            $updateed = $DUONGSHADO->update('service_server',[
                'rate' => $sotien,
                'title_server' => $server,
            ], "id = '$id_sv' AND server_service = '$server' AND key_server = 'facebook_service'");
            if($updateed){
                echo JSON(200, 'Cập nhật thành công');
            }else{
                echo JSON(400, 'Đã sảy ra lỗi, vui lòng thử lại sau');
            }
        }

    }else{
        echo JSON(400, 'Đã sảy ra lỗi, vui lòng thử lại sau');
    }

?>