<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="capnhatad"){
    if(($_POST['user']=='')||($_POST['pass']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('admin/capnhatad.php');
    }
    elseif(($xuly->checkadmin($_POST['user']))==true){
        $w='Tên đăng nhập của admin hiện đã tồn tại';
        require_once('admin/capnhatad.php');
    }
    else{
        $xuly->upad();
        if(isset($_SESSION['get'])){
            unset($_SESSION['get']);}
        require_once('admin/admin.php');
    }}}
    else{
        require_once('admin/capnhatad.php');
   }
   
?>