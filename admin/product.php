<?php

include('header.php');

?>

<div>

	<div class="panel panel-default " id="panel"> 

			<div class="panel-heading"> 

			  <h3 class="panel-title"> 

				Add New Product Now 

			  </h3> 

			</div> 

			<div class="panel-body"> 

			  <form method="post" enctype="multipart/form-data" >

			  <table class="table" >

				<tr>

					<td>Name</td>

					<td><input type="text" name="name" id="name" /></td>

				</tr>

				<tr>

					<td>Content</td>

					<td><textarea name="content" id="content"></textarea></td>

				</tr>

				<tr>

					<td>type</td>

					<td><select name="type" id="type"><option>Select</option><option>Dress</option></td>

				</tr>

				<tr>

					<td>Img</td>

					<td><input type="file" name="img" id="img" /></td>

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

<div id="result" ></div>
<script>

$('#submit').click(function (){

	var fname = $('#name').val();

	var fcontent = $('#content').val();

	var path = $('#img').val();
	var fimg = path.replace(/^.*\\/, "");

	var ftype = $('#type').val();

	if(fname == ""){

		alert('add product name');

		return;

	}

	if(fcontent == ""){

		alert('add product content');

		return;

	}

	if(fimg == ""){

		alert('add product img');

		return;

	}

	if(ftype == ""){

		alert('add product type');

		return;

	}

	$.ajax({

		url:"add_product.php",

		method:"post",

		data:{name:fname,content:fcontent,img:fimg,type:ftype},

		dataType:"text",

		success:function(data){

			alert(data);

		}

	});

});

</script>

<?php

@$img = $_FILES['img']['tmp_name'];

@$img1 = $_FILES['img']['name'];

move_uploaded_file($img,"p_img/".$img1);

?>



<div class="container" >

<table class="table">

<?php

include('conn.php');

$sql = "select * from product order by id DESC";

$query = $conn -> query($sql);

while ($row = mysqli_fetch_array($query)){

	?>

	<tr>

		<td><?PHP echo $row['name']; ?></td>

		<td><img src="p_img/<?php echo $row['img']; ?>" height="50px" width="50px"></td>

		<td><a href="del.php?name=<?PHP echo $row['id']; ?>" class="btn btn-primary" >Delete</a></td>

		<td><a href="edit.php?id=<?PHP echo $row['id']; ?>" class="btn btn-info" >EDIT</a></td>

	</tr>

	<?php

}

?>

</table>

</div>

</body>

</html>