<?php 
/**
* 
*/
class BaseModel
{
	public static function find($id = null){
		if($id != null){
			$query = "select * from " . static::$table . " where id = :id";
			$conn = BaseModel::getConnect();
			$stmt = $conn->prepare($query);
			$stmt->bindValue(':id', $id);
			$stmt->execute();
			$rs = $stmt->fetchAll(PDO::FETCH_CLASS, static::class);

			if(count($rs) > 0){
				return $rs[0];
			}

			return null;

		}else{
			$model = new static();	
			return $model;
		}
		
	}

	public static function getConnect(){
		$servername = 'localhost';
		$dbname = 'k30dl';
		$dbUsername = 'root';
		$dbPassword = '123456';
		$conn = new PDO("mysql:servername=$servername;dbname=$dbname;charset=utf8;", $dbUsername, $dbPassword);
		return $conn;
	}
}
// User::find()->get();

 ?>