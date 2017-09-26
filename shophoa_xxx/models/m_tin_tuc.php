<?php
include_once("database.php");
class M_tin_tuc extends database
{
	// Xây dựng phương thức 
	public function Doc_tin_tuc_theo_ma_tin_tuc($MaTT){
		$sql = "select * from tin_tuc where MaTT = $MaTT";
		$this->database();
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}
	

	
}
?>