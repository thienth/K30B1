<?php
// Sử dụng code php để lấy toàn bộ dữ liệu trong 
// file data.txt ra ngoài và var_dump để hiển thị
$data = fopen('data.txt', 'r');
$result = [];
while(!feof($data)){
    $wdata = explode('|', fgets($data));
    $fdata["id"] = $wdata[0];
    $fdata["name"] = $wdata[1];
    $fdata["age"] = $wdata[2];
    array_push($result, $fdata);
}
var_dump($result);

?>