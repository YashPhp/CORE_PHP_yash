<?php
@$email = $_POST['email'];
@$name = $_POST['name'];
@$mes = $_POST['mes'];
@$aim = $_POST['product'];

if(empty($email) || empty($name) ){
	echo "Plz Fill All Fields !";
}
else{
include('conn.php');
$sql = "insert into mail(email,name,content,aim) values ('$email','$name','$mes','$aim')";
$result = $conn -> query($sql);
}
?>
Thanks