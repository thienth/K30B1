<?php
include_once("database.php");
class M_hoa extends database
{
	public function Doc_hoa_tieu_bieu($vt=-1,$limit=-1)
	{
		$pageIndex = ($vt-1)*$limit;
		$sql = "select * from hoa limit $pageIndex,$limit";
		$this->database();
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}

	public static function Tong_so_hoa(){
		$model = new static();
		$sql = "select * from hoa";
		$model->database();
		$model->setQuery($sql);
		$model->execute();
		return count($model->loadAllRows());
	}
	
	public function Doc_hoa_theo_chu_de($MaCD)
	{
		$sql = "select * from hoa where MaLoai = $MaCD";
		$this->database();
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
		
	}
	public function Lay_ten_chu_de($MaCD)
	{
		
	}
	
	
	
}
?>