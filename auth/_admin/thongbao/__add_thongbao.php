<?php 
    require_once '../../../database/config.php';
    require_once '../../../database/function.php';
    if(!isset($_SESSION['email_user'])){
        header("location: $welecome");
    }if($getUser['level'] ==4){
        if(!isset($_POST['_token'])){
            echo JSON(400, "Có lỗi sảy ra");
        }elseif(isset($_POST['_token']) == $_SESSION['csrf_token']){
            
            if (empty($_POST['noidung'])){
                echo JSON(400, "Vui lòng nhập đầy đủ thông tin");
            }else{
                $note = check_string($_POST['noidung']);
                
                $create = $DUONGSHADO->insert('thongbao',[
                    'name' => $my_name,
                    'noidung' => $note,
                    'date' => date('Y-m-d H:i:s')
                ]);
                if($create){
                    echo JSON(200, "Thêm thành công");
                }else{
                    echo JSON(400, "Có lỗi sảy ra");
                }
            }
        }else{
            echo JSON(400, "Có lỗi sảy ra");
        }
    }
?>