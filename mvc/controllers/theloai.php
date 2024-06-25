<?php 
	// Controller (theloai.php)
class theloai extends Core {
     function index($ten_khongdau){
            $truyen = $this->model("truyen_Model")->getTruyenByTheLoai($ten_khongdau);

            if ($truyen) {
                $this->view('trangchu', [
                    'title'     => 'ff',
                    'page'      => 'theloai',
                ]);
            } else {
                echo 'Dữ liệu không tồn tại hoặc có lỗi';
            }
        }
}

 ?>