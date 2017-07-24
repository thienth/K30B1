<?php
if(isset($_POST['name'])&&isset($_POST['age'])){
    // if name and age is empty
    if($_POST['name']==""||$_POST['age']==""){
        echo "Please enter data!";
    }
    // else
    else{
        // open file.
        $rFile = fopen("data.txt","r") or die("read file error!");
        $max = 0;
        // read file get row.
        while(!feof($rFile)){
            $line = explode("|", fgets($rFile));
            if(empty($line[0])){
                continue;
            }
            if($max < $line[0]){
                $max = $line[0];
            }
        }
        fclose($rFile);
        // set data
        $data = "\n".++$max."|".$_POST['name']."|".$_POST['age'];
        // open file.
        $wFile = fopen("data.txt","a") or die("write file error!");
        // write data to file 
        fwrite($wFile,$data);
        // close file/
        fclose($wFile);
        header('location: index.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<div><input type="text" name="name" placeholder="Name Student"></div>
		<div><input type="number" name="age" placeholder="Age Student"></div>
		<div><button type="submit">Submit</button></div>
	</form>
</body>
</html>