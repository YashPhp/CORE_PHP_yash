<?php
@$name = $_GET['name'];
@$id = $_GET['id'];
include('conn.php');
if($name){
$sql =  "DELETE FROM `product` WHERE `product`.`id` = '$name'";
$result = $conn -> query($sql);
echo '<script>
	location.href = "product.php";
</script>';
}
elseif($id){
$sql =  "DELETE FROM `mail` WHERE `mail`.`id` = '$id'";
$result = $conn -> query($sql);
echo '<script>
	location.href = "clients.php";
</script>';
}
?>

