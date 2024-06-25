<?php require_once "./mvc/core/libs.php";require_once "./mvc/core/route.php";  ?>

<!DOCTYPE html>
<html>
<head>
	<title> Đăng Ký Tài Khoản </title>
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
				<h4 class="t1 card-title mt-3 text-center"> Tạo tài khoản </h4>
				<p class="t1 text-center"> Bắt đầu tạo tài khoản miễn phí </p>
	
				<p class="divider-text"><span class="bg-light rounded-circle"><b></b></span></p>
				<form action=" <?php echo xulydangky; ?>" method="POST" >
					<div class="form-group input-group possition-relative">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
						<input id="check_user" name="tendangnhap" class="form-control" placeholder="Tên Đăng Nhập..."  type="text" maxlength="50" onchange="check_kytula()" required>
					</div>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-lock"></i></span>
						</div>
						<input id="pass" name="matkhau" class="form-control" placeholder="Mật Khẩu..."  type="password" maxlength="50" required>
					</div>

					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-lock"></i></span>
						</div>
						<input id="re_pass" name="nhaplaimatkhau" class="form-control" placeholder="Nhập Lại Mật Khẩu..."  type="password" maxlength="50" required>
					</div>
					<div class="form-group">
						<button name="CreateAccount" type="submit" class="btn btn-primary btn-block"><i class="fas fa-user-plus"></i> Tạo tài khoản</button>
					</div>
					<p class="t1 text-center">Bạn có tài khoản chưa? <a href=" <?php echo dangnhap ?>" style="color: gold;">Đăng nhập</a></p>
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