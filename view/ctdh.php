<div class="container">
<h2>Chi tiết đơn hàng</h2>
<table class="table">
    <thead>
      <tr>
        <th>Tên sản phẩm</th>
        <th>Ảnh sản phẩm</th>
        <th>Màu sắc</th>
        <th>kích cỡ</th>
        <th>Số lượng</th>
        <th>Tổng giá</th>
      </tr>
    </thead>
    <tbody>
      <?php
          foreach($ctdonhang as $x => $value){
            echo '<tr>
            <td>'.$value['tensp'].'</td>
            <td><img width="100" height="80" src="'.$value['anh'].'"></td>
            <td>'.$value['mausac'].'</td>
            <td>'.$value['kichco'].'</td>
            <td>'.$value['soluong'].'</td>
            <td>'.$value['tonggia'].'</td>
          </tr>';
          }
      ?>
     
    </tbody>
  </table>
</div>