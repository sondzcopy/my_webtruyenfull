<?php  
	class admin extends core{
		function dangky(){
			$this->view('dangky');
		}

		function XuLyDangKy(){
			if($this->model("TaiKhoan_Model")->them($_POST['tendangnhap'], $_POST['matkhau']) == 1){
				$this->loginSession($this->model("TaiKhoan_Model")->get($_POST['tendangnhap']));
				return redirect(bangdieukhien);
			}else{
				echo 'ten dang nhap bi trung';
			}
		}

		function dangnhap(){
			$this->view('dangnhap');
		}
		function XuLyDangNhap(){
			$taikhoan = $this->model("TaiKhoan_Model")->DangNhap($_POST['tendangnhap'], $_POST['matkhau']);

			if($taikhoan == true){
				$this->loginSession($this->model("TaiKhoan_Model")->get($_POST['tendangnhap']));
			return redirect(bangdieukhien);
			}else{
				return redirect(dangnhap, 'Tên đăng nhập hoặc mật khẩu không đúng!');
			}
		}
		function dangxuat(){
			$this->logOut();
			return redirect(APP_URL);
		}
		function bangdieukhien(){
			$this->view('admin', [
				'title' 	=> 'Bảng Điều Khiển',
				'page' 		=> 'admin/bangdieukhien',
			]);
		}

		function theloaitruyen(){
			$this->view('admin', [
				'title' 	=> 'Thể Loại Truyện',
				'page' 		=> 'admin/theloaitruyen',
				'theloai'	=> $this->model("TheLoaiTruyen_Model")->getAll()
			]);
		}

		function XuLyThemTheLoaiTruyen(){
			if($this->model("TheLoaiTruyen_Model")->them($_POST['ten']) == 1){
				return redirect(theloaitruyen);
			}else{
				return redirect(theloaitruyen, 'Thể loại bị trùng!');
			}
		}
		function XuLySuaTheLoaiTruyen(){
			$theloai = $this->model("TheLoaiTruyen_Model")->sua($_POST['id'], $_POST['ten']);
			
			if($theloai === 1){
				return redirect(theloaitruyen);
			}else{
				return redirect(theloaitruyen, 'Thể loại bị trùng!');
			}
		}

		function XuLyXoaTheLoaiTruyen($id){
			$theloai = $this->model("TheLoaiTruyen_Model")->xoa($id);
			
			if($theloai === 1){
				return redirect(theloaitruyen);
			}else{
				return redirect(theloaitruyen, 'Lỗi không xác định!');
			}
		}

		// truyện
		function truyen(){
			$this->view('admin', [
				'title' 	=> 'Danh sách Truyện',
				'page' 		=> 'admin/truyen',
				'truyen'	=> $this->model("truyen_Model")->getAll()
			]);
		}
		function dangtruyen(){
			$this->view('admin', [
				'title' 	=> 'Đăng Truyện',
				'page' 		=> 'admin/dangtruyen',
				'theloai'	=> $this->model("TheLoaiTruyen_Model")->getAll()
			]);
		}
		function XuLyDangTruyen(){
			if(isset($_FILES['hinh'])){
				$img_name = Slug($_POST['ten']).'-'.Slug($_POST['tacgia']).'.jpg';
				$img_tmp = $_FILES['hinh']['tmp_name'];
				$patch = "./storage/";

				if(move_uploaded_file($img_tmp, $patch . $img_name)){
					$hinh = $img_name;
				}else{
					$hinh = "default.jpg";
				}
			}else{
				$hinh = "default.jpg";
			}

			$truyen = $this->model("Truyen_Model")->them($hinh, $_POST['ten'], $_POST['tacgia'], $_POST['nguon'], $_POST['trangthai'], $_POST['gioithieu']);

			if($truyen === 1){
				$truyen_id = $this->model("truyen_Model")->getID(Slug($_POST['ten']));
				foreach ($_POST['theloai'] as $val) {
					$this->model("truyenTheLoai_Model")->them($truyen_id,$val);
				}
				return redirect(Truyen);
			}else{
				return redirect(DangTruyen, 'Truyện đã tồn tại!');
			}
		}

		function SuaTruyen($ten_khongdau){

			$truyen = $this->model("truyen_Model")->get($ten_khongdau);
			$this->view('admin', [
				'title'		=> 'Sửa Truyện',
				'page'		=> 'admin/suatruyen',
				'truyen'	=> $truyen,
				'theloai'	=> $this->model("TheLoaiTruyen_Model")->getAll(),
				'truyen_tl'	=> $this->model("truyenTheLoai_Model")->get($truyen['id'])
			]);
		}

		function XuLySuaTruyen(){
			if(isset($_FILES['hinh'])){
				$img_name = Slug($_POST['ten']).'-'.Slug($_POST['tacgia']).'.jpg';
				$img_tmp = $_FILES['hinh']['tmp_name'];
				$patch = "./storage/";

				if(move_uploaded_file($img_tmp, $patch . $img_name)){
					$hinh = $img_name;
				}else{
					$hinh = "default.jpg";
				}
			}else{
				$hinh = "default.jpg";
			}

			$truyen = $this->model("Truyen_Model")->sua($hinh, $_POST['ten'], $_POST['tacgia'], $_POST['nguon'], $_POST['trangthai'], $_POST['gioithieu'], $_POST['id']);

			if($truyen >= 0){
				$truyen_id = $this->model("truyen_Model")->getID(Slug($_POST['ten']));
				$this->model("truyenTheLoai_Model")->xoa($truyen_id);
				foreach ($_POST['theloai'] as $val) {
					$this->model("truyenTheLoai_Model")->them($truyen_id,$val);
				}
				return redirect(Truyen);
			}else{
				return redirect(DangTruyen, 'Truyện đã tồn tại!');
			}
		}
		function XuLyXoaTruyen($truyen_id){
				$this->model("chuong_Model")->xoaTruyen($truyen_id); 
				$this->model("truyenTheLoai_Model")->xoa($truyen_id); 
				$this->model("truyen_Model")->xoaTruyen($truyen_id); 
				return redirect(Truyen);
			}
		function DanhSachChuong($ten_khongdau){
			$truyen = $this->model("truyen_Model")->get($ten_khongdau);
			$this->view('admin', [
				'title'		=> 'Danh Sách Chương',
				'page'		=> 'admin/danhsachchuong',
				'truyen'	=> $truyen,
				'chuong'	=> $this->model("chuong_Model")->get($truyen['id'])
			]);
		}
		function XuLyDangChuong(){
			$this->model("chuong_Model")->them($_POST['truyen_id'], $_POST['ten'], $_POST['noidung']); 
			$this->model("truyen_Model")->capNhatSoChuong($_POST['truyen_id']);
			return redirect(DanhSachChuong.'/'.$_POST['ten_khongdau']);
		}
		function XuLySuaChuong(){
			$this->model("chuong_Model")->sua($_POST['chuong_id'], $_POST['ten'], $_POST['noidung']); 
			return redirect(DanhSachChuong.'/'.$_POST['ten_khongdau']);
		}
		function XuLyXoachuong($ten_khongdau,$id){
			$this->model("chuong_Model")->xoa($id); 
			$truyen = $this->model("truyen_Model")->get($ten_khongdau);
			$this->model("truyen_Model")->capNhatXoaChuong($truyen['id']);
			return redirect(DanhSachChuong.'/'.$ten_khongdau);
		}

	}
?>