<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="themad"){
    if(($_POST['user']=='')||($_POST['pass']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('admin/themad.php');
    }
    elseif(($xuly->checkadmin($_POST['user']))==true){
        $w='Tên đăng nhập của admin hiện đã tồn tại';
        require_once('admin/themad.php');
    }
    else{
        $xuly->themad();
        require_once('admin/admin.php');
    }}}
    else{
        require_once('admin/themad.php');
    }
?>