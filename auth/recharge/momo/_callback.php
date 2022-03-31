<?php
require_once '../../../database/config.php';
require_once '../../../database/function.php';
$token = "7b37b8ab-dec0-4dc4-afd5-54cd320b";
$url = "https://dichvudark.com/historyapimomo/" . $token;
$get = file_get_contents($url);
$data = json_decode($get, true);
if ($data) {
    foreach ($data as $vl) {
        for ($i = 0; $i < count($vl['tranList']); $i++) {
            $id_bank = $vl['tranList'][$i]['id'];
            $partnerName = $vl['tranList'][$i]['partnerName'];
            $commandInd = $vl['tranList'][$i]['commandInd'];
            $amount = $vl['tranList'][$i]['amount'];
            $comment = $vl['tranList'][$i]['comment'];
            $desc = $vl['tranList'][$i]['desc'];
            $dsd = $DUONGSHADO->get_row("SELECT * FROM users WHERE code_bank = '$comment' ");
            $check_lsgd = $DUONGSHADO->get_row("SELECT * FROM history_banking WHERE id_bank = '$id_bank' AND type ='MOMO' ");
            if($id_bank == $check_lsgd['id_bank']){
                echo "Đã được nhận";
            }else{
                if($comment == $dsd['code_bank']){
                    $email_dsd = $dsd['email'];
                    $update = $DUONGSHADO->update('users',[
                        'money' => $dsd['money'] + $amount,
                        'tongnap' => $dsd['tongnap'] + $amount
                    ], "code_bank = '$comment'");
                    if($update){
                        $insert =$DUONGSHADO->insert('history_banking',[
                            'type' => "MOMO",
                            'email' => $email_dsd,
                            'id_bank' => $id_bank,
                            'money' => $amount,
                            'name_bank' => $partnerName,
                            'trangthai' => $desc,
                            'command' => $commandInd,
                            'dated_bank' => gettime()
                        ]);
                        if($insert){
                            echo "Đã nhận thành công";
                            $_SESSION['success'] = "Đã nạp thành công " . format_money($amount) . " vào tài khoản của bạn";
                        }else{
                            echo "Lỗi";
                        }
                    }else{
                        echo "Lỗi";
                    }
                }
            }
        }
    }
}else{
   echo "Lỗi connect";
}
