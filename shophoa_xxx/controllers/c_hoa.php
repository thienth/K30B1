<?php
class C_hoa
{
	public function Hien_thi_hoa_tieu_bieu()
	{
		// Models
		include_once("models/m_hoa.php");
		
		// Phân trang
		$pageNumber = isset($_GET['page']) == true ? $_GET['page'] : 1;
		$hoa = new M_hoa();
		$data = $hoa->Doc_hoa_tieu_bieu($pageNumber, 12);


		// Tổng số 
		$tongSoHoa = M_hoa::Tong_so_hoa();
		$soTrang  = $tongSoHoa%12 == 0 ? $tongSoHoa/12 : floor(($tongSoHoa/12))+1;
		
		// Views
		$title="Sản phẩm mới";
		$view="views/hoa/v_hoa.php";
		include("includes/layout.php");	
	}


	public function Hien_thi_hoa_theo_chu_de()
	{
		// Modes
		include_once("models/m_hoa.php");
		$hoa = new M_hoa();
		$data = $hoa->Doc_hoa_theo_chu_de($_GET['MaCD']);
		
		$soTrang = 0;
		// Views
		$title="Tên chủ đề";
		$view="views/hoa/v_hoa.php";
		include("includes/layout.php");
	}
	public function Tim_hoa()
	{
		// Xử lý tìm webservice
		require_once ('nuSoap/nusoap.php'); 
		//Khai báo tham số Input
		
		// Khai báo tên miền
		
		//Tạo đối tượng tham chiếu đến WebServeices 
		
		// Gọi hàm và truyền tham số 
		
		$hoas=array();
		if(!empty($response))
		{
			
		}
		
		// Views
		$title="Tìm kiếm hoa";
		$view="views/hoa/v_hoa.php";
		include("includes/layout.php"); 
	}
}
?>