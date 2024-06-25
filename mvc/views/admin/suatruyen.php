<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Sửa truyện</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo bangdieukhien ?>">Bảng điều khiển</a></li>
						<li class="breadcrumb-item active">Sửa truyện</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
								<form action="<?php echo XuLySuaTruyen ?>" method="POST" enctype="multipart/form-data">
							<input type="text" name="id" value="<?php echo $data['truyen']['id'] ?>" hidden>
						 	<div class="form-group">
							    <label>Tên Truyện (*)</label>
							    <input type="text" class="form-control" name="ten" value="<?php echo $data['truyen']['ten'] ?>" required autocomplete="off" maxlength="150">
							    <small class="form-text text-muted">Tên truyện phải là duy nhất , không được quá 150 kí tự.</small>
						  	</div>
						  	<label>Hình Truyện</label>
						  	<div class="input-group mb-3"></div>
						  	<div class="custom-file">
							    <input type="file" class="custom-file-input" name="hinh" id="hinh" aria-describedby="inputGroupFileAddon01" maxlength="150">
							    <label class="custom-file-input" for="hinh"> Chọn hình ảnh</label>
							    
						  	</div>
						  	<div class="form-group">
							    <label>Tác giả (*)</label>
							    <input type="text" class="form-control" value="<?php echo $data['truyen']['tacgia'] ?>" name="tacgia" required>
						 	</div>
						 	<div class="form-group">
							    <label>Nguồn (*)</label>
							    <input type="text" class="form-control" value="<?php echo $data['truyen']['nguon'] ?>" name="nguon" value="TruyenFull.vn" maxlength="255" required>
						 	</div>
						 	<div class="form-group">
							    <label>Trang thái</label>
							    <select class="form-group" name="trangthai">
							    	<option value="Đang Cập nhật"<?php if($data['truyen']['trangthai'] == 'Đang Cập nhật') ; ?> >Đang Cập nhật</option>
							    	<option value="Tạm ngưng" <?php if($data['truyen']['trangthai'] == 'Tạm ngưng');?> >Tạm ngưng</option>
							    	<option value="Hoàn Thành" <?php if($data['truyen']['trangthai'] == 'Hoàn Thành'); ?>>Hoàn Thành</option>
							    </select>
						 	</div>
						 	<div class="form-group">
							    <label>Thể Loại (*)</label>
							    <div class="select2-purple">
							    <!-- 	<select class="select2" multiple="multiple" data-placeholder="Chọn ít nhất 1 thể loại" data-dropdown-css-class="select2-purple" style="width:100%;" name="theloai[]" required>
							    		<option>--Thể Loại--</option>
							    		<?php foreach ($data['theloai'] as $val) { ?>
							    			<option value="<?php echo $val['ten']; ?>"><?php echo $val['ten']; ?></option>
							    		<?php } ?>
							    	</select> -->
							    	<select class="select2" multiple="multiple" data-placeholder="Chọn ít nhất 1 thể loại" data-dropdown-css-class="select2-purple" style="width:100%;" name="theloai[]" required>
							    		<option>--Thể Loại--</option>
							    		<?php foreach ($data['theloai'] as $val) { ?>
							    		<?php if (count($data['truyen_tl']) > 0) {?>
							    			<?php foreach ($data['truyen_tl'] as $val_2) { ?>
							    			<option value="<?php echo $val['ten'] ?>"<?php if($val['ten'] == $val_2['ten']){echo 'selected';} ?>><?php echo $val['ten'] ?></option>
							    		<?php } ?>
							    		<?php }else{ ?>
							    			<option value="<?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></option>
							    		<?php }} ?>
							    	</select>
							    </div>
						 	</div>
						 	<div class="form-group">
							    <label>Giới thiệu</label>
							    <textarea class="form-control " name="gioithieu" id="gioithieu" rows="3"><?php echo $data['truyen']['gioithieu'] ?></textarea>
						 	</div>
							
						  		<div><button type="submit" class="btn btn-primary">Sửa</button></div>
						</form>
							</div>
						</div>
				  </div>
				</div>
			</div>
</section> 
	