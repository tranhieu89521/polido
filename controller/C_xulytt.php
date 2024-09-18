<?php
 
  if(($_POST['tenkh']=='')||($_POST['diachi']=='')||($_POST['sdt']=='')||($_POST['email']=='')){
    if(isset($_POST['tenkh'])){
      $tenkh=$_POST['tenkh'];
    }
    if(isset($_POST['diachi'])){
      $diachi=$_POST['diachi'];
    }
    if(isset($_POST['sdt'])){
      $sdt=$_POST['sdt'];
    }
    if(isset($_POST['email'])){
      $email=$_POST['email'];
    }
    $w='Bạn chưa điền đủ thông tin';
    //$slmax=$obj->slmax();
  }
  else if(strlen(strval($_POST['sdt']))!=10){
    if(isset($_POST['tenkh'])){
      $tenkh=$_POST['tenkh'];
    }
    if(isset($_POST['diachi'])){
      $diachi=$_POST['diachi'];
    }
    if(isset($_POST['sdt'])){
      $sdt=$_POST['sdt'];
    }
    if(isset($_POST['email'])){
      $email=$_POST['email'];
    }
    $w='Số điện thoại phải có 10 số';
    //$slmax=$obj->slmax();
  }
  else{
    $xuly= new database();
    $check=false;
    foreach($_SESSION['gh'] as $i => $value){
      if($xuly->checkNumGh($value['id_sl'])==0){
       unset($_SESSION['gh'][$i]);
       $check=true;
       break;
      }
   }
    if($check==false){
//$slmax=$xuly->slmax();
$xuly->themkh();
if(isset($_SESSION['idkh'])){
 $lastidkh=$_SESSION['idkh'];
}else{
 $lastidkh=$xuly->conn->insert_id;
}
$tong=0;
foreach($_SESSION['gh'] as $i => $value){
   if(isset($value)){
       $tong+=($value['gia']*$value['sl']);
   }};
date_default_timezone_set("asia/ho_chi_minh");
$ngaydat=date('Y-m-d H:i:s');
$sql="INSERT INTO donhang(id_kh,tongtien,id_tinhtrang,ngaydat) VALUES($lastidkh,$tong,4,'$ngaydat')";
$xuly->conn->query($sql);
$lastiddh=$xuly->conn->insert_id;
foreach($_SESSION['gh'] as $i => $value){
   if(isset($value)){
       $id_sl= $value['id_sl'];
       $id_sp= $value['id_sp'];
       $slcl= ($value['slmax']-$value['sl']);
       $daban= ($value['daban']+$value['sl']);
       $tonggia=($value['gia']*$value['sl']);
       $soluong=$value['sl'];
       $sql="INSERT INTO ctdonhang(id_sl,id_donhang,soluong,tonggia) VALUES($id_sl,$lastiddh,$soluong,$tonggia)";
       $xuly->conn->query($sql);
       $sql1="UPDATE soluong set soluong=$slcl where id_sl=$id_sl";
       $xuly->conn->query($sql1);
       $sql2="UPDATE sanpham set daban=$daban where id_sp=$id_sp";
       $xuly->conn->query($sql2);
   }};
unset($_SESSION['gh']);
$s='Đặt hàng thành công';
$ctr='trangchu';
    }
    else{
      echo '<script>alert("Trong giỏ hàng của quý khách hiện có sản phẩm vừa mới hết hàng,mời quý khách điền lại thông tin mua hàng,mong quý khách thông cảm!")</script>';
    }
    }
?>