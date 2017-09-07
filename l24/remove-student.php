<?php
# 1. Lấy id từ url
$id = $_GET['id'];
# 2. Lấy ra toàn bộ dữ liệu từ file data.txt đưa vào mảng
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
# 3. Chạy qua mảng trên sau đó xoá phần tử có thuộc tính id = id đc lấy từ url
for ($i=count($dataList)-1; $i >= 0 ; $i--) { 
    if($dataList[$i]['id'] == $id){
        array_splice($dataList, $i, 1);
        break;
    }
}
# 4. Ghi lại nội dung file
file_put_contents("data.txt", ""); // Xoá trắng nội dung file
$wFile = fopen("data.txt","a") or die("write file error!");
foreach($dataList as $value){
    $line = implode("|", $value);
    fwrite($wFile, $line);
}
fclose($wFile);
# 5. Điều hướng website về trang index.php
header('location: index.php');
?>