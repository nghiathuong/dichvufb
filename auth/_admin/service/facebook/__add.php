<?php 
    require_once '../../../../database/config.php';
    require_once '../../../../database/function.php';
    if(!$getUser){
        session_destroy();
        header('Location: ../../../hahas');
    }elseif(!isset($_POST['_token'])){
        echo JSON(400, 'Đã sảy ra lỗi, vui lòng thử lại sau');
    }elseif(isset($_POST['_token']) == $_SESSION['csrf_token']){
        if(empty(check_string($_POST['code_server'])) || empty(check_string($_POST['server'])) || empty(check_string($_POST['rate'])) || empty(check_string($_POST['title_server']))){
            echo JSON(400, 'Vui lòng nhập đầy đủ thông tin');
        }
        else{
            $code_server = check_string($_POST['code_server']);
            $server = check_string($_POST['server']);
            $rate = check_string($_POST['rate']);
            $title_server = check_string($_POST['title_server']);
            $check_server = $DUONGSHADO->get_row("SELECT * FROM service_server WHERE code_server = '$code_server' AND server_service = '$server' AND key_server = 'facebook_service'");
            if($check_server){
                echo JSON(400, 'Mã server đã tồn tại');
            }else{
                $insert = $DUONGSHADO->insert('service_server',[
                    'code_server' => $code_server,
                    'server_service' => $server,
                    'rate' => $rate,
                    'title_server' => $title_server,
                    'status_server' => 'stop',
                    'key_server' => 'facebook_service',
                ]);
                if($insert){
                    echo JSON(200, 'Thêm mới thành công');
                }else{
                    echo JSON(400, 'Đã sảy ra lỗi, vui lòng thử lại sau');
                }
            }
        }

    }else{
        echo JSON(400, 'Đã sảy ra lỗi, vui lòng thử lại sau');
    }

?>