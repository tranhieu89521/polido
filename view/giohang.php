
	<div class="ctgiohang">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7">
					<p>Giỏ hàng của bạn</p>
					<div class="container-fluid">
						<?php
						    $tongtien=0;
							if(isset($_SESSION['gh'])){
                               foreach($_SESSION['gh'] as $i => $value){
								echo '<div class="row">
									<div class="col-md-4">
										<img src="'.$value['anh'].'">
									</div>
									<div class="col-md-6">
										<h3>'.$value['tensp'].'</h3>
										<p>Giá:&nbsp;'.number_format($value['gia']).'<sup><b>đ</b></sup></p>
										<p>Màu sắc:&nbsp;'. $value['mausac'].'</p>
										<p>Size:&nbsp;'. $value['kichco'].'</p>
										<p>Số lượng:<a href="index.php?controller=giohang&tru='.$value['id_sl'].'">-</a>
													<span>'.$value['sl'].'</span>&nbsp;
													<a href="index.php?controller=giohang&cong='.$value['id_sl'].'">+</a></p>
										<p style="color: red;">'.number_format($value['gia']*$value['sl']).'<sup><b>đ</b></sup></p>
									</div>
									<div class="col-md-2">
										<a href="index.php?controller=giohang&xoa='.$value['id_sl'].'" onclick="xoa()"><i class="fa fa-times fa-2x"></i></a>
									</div>
								</div>';
								$tongtien+=($value['gia']*$value['sl']);
							   }
							}

						    /*for($i=1;$i<=$slmax;$i++){
								if(isset($_SESSION['gh'][$i])){
									echo '<div class="row">
									<div class="col-md-4">
										<img src="'.$_SESSION['gh'][$i]['anh'].'">
									</div>
									<div class="col-md-6">
										<h3>'.$_SESSION['gh'][$i]['tensp'].'</h3>
										<p>Giá:&nbsp;'.number_format($_SESSION['gh'][$i]['gia']).'<sup><b>đ</b></sup></p>
										<p>Màu sắc:&nbsp;'. $_SESSION['gh'][$i]['mausac'].'</p>
										<p>Size:&nbsp;'. $_SESSION['gh'][$i]['kichco'].'</p>
										<p>Số lượng:<a href="index.php?controller=giohang&tru='.$i.'">-</a>
													<span>'.$_SESSION['gh'][$i]['sl'].'</span>&nbsp;
													<a href="index.php?controller=giohang&cong='.$i.'">+</a></p>
										<p style="color: red;">'.number_format($_SESSION['gh'][$i]['gia']*$_SESSION['gh'][$i]['sl']).'<sup><b>đ</b></sup></p>
									</div>
									<div class="col-md-2">
										<a href="index.php?controller=giohang&xoa='.$i.'" onclick="xoa()"><i class="fa fa-times fa-2x"></i></a>
									</div>
								</div>';
								$tongtien+=($_SESSION['gh'][$i]['gia']*$_SESSION['gh'][$i]['sl']);
								}
								}*/?>
				   </div>
				</div>
				<div class="col-md-3">
					<div class="tongtien">
						<div class="ct">
							<span>Tổng giá sản phẩm</span><span><?php echo number_format($tongtien); ?><sup><b>đ</b></sup></span>
						</div>
							<a href="index.php?controller=ttkhachhang&xuly=mua">Tiến hành mua hàng</a>
					</div>
				</div>
			</div>
		</div>
</div>
	