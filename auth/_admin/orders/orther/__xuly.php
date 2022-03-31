<?php 
    require_once '../../../../database/config.php';
    require_once '../../../../database/function.php';
    if(!$getUser){
        header("location: $welecome");
    }elseif(empty($_POST['order_id'])){
        echo JSON(400, "Bạn chưa chọn đơn hàng nào");
    }else{
        foreach($_POST['order_id'] as $data){
            $orde = $DUONGSHADO->get_row("SELECT * FROM history_order WHERE id = '$data' AND code_server ='spam_cmt_phone' ");
            $update = $DUONGSHADO->update("history_order",[
                'status' => 'start'
            ], "id = '$data'");
            $link_post = $orde['link_buff'];
            $server = $orde['server'];
            $cmt =  $orde['cmt'];
            $amount = $orde['soluong'];
            $note = $orde['node'];
            //echo JSON(200,cmt_sale($link_post, $server, $cmt, $amount, $note));
        }
        echo JSON(200, "Đã xử lý thành công");
    }
?>