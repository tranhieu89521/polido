<div class="container">
  
<h2>Đơn hàng</h2>
<?php
   if(!isset($_SESSION['user'])){
     echo '<form class="form-inline" action="index.php">
     <input type="hidden" name="controller" value="donhang">
     <input type="search" class="form-control" style="width: 450px;" placeholder="nhập email hoặc số điện thoại để tìm đơn hàng" name="searchdh" required>
     <button type="submit" class="btn btn-primary">Tìm kiếm</button>
   </form>';
   }
?>
<table class="table">
    <thead>
      <tr>
        <th>Mã đơn hàng</th>
        <th>Tổng tiền</th>
        <th>Tình trạng đơn hàng</th>
        <th>Ngày đặt</th>
        <th>Chi tiết</th>
      </tr>
    </thead>
    <tbody>
      <?php
         if(isset($_SESSION['idkh'])||isset($_GET['searchdh'])){
          foreach($donhang as $x => $value){
            echo '<tr>
            <td>'.$value['id_donhang'].'</td>
            <td>'.$value['tongtien'].'</td>
            <td>'.$value['tinhtrang'].'</td>
            <td>'.$value['ngaydat'].'</td>
            <td><a href="index.php?controller=ctdonhang&iddh='.$value['id_donhang'].'">Xem chi tiết</a></td>
          </tr>';
          }
          
         }
      ?>
     
    </tbody>
  </table>
</div>