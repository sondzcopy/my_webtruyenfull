<?php  require_once "./mvc/core/libs.php";
	class Truyen_Model extends dbCon{
		private $Truyen;

		function __construct(){
			$this->Truyen = new dbCon();
			$this->Truyen = $this->Truyen->connect();
		}

		public function them($hinh, $ten, $tacgia, $nguon, $trangthai, $gioithieu){
			try{
				$query = "INSERT INTO truyen(hinh, ten, ten_khongdau, tacgia, nguon, trangthai, gioithieu) VALUES (:hinh, :ten, :ten_khongdau, :tacgia, :nguon, :trangthai, :gioithieu)";
				$cmd = $this->Truyen->prepare($query);
				$cmd->bindValue(":hinh", $hinh);
				$cmd->bindValue(":ten", $ten);
				$cmd->bindValue(":ten_khongdau", Slug($ten));
				$cmd->bindValue(":tacgia", $tacgia);
				$cmd->bindValue(":nguon", $nguon);
				$cmd->bindValue(":trangthai", $trangthai);
				$cmd->bindValue(":gioithieu", $gioithieu);
				$cmd->execute();
				return $cmd->rowCount();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}


		public function getAll(){
			try{
				$query = "SELECT * FROM truyen ORDER BY capnhat DESC";
				$cmd = $this->Truyen->prepare($query);
				$cmd->execute();
				return $cmd->fetchAll();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}
		public function getID($ten_khongdau){
			try{
				$query = "SELECT id FROM truyen WHERE ten_khongdau = :ten_khongdau";
				$cmd = $this->Truyen->prepare($query);
				$cmd->bindValue(":ten_khongdau", $ten_khongdau);
				$cmd->execute();
				return $cmd->fetch()['id'];

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}
		public function get($ten_khongdau){
			try{
				$query = "SELECT * FROM truyen WHERE ten_khongdau = :ten_khongdau";
				$cmd = $this->Truyen->prepare($query);
				$cmd->bindValue(":ten_khongdau", $ten_khongdau);
				$cmd->execute();
				return $cmd->fetch();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}
		public function getByID($id){
			try{
				$query = "SELECT * FROM truyen WHERE id=id";
				$cmd = $this->Truyen->prepare($query);
				$cmd->bindValue(":id", $id);
				$cmd->execute();
				return $cmd->fetch();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function sua($hinh, $ten, $tacgia, $nguon, $trangthai, $gioithieu, $id){
			try{
				$query = "UPDATE truyen SET hinh = :hinh, ten = :ten, ten_khongdau = :ten_khongdau, tacgia = :tacgia, nguon = :nguon, trangthai = :trangthai, gioithieu = :gioithieu WHERE id = :id";
				$cmd = $this->Truyen->prepare($query);
				$cmd->bindValue(":hinh", $hinh);
				$cmd->bindValue(":ten", $ten);
				$cmd->bindValue(":ten_khongdau", Slug($ten));
				$cmd->bindValue(":tacgia", $tacgia);
				$cmd->bindValue(":nguon", $nguon);
				$cmd->bindValue(":trangthai", $trangthai);
				$cmd->bindValue(":gioithieu", $gioithieu);
				$cmd->bindValue(":id", $id);
				$cmd->execute();
				return $cmd->rowCount();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function capNhatSoChuong($id){
			try{
				$query = "UPDATE truyen SET chuong = chuong + 1 WHERE id = :id";
				$cmd = $this->Truyen->prepare($query);
				$cmd->bindValue(":id", $id);
				$cmd->execute();
				return $cmd->rowCount();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}
		public function capNhatXoaChuong($id){
			try{
				$query = "UPDATE truyen SET chuong = chuong - 1 WHERE id = :id";
				$cmd = $this->Truyen->prepare($query);
				$cmd->bindValue(":id", $id);
				$cmd->execute();
				return $cmd->rowCount();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}
		public function getTruyenHOT(){
			try{
				$query = "SELECT * FROM truyen ORDER BY danhgia DESC LIMIT 16";
				$cmd = $this->Truyen->prepare($query);
				$cmd->execute();
				return $cmd->fetchAll();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function getTruyenMoiCapNhat(){
			try{
				$query = "SELECT * FROM truyen ORDER BY capnhat DESC LIMIT 27";
				$cmd = $this->Truyen->prepare($query);
				$cmd->execute();
				return $cmd->fetchAll();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function getTruyenHoanThanh(){
			try{
				$query = "SELECT * FROM truyen WHERE trangthai = 'Hoàn thành' ORDER BY capnhat DESC LIMIT 12";
				$cmd = $this->Truyen->prepare($query);
				$cmd->execute();
				return $cmd->fetchAll();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}
		public function xoaTruyen($truyen_id){
			try{
				$query = "DELETE FROM truyen WHERE id =:id";
				$cmd = $this->Truyen->prepare($query);
				$cmd->bindValue(":id", $truyen_id);
				$cmd->execute();
				return $cmd->fetchAll();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}
		
		public function getTruyenByTheLoai($ten_khongdau) {
		    try {
		        $query = "SELECT tr.* FROM truyen tr , truyen_theloai tl WHERE  tl.ten_khongdau = :ten_khongdau ";
		        $cmd = $this->Truyen->prepare($query);
		        $cmd->bindValue(":ten_khongdau", $ten_khongdau);
		        $cmd->execute();
		        
		        // Lấy kết quả
		        $results = $cmd->fetchAll(PDO::FETCH_ASSOC);

		        // Kiểm tra xem có dữ liệu hay không
		        if (count($results) > 0) {
		            foreach ($results as $row) {
		                echo $row['ten_khongdau'] . "<br>"; // In ra giá trị của cột ten_khongdau
		                // Các xử lý khác với các cột khác của bảng truyen
		                echo $row['ten'] . "<br>"; // Ví dụ in ra giá trị của cột ten trong bảng truyen
		            }
		        } else {
		            echo "Không có dữ liệu truyện phù hợp với thể loại này.'$ten_khongdau'	";
		        }

		        return $results; // Trả về kết quả nếu cần thiết
		    } catch(PDOException $e) {
		        // Bắt lỗi PDOException và in ra thông báo lỗi
		        echo "Lỗi trong quá trình thực thi câu truy vấn: " . $e->getMessage();
		        return []; // Trả về mảng rỗng nếu có lỗi
		    }
		}

	}
?>