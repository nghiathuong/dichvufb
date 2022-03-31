<?php
require_once("../../../database/config.php");
require_once("../../../database/function.php");

function tachid($noidung)
{
    $nd = explode("mxho_", $noidung)[0];
    return $nd;
}

$html = file_get_contents("http://localhost/auth/recharge/tsr/_tsr.php");
$pattern = 'class="text-success">';
//$data = explode($pattern, $html)[3];
$pattern = '/>T(.+?)</';
$string = $html;
preg_match_all($pattern, $string, $match);
/*header("Content-Type: application/json");*/
foreach ($match[1] as $mgd) {
    if ($mgd == "hành công" || $mgd == "hất bại") {
    } else {
        //mã giao dịch
        $mgd = "T$mgd";
        //check chuyển tiền và nhận
        $checkravao = explode($mgd, $html)[1];
        $checkravao1 = explode("</tr>", $checkravao)[0];
        $checkravao = explode("<span", $checkravao1)[1];
        $checkravao = explode('">', $checkravao)[0];
        $checkravao = explode('class="', $checkravao)[1];
        if ($checkravao == "text-danger") {
            $rarvao = "Chuyển Tiền";
        }
        if ($checkravao == "text-success") {
            $rarvao = "Nhận Tiền";
        }
        //số tiền được nhận hoặc trừ
        $sotien = '' . $checkravao . '">';
        $sotien = explode($sotien, $checkravao1)[1];
        $sotien = explode("</span>", $sotien)[0];
        $sotien = explode("đ", $sotien)[0];
        $sotien1 = explode(",", $sotien)[0];
        $sotien2 = explode(",", $sotien)[1];
        $sotien = $sotien1 . $sotien2;
        //người nhận hoặc gửi
        $nhanorgui = explode('<span class="text-muted">', $checkravao1)[1];
        $nhanorgui = explode("</span>", $nhanorgui)[0];
        //nội dung chuyển
        $nd = explode('<span class="label label-success">', $checkravao1)[1];
        $nd = explode('<td>', $nd)[1];
        $nd = explode('</td>', $nd)[0];
        //echo $nd . " " . $mgd . " " . $sotien . " " . $nhanorgui . " " . $rarvao . "<br>";
        //echo $nd . '<br>' ;
        $check_mxg = $DUONGSHADO->get_row("SELECT * FROM users WHERE code_bank = '$nd' ");
        $check_code_bank = $DUONGSHADO->get_row("SELECT * FROM history_banking WHERE id_bank = '$mgd' AND type = 'TSR' ");
        if (!$check_mxg) {
            echo "Không tìm thấy mã xác nhận $nd <br>";
        } elseif ($check_code_bank) {
            echo "Đã chuyển tiền $mgd <br>";
        } else {
            $email_bank = $check_mxg['email'];
            $code = $check_mxg['code_bank'];
            $update = $DUONGSHADO->update('users', [
                'money' => $check_mxg['money'] + $sotien,
                'tongnap' => $check_mxg['tongnap'] + $sotien,
            ], "email = '$email_bank' AND code_bank = '$code'");
            if ($update) {
                $insert = $DUONGSHADO->insert('history_banking', [
                    'type' => 'TSR',
                    'email' => $email_bank,
                    'id_bank' => $mgd,
                    'money' => $sotien,
                    'name_bank' => $nhanorgui,
                    'trangthai' => "Thành công",
                    'dated_bank' => gettime()
                ]);
                if ($insert) {
                    echo "Thành công";
                    $_SESSION['success'] = "Nạp thành công ". format_money($sotien) ." vào tài khoản của bạn";
                } else {
                    echo "Thất bại";
                }
            } else {
                echo "Thất bại";
            }
        }
    }
}
