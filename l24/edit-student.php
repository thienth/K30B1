<?php
# 1. Lấy id từ url
$id = $_GET['id'];
# 2. Lấy toàn bộ data từ file data.txt (array)
$rFile = fopen("data.txt","r") or die("read file error!");
$dataList = [];
// read file get row.
while(!feof($rFile)){
    $line = explode("|", fgets($rFile));
    if(empty($line[0])){
        continue;
    }
    $row = [
        'id' => $line[0],
        'name' => $line[1],
        'age' => $line[2]
    ];

    array_push($dataList, $row);
}
fclose($rFile);
# 3. TÌm trong mảng và lấy ra phần tử tương ứng với id từ url
$model = null;
$selectedIndex = 0;
for($i =0; $i < count($dataList); $i++){
    if($dataList[$i]['id'] == $id){
        $model = $dataList[$i];
        $selectedIndex = $i;
        break;
    }
}
if($model == null) die('object not found!');
# 4. nếu request là dạng post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        # 4.1 lấy name và age từ form gửi lên
        $name = $_POST['name'];
        $age = $_POST['age'];
        # 4.2 cập nhật lại name và age của phần tử được tìm thấy bới id từ url
        $dataList[$selectedIndex]['name'] = $name;
        $dataList[$selectedIndex]['age'] = intval($age);
        # 4.3 viết lại file
        file_put_contents("data.txt", ""); // Xoá trắng nội dung file
        $wFile = fopen("data.txt","a") or die("write file error!");
        foreach($dataList as $value){
            $line = implode("|", $value);
            var_dump($line);
            fwrite($wFile, $line);
        }
        fclose($wFile);
        # 4.4 redirect về trang index.php
        header('location: index.php');
    }
# 5. Nếu request là dạng get thì hiển thị form
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<div><input type="text" name="name" value="<?= $model['name'] ?>" placeholder="Name Student"></div>
		<div><input type="number" name="age" value="<?= intVal($model['age']) ?>" placeholder="Age Student"></div>
		<div>
            <button type="submit">Submit</button>
        </div>
	</form>
</body>
</html>