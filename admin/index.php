<?php
include('header.php');
include('conn.php');
?>
<div class="panel panel-danger"> 
   <div class="panel-heading"> 
      <h3 class="panel-title">New Mail</h3> 
   </div> 
   <div class="panel-body"> 
      <?PHP $sql="select * from mail order by id DESC"; $result = $conn -> query($sql); 
	  $row = mysqli_fetch_array($result); ?>
	  <?php echo $row['name']; 	?> => <?php echo $row['email']; ?><br>
	<?php echo $row['content'];?> 	  
   </div> 
</div>	  
	  
</body>
</html>
