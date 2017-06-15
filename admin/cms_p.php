<?php
include('conn.php');
$title = $_POST['title'];
$content = $_POST['content'];
$img = $_POST['img'];

$sql = "insert into about (title,content,img) values ('$title','$content','$img')";
$res = $conn -> query($sql);
if($res){
	echo"<h1>Thanks</h1>";
}
?>