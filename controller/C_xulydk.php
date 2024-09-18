<?php
    if(($_POST['user']==null)||($_POST['pass']==null)||($_POST['repass']==null)){
        if($_POST['user']==null){
            $u="Bạn chưa điền tên đăng nhập";
        }
        if($_POST['pass']==null){
            $p="Bạn chưa điền mật khẩu";
        }
        if($_POST['repass']==null){
            $r="Bạn chưa xác nhận mật khẩu";
        }
        require_once('view/dangky.php');
    }
    else {
        session_start();
        require_once('model/database.php');
        $xuly= new database();
        $checkuser=$xuly->checkuser();
        if($checkuser!=null){
            $u=$checkuser;
            require_once('view/dangky.php');
        }
        else if($_POST['pass']!=$_POST['repass']){
            $r='Xác nhận mật khẩu phải giống mật khẩu';
            require_once('view/dangky.php');
        }
        else{
            $xuly->dangky();
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $id=$xuly->conn->insert_id;
            if(isset($_SESSION['dx'])){
              unset($_SESSION['dx']);
            }
            require_once('index.php');
        }
    }
    

?>