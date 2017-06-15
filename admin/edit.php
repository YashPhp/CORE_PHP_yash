<?php
include('header.php');
include('conn.php');
$name = $_GET['id'];
$sql =  "select * from product where id='$name'";
$result = $conn -> query($sql);
$row = mysqli_fetch_array($result);

?>
	<div class="panel panel-default " id="panel"> 
			<div class="panel-heading"> 
			  <h3 class="panel-title"> 
				Edit 
			  </h3> 
			</div> 
			<div class="panel-body"> 
			  <form method="post" enctype="multipart/form-data" >
			  <table class="table" >
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" /></td>
				</tr>
				<tr>
					<td>Content</td>
					<td><textarea name="content" id="content"><?php echo $row['content']; ?></textarea></td>
				</tr>
				<tr>
					<td>type</td>
					<td><select name="type" id="type"><option>Dress</option><option>smple</option></select></td>
				</tr>
				<tr>
					<td>Img</td>
					<td><input type="file" name="img" id="img" /><br><img src="p_img/<?php echo $row['img']; ?>" height="350px" width="350px"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" id="submit" class="btn btn-success"/></td>
				</tr>
			  </table>
			  <div id="pfooter"></div>
			  </form>
			</div> 
    </div>  
</div>
<?php
$id = $row['id'];
$img = $row['img'];
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$content = $_POST['content'];
	$img = $_FILES['img']['name'];	
	$img_up = $_FILES['img']['tmp_name'];	
	
	$sql = "Update product set name='$name',content='$content',img='$img' where id='$id'";
	move_uploaded_file($img_up, 'p_img/'.$img);
	$query = $conn -> query($sql);
	if($query){
	echo "data update <script>location.href = 'product.php'</script>";
}
}
?>