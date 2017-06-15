<?php
session_start();
include('conn.php');
?>
<style>

</style>
<form method="post">
<table align="center" border="5px" >
	<tr>
		<td>Email</td>	
		<td><input type="email" name="email" id="email" /></td>
	</tr>
	<tr>
		<td>password</td>
		<td><input type="password" name="pass" id="pass" /></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" id="submit" /></td>
	</tr>
</table>
</form>
<script src="js/jquery.js" ></script>
<?php
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
if($email == "rajkot@gmail.com" and $pass == "rajkot" ){
	$_SESSION['email'] = $email;
	$_SESSION['pass'] = $pass;
	echo"<script>location.href = 'index.php'</script>";
	}
}
?>