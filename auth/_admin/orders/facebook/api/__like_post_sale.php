<?php 
    require_once '../../../../../database/config.php';
    require_once '../../../../../database/function.php';
    require_once '../curl/__like_post_sale.php';
    
    if(!$getUser){
        header("location: $welecome");
    }elseif(empty($_POST['order_id'])){
        echo JSON(400, "Bạn chưa chọn đơn hàng nào");
    }else{
        foreach($_POST['order_id'] as $data){
            $orde = $DUONGSHADO->get_row("SELECT * FROM history_order WHERE id = '$data' AND code_server ='like_post_sale' ");
            $update = $DUONGSHADO->update("history_order",[
                'status' => 'start'
            ], "id = '$data'");
            $link_post = $orde['link_buff'];
            $server = $orde['server'];
            $reaction = $orde['camxuc'];
            $amount = $orde['soluong'];
            $note = $orde['node'];
            echo JSON(200,like_posts_sale($link_post, $server, $reaction, $amount, $note));
        }
        //echo JSON(200, "Đã xử lý thành công");
    }
?>