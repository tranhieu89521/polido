<div class="container">
<h2>Thông tin tài khoản</h2>
<form method="post" name="myForm" onsubmit="return validateForm()" action="index.php">
    <input type="hidden" name="controller" value="tttk">
    <div class="form-group">
    <input type="text" name="tenkh" value="<?php if(isset($tenkh)){echo $tenkh;}?>" class="form-control" placeholder="Họ tên bạn" required>
    </div>
    <div class="form-group">
    <input type="email" name="email" value="<?php if(isset($email)){echo $email;}?>" class="form-control" placeholder="Email của bạn" required>
    </div>
    <div class="form-group">
    <input type="number" name="sdt" value="<?php if(isset($sdt)){echo $sdt;}?>"  class="form-control" placeholder="Số điện thoại" required>
    </div>
    <div class="form-group">
    <textarea name="diachi" class="form-control" placeholder="Địa chỉ" required><?php if(isset($diachi)){echo $diachi;}?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật thông tin tài khoản</button>
  </form>
  </div>
  <?php if(isset($s)){
		echo '<script>alert("'.$s.'")</script>';
	} ?>
  <script>
        function validateForm() {
           let sdt= document.forms["myForm"]["sdt"].value;
           if (sdt.toString().length!=10) {
              alert("Số điện thoại phải có 10 số");
              return false;
            }
            else{
              return true;
            }
        }
    </script>

