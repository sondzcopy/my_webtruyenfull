<?php 
	class home extends core{
		function index(){
			$this ->view("trangchu",[
				'title' 			=> 'Đọc truyện online, đọc truyện chữ, truyện full, truyện hay. Tổng hợp đầy đủ và cập nhật liên
                tục',
				'page' 				=>'index',
				'truyenHOT' 		=> $this->model("truyen_Model")->getTruyenHOT(),
				'truyenCapNhat' 	=> $this->model("truyen_Model")->getTruyenMoiCapNhat(),
				'truyenHoanThanh' 	=> $this->model("truyen_Model")->getTruyenHoanThanh(),
				'theLoaiTruyen' 	=> $this->model("theLoaiTruyen_Model")->getAll()

			]);
		}
		function truyen($ten_khongdau){
			$truyen = $this->model("truyen_Model")->get($ten_khongdau);
			$this->view('trangchu', [
				'title'		=> 'Truyện '.$truyen['ten'],
				'page'		=> 'truyen',
				'truyen'	=> $truyen,
				'chuong' 	=> $this->model("chuong_Model")->get($truyen['id']),
				'truyenHOT'	=> $this->model("truyen_Model")->getTruyenHOT(),
			]);
		}
		// function doctruyen($ten_khongdau, $chuong){
		// 	$truyen = $this->model("truyen_Model")->get($ten_khongdau);
		// 	$chuong	 = $this->model("chuong_Model")->getHome($ten_khongdau,$chuong);
		// 	$this->view('trangchu', [
		// 		'title'		=> 'Truyện '.$truyen['ten'],
		// 		'page'		=> 'doctruyen',
		// 		'truyen'	=> $truyen,
		// 		'chuong'	=> $chuong
		// 	]);
		// }
		function doctruyen($ten_khongdau, $chuong){
		    $truyen = $this->model("truyen_Model")->get($ten_khongdau);
		    $chuong = $this->model("chuong_Model")->getHome($truyen['id'], $chuong);

		    // Chỉ truyền dữ liệu nếu có
		    if ($truyen && $chuong) {
		        $this->view('trangchu', [
		            'title'     => 'Truyện '.$truyen['ten'],
		            'page'      => 'doctruyen',
		            'truyen'    => $truyen,
		            'chuong'    => $chuong
		        ]);
		    } else {
		        echo 'Dữ liệu không tồn tại hoặc có lỗi';
		    }
		}

	}
 ?>