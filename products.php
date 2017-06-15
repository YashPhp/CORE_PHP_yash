<?php
include('header.php');
?>
<Style>
ol {
	list-style:none;
}
ol {
	padding-left:50px;
}
ol li{
	float:left;
	padding:10px;
}
</style>
<div Class="container">
<ol>
<?php
include('conn.php');
$sql = "select * from product order by id DESC";
$query = $conn -> query($sql);
$x = 0;
while($result = mysqli_fetch_array($query)){
?>
	<li>
	<a href="page.php?name=<?php echo $result['name']; ?>&id=<?php echo $result['id']; ?>">
	<img src="admin/p_img/<?php echo $result['img']; ?>" Style="height:300px;width:300px; "  />
	</a>
	</li>
<?php
	if($x==2){
		echo"</ol><ol>";
		$x=0;
	}
	$x++;
}
?>
</ol>
<?php
include('footer.php');
?>
<Script src="admin/js/jquery.js"></script>
<script>
	$('li').hover(function(){
		$('')
	});
</script>
