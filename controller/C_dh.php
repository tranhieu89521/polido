<?php
    if(isset($_SESSION['idkh'])){
        $donhang=$obj->getDonHang($_SESSION['idkh']);
    }
    else{
        if(isset($_GET['searchdh'])){
        $donhang=$obj->timDonHang($_GET['searchdh']);
       }
    }
    require_once('view/dh.php');
?>