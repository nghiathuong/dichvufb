<?php 
    require_once '../../../../../database/config.php';
    require_once '../../../../../database/function.php';
    require_once '../curl/__sub_quality.php';
    if(!$getUser){
        header("location: $welecome");
    }elseif(empty($_POST['order_id'])){
        echo JSON(400, "Bạn chưa chọn đơn hàng nào");
    }else{
        foreach($_POST['order_id'] as $data){
            $orde = $DUONGSHADO->get_row("SELECT * FROM history_order WHERE id = '$data'");
            $update = $DUONGSHADO->update("history_order",[
                'status' => 'start'
            ], "id = '$data'");
            $id_post = $orde['link_buff'];
            $server = $orde['server'];
            $amount = $orde['soluong'];
            $note = $orde['node'];
            echo JSON(200,sub_quality($id_post, $server, $amount, $note));
        }
        //echo JSON(200, "Đã xử lý thành công");
    }
?>