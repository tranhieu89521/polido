<?php
   if(isset($_SESSION['idkh'])){
    $ttkh=$obj->getTTKH($_SESSION['idkh']);
    $tenkh=$ttkh['tenkh'];
    $sdt=$ttkh['sdt'];
    $email=$ttkh['email'];
    $diachi=$ttkh['diachi'];
  }
  require_once('view/tttk.php');
?>