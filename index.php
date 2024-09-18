<?php
   if (session_status() === PHP_SESSION_NONE) {
    session_start();
   }
   require_once('model/database.php');
   $obj= new database(); 
   if(isset($user)&&isset($pass)&&isset($id)){
    $_SESSION['user']=$user;
    $_SESSION['pass']=$pass;
    $_SESSION['id']=$id;
    if(isset($idkh)){
      $_SESSION['idkh']=$idkh;
    }
   }
   if(isset($_GET['dangxuat'])){
    if($_GET['dangxuat']=='true'){
      unset($_SESSION['user']);
      unset($_SESSION['pass']);
      unset($_SESSION['id']);
      if(isset($_SESSION['idkh'])){
        unset($_SESSION['idkh']);
      }
      if(isset($_SESSION['dx'])){
        unset($_SESSION['dx']);      
      }
    } 
  }
  if(isset($_GET['xuly'])){
    if($_GET['xuly']=='muangay'){
   if(isset($_GET['mausac'])&&isset($_GET['kichco'])){
    $ct=$obj->chitiet();
    $am=$obj->anhmau();
    $sl=$obj->soluong();
    $kc2=$obj->kichco2();
    //$slmax=$obj->slmax();
    require_once('controller/C_addgiohang.php');
   }
    }
  }
   ?>

<?php
    if(isset($_GET['controller'])){
      $ctr =$_GET['controller'];
    }
    else{
      $ctr='trangchu';
    }
    if(isset($_GET['search'])){
     $ctr='danhmuc';}
     if(isset($ctr)){
     switch($ctr){
      case 'chitiet' :
        require_once('controller/C_chitiet.php');
        break;
      case 'giohang' :
        require_once('controller/C_giohang.php');
        break;
      default:
         break; }}
    if(isset($_POST['controller'])){
      if($_POST['controller']=='ttkhachhang'){
        $ctr='ttkhachhang';
        require_once('controller/C_xulytt.php');
      } 
      elseif($_POST['controller']=='tttk'){
        $ctr='tttk';
        $cn=$obj->themkh();
        if($cn==true){
          $s='Cập nhật thông tin tài khoản thành công';
        }
      }
      elseif($_POST['controller']=='dmk'){
        $ctr='dmk';
        $dmk=$obj->doiMK($_SESSION['id'],$_POST['pass']);
        if($dmk==true){
          $_SESSION['pass']=$_POST['pass'];
          $s='Đổi mật khẩu thành công';
        }
      }
    }
         ?>

<?php require('view/header.php'); ?>

  
<?php
   switch($ctr){
      case 'trangchu' :
        require_once('controller/C_trangchu.php');
        break;
      case 'danhmuc' :
        require_once('controller/C_danhmuc.php');
        break;
      case 'chitiet' :
        require_once('view/chitiet.php');
        break;
      case 'giohang' :
        require_once('view/giohang.php');
        break;
      case 'ttkhachhang' :
        require_once('controller/C_ttkhachhang.php');
        break;
      case 'donhang' :
        require_once('controller/C_dh.php');
        break;
      case 'ctdonhang' :
        require_once('controller/C_ctdh.php');
        break;
      case 'tttk' :
          require_once('controller/C_tttk.php');
          break;
      case 'dmk' :
          require_once('view/dmk.php');
          break;
      default:
         echo 'loi trang';
         break; }?>

<?php 
   require_once('view/footer.php');
?>