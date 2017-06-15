<?php
include('header.php');
include('conn.php');
?>
<div class="container" >
<table class="table">
	<tr>
		<th>Number </th>
		<th>Name</th>
		<th>Product</th>
		<th>Message </th>
		<th>Delete</th>
	</tr>
<?php
include('conn.php');
$sql = "select * from mail order by id DESC";
$query = $conn -> query($sql);
while ($row = mysqli_fetch_array($query)){
	?>
	<tr>
		<td><?PHP echo $row[1]; ?></td>
		<td><?PHP echo $row[2]; ?></td>
		<td><?PHP if($row[3] == ""){ echo "contact"; } else { echo '<span style="color:blue;">'.$row[3] .'</span>' ; } ?></td>
		<td><?PHP echo $row['content']; ?></td>
		<td><a href="del.php?id=<?PHP echo $row['id']; ?>" class="btn btn-primary" >Delete</a></td>
	</tr>
	<?php
}
?>
</table>
</div>