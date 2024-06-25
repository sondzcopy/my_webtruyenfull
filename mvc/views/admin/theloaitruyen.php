<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Thể Loại truyện</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo bangdieukhien ?>">Bảng điều khiển</a></li>
						<li class="breadcrumb-item active">Thể loại truyện</li>
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
											<th>Thể Loại</th>
											<th>Tên không dấu</th>
											<th>Ngày tạo</th>
											<th>Điều chỉnh</th>
										</tr>
									</thead>

									<tbody>
										<?php $stt =1; foreach ($data['theloai'] as $val) { ?>
										<tr>
											<td><?php echo $val['id'] ?></td>
											<td><?php echo $val['ten'] ?></td>
											<td><?php echo $val['ten_khongdau'] ?></td>
											<td><span class="tag tag-success"><?php echo datetotime($val['capnhat']) ?></span></td>
											<td><button class="btn" onclick="ChinhSua('<?php echo $val['id'] ?>','<?php echo $val['ten'] ?>')"><i class="fas fa-edit"></i></button>
												<a href="<?php echo XuLyXoaTheLoaiTruyen.'/'.$val['id'] ?>" class="btn" onclick="return confirm('Bạn có muốn xóa thể loại [<?php echo $val['ten'] ?>]')"><i class="fas fa-trash-alt"></i></a></td>
										</tr>
									<?php $stt++; } ?>
									</tbody>
								</table>
							</div>
						</div>
				  </div>
						<div class="col-6">
							<div class="card"><div class="card-body">
								<form action="<?php echo xulythemtheloaitruyen; ?>" method="POST">
									<div class="form-group">
										<label for="ten">Tên Thể Loại (*)</label>
										<input type="text" name="ten" class="form-control" id="ten" required autocomplete="off">
										<small id="emailHelp" class="form-text text-muted">Tên thể loại không được trùng.</small>
									</div>
									<div class="text-center">
										<button class="btn btn-primary"><i class="fas fa-plus"> Thêm Mới  </i></button>
									</div>
							</form>
							</div>
							<div class="card"><div class="card-body">
								<form action="<?php echo XuLySuaTheLoaiTruyen; ?>" method="POST">
									<input type="text" id="id_chinhsua" name="id" hidden>
									<div class="form-group">
										<label for="ten">Tên Thể Loại (*)</label>
										<input id="ten_chinhsua" type="text" name="ten" class="form-control"  id="ten" required autocomplete="off">
										<small id="emailHelp" class="form-text text-muted">Tên thể loại không được trùng.</small>
									</div>
									<div class="text-center">
										<button class="btn btn-primary"><i class="fas fa-sync-alt"> Cập nhật  </i></button>
									</div>
							</form>
							</div>
						</div>
					
				</div>
			</div>
		</div><!-- /.container-fluid -->
		</section> 
	<script type="text/javascript">
		function ChinhSua(id,ten){
			document.getElementById('id_chinhsua').value = id;
			document.getElementById('ten_chinhsua').value = ten;
		}
	</script>			