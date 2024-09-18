<?php
    
    if(($_POST['user']==null)||($_POST['pass']==null)){
        if($_POST['user']==null){
            $u="Bạn chưa điền tên đăng nhập";
        }
        if($_POST['pass']==null){
            $p="Bạn chưa điền mật khẩu";
        }
        require_once('view/dangnhap.php');
    }
    else {
        session_start();
        require_once('model/database.php');
        $xuly= new database();
        $dangnhap=$xuly->dangnhap($_POST['user'],$_POST['pass']);
        if($dangnhap==null){
            $w="Sai tài khoản hoặc mật khẩu";
            require_once('view/dangnhap.php');
        }
        else{
           /* $user=$_POST['user'];
            $pass=$_POST['pass'];*/
            $user=$dangnhap['username'];
            $pass=$dangnhap['pass'];
            $id=$dangnhap['id_user'];
            $getidkh=$xuly->getIdkh($id);
            if($getidkh!=null){
                $idkh=$getidkh['id_kh'];
            }
            if(isset($_SESSION['dx'])){
                unset($_SESSION['dx']);
            }
            require_once('index.php');
        }
    }
    

?>