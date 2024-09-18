<div class="ttmuahang">
		<div class="container-fluid">
			<h4>Thông tin mua hàng</h4><span>(Các thông tin dưới đây được sử dụng để liên lạc với bạn khi giao hàng tới)</span>
			<div class="container-fluid">
			<form method="post" action="index.php">
			<div class="row">
				<div class="col-md-7">
						<div class="form-group">
							<input type="hidden" name="controller" value="ttkhachhang">
							<input type="text" name="tenkh" value="<?php if(isset($tenkh)){echo $tenkh;}?>" class="form-control" placeholder="Họ tên bạn(*)">
							<input type="email" name="email" value="<?php if(isset($email)){echo $email;}?>" class="form-control" placeholder="Email của bạn(*)">
							<input type="number" name="sdt" value="<?php if(isset($sdt)){echo $sdt;}?>"  class="form-control" placeholder="Số điện thoại(*)">
							<small class="form-text text-muted">Chúng tôi sẽ thông báo quá trình đơn hàng đến bạn qua số email & SĐT này</small>
							<textarea name="diachi" class="form-control" placeholder="Địa chỉ *"><?php if(isset($diachi)){echo $diachi;}?></textarea>
						</div>
                        <?php  if(isset($w)){
                               echo '<p style="color: red;">'.$w.'</p>';} ?>
				</div>
				<?php
					            $tongtien=0;
								foreach($_SESSION['gh'] as $i => $value){
									if(isset($value)){
										$tongtien+=($value['gia']*$value['sl']);
									}};
				 ?>
				<div class="col-md-3">
					<div class="tongtien">
						<div class="ct">
							<span>Tổng giá sản phẩm</span><span><?php echo number_format($tongtien)?><sup><b>đ</b></sup></span>
						</div>
						  <button type="submit" class="btn btn-dark" >Tiến hành mua hàng</button>	
					</div>
				</div>
			</div>
			</form>
			</div>
		</div>
	</div>