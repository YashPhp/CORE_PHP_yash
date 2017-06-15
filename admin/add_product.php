<?php
$name = $_POST['name'];
$content = $_POST['content'];
$img = $_POST['img'];
$type = $_POST['type'];

include('conn.php');
$sql = "insert into product (name,content,img,type) Values ('$name','$content','$img','$type')";
$query = $conn -> query($sql);
echo "Product Added";
?>