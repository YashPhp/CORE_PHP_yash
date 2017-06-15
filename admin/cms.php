<?php
	include('conn.php');
	include('header.php');
?>
<div class="panel panel-success" id="panel"> 
			<div class="panel-heading"> 
			  <h3 class="panel-title"> 
				About us 
			  </h3> 
			</div> 
			<div class="panel-body"> 
			<form method="post" enctype="multipart/form-data" >
			  <table class="table" >
				<tr>
					<td>Title</td>
					<td><input type="text" name="title" id="title" /></td>
				</tr>
				<tr>
					<td>Content</td>
					<td><textarea name="content" id="content"></textarea></td>
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
<?php
if(@$_POST['submit']){
$file = $_FILES['img']['tmp_name'];
$file_n = $_FILES['img']['name'];
move_uploaded_file($file,'p_img/'.$file_n);
}
?>
<script>
	$('#submit').click(function(){
		var ftitle = $('#title').val();
		var fcontent = $('#content').val();
		var path = $('#img').val();
		var fimg = path.replace(/^.*\\/, "");
		$.ajax({
			url:"cms_p.php",
			method:"post",
			data:{title:ftitle,content:fcontent,img:fimg},
			success:function(data){
				print(data);
			}
		});		
	});
</script>