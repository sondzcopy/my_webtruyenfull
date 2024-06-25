<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-uppercase"><?php echo $data['truyen']['ten']; ?></h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo bangdieukhien ?>">Bảng điều khiển</a></li>
						<li class="breadcrumb-item"><a href="<?php echo Truyen ?>">Truyện</a></li>
						<li class="breadcrumb-item active">Chương</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6">
				<div class="card">
					<div class="card-body table-responsive p-0">
								<table class="table table-hover text-nowrap">
									<thead>
										<tr>
											<th>#</th>
											<th>Tên Chương</th>
											<th>Tên Chương không dấu</th>
											<th>Cập nhật</th>
											<th>Hành Động</th>
										</tr>
									</thead>

									<tbody>
										<?php $stt =1; foreach ($data['chuong'] as $val) { ?>
										<tr>
											<td><?php echo $stt ?></td>
											<td><?php echo $val['ten'] ?></td>
											<td><?php echo $val['ten_khongdau'] ?></td>
											<td><span class="tag tag-success"><?php echo datetotime($val['capnhat']) ?></span></td>
											<td><button class="btn" onclick="ChinhSua('<?php echo $val['id'] ?>','<?php echo $val['ten'] ?>')"><i class="fas fa-edit"></i></button>
												<a href="<?php echo XuLyXoachuong.'/'.$data['truyen']['ten_khongdau'].'/'.$val['id'] ?>" class="btn" onclick="return confirm('Bạn có muốn Chương [<?php echo $val['ten'] ?>]')"><i class="fas fa-trash-alt"></i></a></td>
										</tr>
									<?php $stt++; } ?>
									</tbody>
								</table>
							</div>
						</div>
				  </div>
						<div class="col-6">
							<div class="card">
								<div class="card-body">
									<form action="<?php echo XuLyDangChuong ?>" method="POST">
										<input type="text" name="truyen_id" value="<?php echo $data['truyen']['id'] ?>" hidden>
										<input type="text" name="ten_khongdau" value="<?php echo $data['truyen']['ten_khongdau'] ?>" hidden>
										<div class="form-group">
											<label for="ten">Tên Chương (*)</label>
											<input type="text" name="ten" class="form-control" value="Chương <?php echo $data['truyen']['chuong'] + 1  ?>: " id="ten" required autocomplete="off">
										</div>
										<div class="form-group">
										    <label>Nội Dung</label>
										    <textarea class="form-control ckeditor" name="noidung" id="noidung" rows="3"></textarea>
									 	</div>
										<div class="text-center">
											<button class="btn btn-primary"><i class="fas fa-save"> Lưu Chương  </i></button>
										</div>
									</form>
								</div>
								</div>
									<form action="<?php echo XuLySuaChuong ?>" method="POST">
											<input type="text" id="id_chinhsua" name="chuong_id" hidden>
											<input type="text" name="ten_khongdau" value="<?php echo $data['truyen']['ten_khongdau'] ?>" hidden>
											<div class="form-group">
												<label for="ten">Tên Chương (*)</label>
												<input type="text" name="ten" class="form-control" id="ten_chinhsua" required autocomplete="off">
											</div>
											<div class="form-group">
											    <label>Nội Dung</label>
											    <textarea class="form-control" name="noidung" id="noidung_sua" rows="3"></textarea>
										 	</div>
											<div class="text-center">
												<button class="btn btn-primary"><i class="fas fa-save"> Cập Nhật  </i></button>
											</div>
										</form>
									</div>
								</div>
			</div>
		</div><!-- /.container-fluid -->
		</section> 
	<script type="text/javascript">
		function ChinhSua(id,ten,noidung){
			console.log(id, ten, noidung);
			document.getElementById('id_chinhsua').value = id;
			document.getElementById('ten_chinhsua').value = ten;
			document.getElementById('noidung_sua').value = noidung;
		}
	</script>			