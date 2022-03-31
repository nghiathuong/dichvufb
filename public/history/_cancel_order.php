<?php 
    require_once '../../database/config.php';
    require_once '../../database/function.php';
    if(!$getUser){
        header("location: $welecome");
    }elseif(empty(check_string($_POST['id'])) || empty(check_string($_POST['type']))){
        echo requestJson(400, false, 'Dữ liệu không hợp lệ');
    }else{
        $id = check_string($_POST['id']);
        $type = check_string($_POST['type']);
        $ccan = $DUONGSHADO->get_row("SELECT * FROM history_order WHERE id = '$id'");
        if(!$ccan){
            echo requestJson(400, false, 'Dữ liệu không hợp lệ');
        }else{
            if($type == 'can'){
                $update = $DUONGSHADO->update('history_order', ['status' => 'cancel'], "id = '$id'");
                if($update){
                    echo requestJson(200, true, 'Đã hủy đơn hàng');
                }else{
                    echo requestJson(400, false, 'Không thể hủy đơn hàng');
                }
            }
        }
    }

?>