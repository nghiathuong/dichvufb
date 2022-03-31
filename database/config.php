<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$showDatabase = false;
$show_chart = false;
class LBD
{
    private $ketnoi;
    //connect sql
    function connect()
    {
        if (!$this->ketnoi) {
            $this->ketnoi = mysqli_connect('localhost', 'root', '', 'haha') or die("Trang web đang bảo trì vui lòng truy cạp lại sau");
            mysqli_query($this->ketnoi, "set names 'utf8'");
        }
    }
    //dis connect 
    function dis_disconnect()
    {
        if ($this->ketnoi) {
            mysqli_close($this->ketnoi);
        }
    }
    // Lấy thông tin người dùng
    function getUser($data)
    {
        $this->connect();
        $rows = $this->ketnoi->query("SELECT * FROM users WHERE email = '" . $_SESSION['email_user'] . "' ")->fetch_array();
        return $rows[$data];
    }
    //query
    function query($sql)
    {
        $this->connect();
        $rows = $this->ketnoi->query($sql);
        return $rows;
    }
    // Cộng tiền
    function cong($table, $data, $sotien, $where)
    {
        $this->connect();
        $rows = $this->ketnoi->query("UPDATE `$table` SET `$data` = `$data` + `$sotien` WHERE `$where` ");
        return $rows;
    }
    // trừ tiền
    function tru($table, $data, $sotien, $where)
    {
        $this->connect();
        $rows = $this->ketnoi->query("UPDATE `$table` SET `$data` = `$data` - `$sotien` WHERE `$where` ");
        return $rows;
    }
    // insert
    function insert($table, $data)
    {
        $this->connect();
        $field_list = '';
        $value_list = '';
        foreach ($data as $key => $value) {
            $field_list .= ",$key";
            $value_list .= ",'" . mysqli_real_escape_string($this->ketnoi, $value) . "'";
        }
        $sql = 'INSERT INTO ' . $table . '(' . trim($field_list, ',') . ') VALUES (' . trim($value_list, ',') . ')';
        return mysqli_query($this->ketnoi, $sql);
    }
    function update($table, $data, $where)
    {
        $this->connect();
        $sql = '';
        foreach ($data as $key => $value) {
            $sql .= "$key = '" . mysqli_real_escape_string($this->ketnoi, $value) . "',";
        }
        $sql = 'UPDATE ' . $table . ' SET ' . trim($sql, ',') . ' WHERE ' . $where;
        return mysqli_query($this->ketnoi, $sql);
    }
    function update_value($table, $data, $where, $value1)
    {
        $this->connect();
        $sql = '';
        foreach ($data as $key => $value) {
            $sql .= "$key = '" . mysqli_real_escape_string($this->ketnoi, $value) . "',";
        }
        $sql = 'UPDATE ' . $table . ' SET ' . trim($sql, ',') . ' WHERE ' . $where . ' LIMIT ' . $value1;
        return mysqli_query($this->ketnoi, $sql);
    }
    function remove($table, $where)
    {
        $this->connect();
        $sql = "DELETE FROM $table WHERE $where";
        return mysqli_query($this->ketnoi, $sql);
    }
    function get_list($sql)
    {
        $this->connect();
        $result = mysqli_query($this->ketnoi, $sql);
        if (!$result) {
            die('Lỗi kết nối database 2');
        }
        $return = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
        }
        mysqli_free_result($result);
        return $return;
    }
    function get_row($sql)
    {
        $this->connect();
        $result = mysqli_query($this->ketnoi, $sql);
        if (!$result) {
            die('Lỗi kết nối database 2');
        }
        $row = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        if ($row) {
            return $row;
        }
        return false;
    }
    function num_rows($sql)
    {
        $this->connect();
        $result = mysqli_query($this->ketnoi, $sql);
        if (!$result) {
            die('Lỗi kết nối database 2');
        }
        $row = mysqli_num_rows($result);
        mysqli_free_result($result);
        if ($row) {
            return $row;
        }
        return false;
    }
}

if (isset($_SESSION['email_user'])) {
    $DUONGSHADO = new LBD;
    $getUser = $DUONGSHADO->get_row(" SELECT * FROM users WHERE email = '" . $_SESSION['email_user'] . "' ");
    $my_email = 'True';
    $my_name = $getUser['fullname'];
    $my_email  = $getUser['email'];
    $my_money = $getUser['money'];
    $my_level = $getUser['level'];
    $my_capbac = $getUser['capbac'];
    $tongnap = $getUser['tongnap'];
    
    if (!$getUser) {
        session_start();
        session_destroy();
        header('location: ../welecome');
    }
    if ($getUser['hoatdong'] == 'bann') {
        session_start();
        session_destroy();
        header("location: ../../");
        die();
    }
    if ($getUser['money'] < 0) {
        $DUONGSHADO->update("users", array(
            'hoatdong' => 'bann'
        ), "email = '$my_email' ");
        session_start();
        session_destroy();
        header('location: /');
        die();
    }
    if ($getUser['level'] == 4) {
        $lever_user = "Quản Trị viên";
    } elseif ($getUser['capbac'] == 3) {
        $lever_user = "Nhà phân phối";
    } elseif ($getUser['capbac'] == 2) {
        $lever_user = "Đại lý";
    } elseif ($getUser['capbac'] == 1) {
        $lever_user = "Thành viên";
    }

    $modal_thongbao = $DUONGSHADO->get_row("SELECT * FROM modal_thongbao");

} else {
    $my_level = NULL;
    $my_money = 0;
}
$DUONGSHADO = new LBD; 
{
    $thongbao = $DUONGSHADO->get_list("SELECT * FROM thongbao");
}
/*
function CheckAdmin()
{
    global $my_level;global $my_capbac;
    if($my_level != 'admin' && $my_capbac != 3)
    {
        return die('<script type="text/javascript">setTimeout(function(){ location.href = "'.BASE_URL('').'" }, 0);</script>');
    }
}*/
