<?php
$data = [
    ['id' => 1, 'name'=> 'Xã hội', 'parent_id' => 0],
    ['id' => 2, 'name'=> 'Văn hoá', 'parent_id' => 0],
    ['id' => 3, 'name'=> 'Thể thao', 'parent_id' => 2],
    ['id' => 4, 'name'=> 'Hình sự', 'parent_id' => 1],
    ['id' => 5, 'name'=> 'Giáo dục', 'parent_id' => 0],
    ['id' => 6, 'name'=> 'Làm đẹp', 'parent_id' => 1],
    ['id' => 7, 'name'=> 'Khéo tay', 'parent_id' => 6],
    ['id' => 8, 'name'=> 'Gia đình', 'parent_id' => 1],
];

$rs = recursive($data);

function recursive($arr, $parent_id = 0, $indent = ""){
    // parent = 1, indent = --
    // parent = 4, indent = ----
    // parent = 6, indent = ----
    // parent = 2, indent = --
    // parent = 3, indent = ----
    $result = [];
    foreach($arr as $e){
        if($e['parent_id']==$parent_id){
            $e['name'] = $indent.$e['name'];
            // var_dump($e['name']);die;
            array_push($result, $e);
            $result = array_merge($result, recursive($arr, $e['id'], '--'.$indent));
        }
    }
    return $result;
}

// Sắp xếp lại thứ tự hiển thị của danh sách phần tử ví dụ như sau:
/*
Xã hội
-- Hình sự
-- Làm đẹp
---- Khéo tay
-- Gia đình
Văn hoá
-- Thể thao
Giáo dục
*/
?>
<select>
    <?php 
    foreach($rs as $e){
        ?>
            <option><?= $e['name']?></option>
        <?php
    }
    
    ?>
</select>

<select>
    <?php 
    foreach($data as $e){
        ?>
            <option><?= $e['name']?></option>
        <?php
    }
    
    ?>
</select>