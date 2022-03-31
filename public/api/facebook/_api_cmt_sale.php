<?php 
    require_once '../../../database/config.php';
    require_once '../../../database/function.php';
    require_once '../../../database/_send.php';
    if (!isset($_SESSION['email_user'])) {
        session_destroy();
        header("location: $welecome");
    }elseif(!isset($_POST['_token'])){
        echo JSON(400, "Đã sảy ra lỗi, vui lòng thử lại sau");
    }elseif(isset($_POST['_token']) == $_SESSION['csrf_token']){

        if(empty(check_string($_POST['link_post'])) || empty(check_string($_POST['server'])) || empty(check_string($_POST['cmt_post'])) || empty(check_string($_POST['soluong']))){
            echo JSON(400, "Vui lòng nhập đầy đủ thông tin");
        }
        else{
            $link_post = check_string($_POST['link_post']);
            $server = check_string($_POST['server']);
            $cmt_post = check_string($_POST['cmt_post']);
            $soluong = check_string($_POST['soluong']);
            $ghichu = check_string($_POST['ghichu']);
            //
            $check_suite = $DUONGSHADO->get_row("SELECT * FROM service_server WHERE code_server = 'cmt_sale' AND status_server = 'active' AND key_server = 'facebook_service' AND server_service = '$server' ");
            $user = $DUONGSHADO->get_row("SELECT * FROM users WHERE email = '$my_email' ");
            if(!$check_suite){
                echo JSON(400, "Dịch vụ này không tồn tại hoặc đã bị khóa");
            }
            $tongtien = $check_suite['rate'] * $soluong;
            if($soluong == 0){
                header("HTTP/1.1 400 BAD REQUEST");
                echo JSON(400, "Vui lòng nhập số lượng");
            }elseif($soluong < 50){
                echo JSON(400, "Số lượng tối thiểu là 50");
            }elseif(check_number($soluong) != 1){
                echo JSON(400, "Số lượng phải là số");
            }elseif($user['money'] < $tongtien){
                echo JSON(400, "Bạn không đủ tiền để thực hiện giao dịch");
            }else{
                $payOut = $user['money'] - $tongtien;
                $damua = $user['da_mua'] + 1;
                $code_order = "order_dv_". random('qwertyuiopasdfghjklzxcvbnm1234567890', 8) . rand(0, 99999);

                $submit_order = $DUONGSHADO->insert('history_order',[
                    'email' => $my_email,
                    'code_server' => 'cmt_sale',
                    'soluong' => $soluong,
                    'tongtien' => $tongtien,
                    'link_buff' => $link_post,
                    'server' => $check_suite['server_service'],
                    'cmt' => $cmt_post,
                    'node' => $ghichu,
                    'status' => 'pending',
                    'code_order' => $code_order,
                    'hinhthuc' => 'LOGIN',
                    'order_date' => gettime()
                ]);
                if($submit_order){
                    $update_user = $DUONGSHADO->update('users', [
                        'money' => $payOut,
                        'da_mua' => $damua
                    ], "email = '$my_email'");
                    if($update_user){
                        send_mess("Đã có một đơn hàng cmt sale vui lòng duyệt ");
                        echo requestJson(200,true, "Đặt mua thành công, vui lòng chờ xác nhận");
                    }else{
                        echo requestJson(400,false, "Đặt mua thất bại, vui lòng thử lại sau");
                    }
                }
            }


        }
    }else{
        echo JSON(400, "Đã sảy ra lỗi, vui lòng thử lại sau");
    }

?>
