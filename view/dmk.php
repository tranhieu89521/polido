<div class="container">
<h2>Đổi mật khẩu</h2>
<form method="post" name="myForm" onsubmit="return validateForm()" action="index.php">
    <input type="hidden" name="controller" value="dmk">
    <input type="hidden" name="mk" value="<?php echo $_SESSION['pass']; ?>">
    <div class="form-group">
    <input type="password" name="mkht" class="form-control" placeholder="Nhập mật khẩu hiện tại của bạn" required>
    </div>
    <b style="color:red;" id="mkht"></b>
    <div class="form-group">
    <input type="password" name="pass" class="form-control" placeholder="Nhập mật khẩu mới" required>
    </div>
    <div class="form-group">
    <input type="password" name="repass"  class="form-control" placeholder="Nhập lại mật khẩu mới" required>
    </div>
    <b style="color:red;" id="repass"></b>
    <input type="submit" class="btn btn-primary" value="Đổi mật khẩu">
  </form>
  </div>
  <?php if(isset($s)){
		echo '<script>alert("'.$s.'")</script>';
	} ?>
    <script>
        function validateForm() {
           let mk = document.forms["myForm"]["mk"].value;
           let mkht = document.forms["myForm"]["mkht"].value;
           let pass = document.forms["myForm"]["pass"].value;
           let repass= document.forms["myForm"]["repass"].value;
           if (mk!==mkht) {
              document.getElementById("mkht").innerHTML = "Mật khẩu hiện tại chưa đúng <br><br>";
              document.getElementById("repass").innerHTML = "";
              return false;
            }
            else if (pass!==repass) {
              document.getElementById("repass").innerHTML = "Nhập lại mật khẩu chưa đúng <br><br>";
              document.getElementById("mkht").innerHTML = "";
              return false;
            }
            else{
              return true;
            }
        }
    </script>