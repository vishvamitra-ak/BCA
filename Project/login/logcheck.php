<?php session_start(); ?>
<?php
	$username=$_POST["username"];
	$password=$_POST["password"];	
	include('db.php');
	$sql="select * from login where username='$username' and password='$password'";
	$res=mysql_query($sql);
	if($row=mysql_fetch_array($res))
	{
	$type=$row["usertype"];
	
	$_SESSION["uname"]=$username;
	
	if($type=="admin")
	{
	?>
	<script>
	document.location="/admin/index.php";
	</script>
	<?php
	}
	
	else if($type=="student")
	{
	?>
	<script>
	document.location="/student/index.php";
	</script>
	<?php
	}
	else if($type=="college")
	{
	?>
	<script>
	document.location="/college/index.php";
	</script>
	<?php
	}
}
	
	else
	{
	?>
	<script>
	alert("Invalid User name Or Password");
	history.back();
	</script>
	<?php
	}
	?>