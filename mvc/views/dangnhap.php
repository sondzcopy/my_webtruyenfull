<?php require_once "./mvc/core/libs.php";require_once "./mvc/core/route.php";  ?>

<!DOCTYPE html>
<html>
<head>
	<title> Đăng Nhập </title>
	<link rel="shortcut icon"  href=" <?php public_patch('img/favicon.ico') ?>" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">
	<link rel="stylesheet" href=" <?php public_patch('css/bootstrap.min.css') ?>" >
	<link rel="stylesheet" href=" <?php public_patch('css/all.min.css') ?>" >
	<link rel="stylesheet" href=" <?php public_patch('css/style_register.css') ?>" >
	<link rel="stylesheet" href=" <?php public_patch('css/jquery-confirm.min.css') ?>" >
</head>
<body background="./public/image/bg_2.jpg">
	<div class="container">
		<div class="card bg-dark">
			<article class="card-body mx auto" style="max-width: : 400px;">
				<p class="t1 text-center"> Đăng Nhập </p>
	
				<p class="divider-text"><span class="bg-light rounded-circle"><b></b></span></p>
				<form action=" <?php echo xulydangnhap; ?>" method="POST" >
					<div class="form-group">
				<div class="col-xs-12"> 
			 		<input type="text" name="tendangnhap" class="form-control input-1" placeholder="Email hoặc tên người dùng" maxlength="191" required>
			 	</div>
			</div> 
			<div class="form-group"> 
				<div class="col-xs-12"> 
					<input type="password" name="matkhau" class="form-control input-1" value="" placeholder="Mật khẩu" required> 
				</div>
			 </div> 
					<div class="form-group text-center m-t-20 mt-2">
						<div class="col-xs-12"> 
					 		<button type="submit" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light btn-dangnhap">Đăng nhập</button> 
						</div> 
					</div> 
					<p class="t1 text-center">Bạn chưa có tài khoản chưa? <a href=" <?php echo dangky ?>" style="color: gold;">Đăng Ký</a></p>
					<p class="t1 text-center"><a class="text-light" href="./." ><i class="fas fa-home"></i>Trở về Trang Chủ</a></p>
				</form>
			</article>
		</div> 
	</div>
	<script src="<?php public_patch('css/bootstrap.min.css') ?>"></script>
	<script src="<?php public_patch('css/all.min.css') ?>"></script>
	<script src="<?php public_patch('css/style_register.css') ?>"></script>
	<script src="<?php public_patch('css/jquery-confirm.min.css') ?>"></script>
</body>
</html>