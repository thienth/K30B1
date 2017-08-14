<?php 
/**
* 
*/
class BaseModel
{
	public static function where(){
		if ( func_num_args() >= 2 ){
			$compare = func_num_args() > 2 ? func_get_args()[1] : "=";
			$column = func_get_args()[0];
			$value = func_num_args() > 2 ? func_get_args()[2] : func_get_args()[1];

			$model = new static();
			$model->paramArr = [];
			$model->queryBuilder = "select * from " 
									. static::$table 
									. " where $column $compare :value".count($model->paramArr);
			$model->paramArr[] = $value;
			return $model;
	    }
	    return false;
	}

	public function get(){
		$conn = BaseModel::getConnect();
		$stmt = $conn->prepare($this->queryBuilder);
		for ($i=0; $i < count($this->paramArr); $i++) { 
			$stmt->bindValue(':value'.$i, $this->paramArr[$i]);
		}
		$stmt->execute();
		$rs = $stmt->fetchAll(PDO::FETCH_CLASS, static::class);
		return $rs;
	}

	public static function find($id){
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
	}

	public static function all(){
		$query = "select * from " . static::$table;
		$conn = BaseModel::getConnect();
		$stmt = $conn->prepare($query);
		$stmt->bindValue(':id', $id);
		$stmt->execute();
		$rs = $stmt->fetchAll(PDO::FETCH_CLASS, static::class);

		return $rs;
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

 ?>