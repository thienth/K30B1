<?php
include_once("database.php");
class M_chu_de extends database
{
	public function Doc_chu_de()
	{
		$sql = "select * from chu_de";
		$this->database();
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}
}
?>