<?php
error_reporting(0);
include('db.php');
$user_name=$_POST["user_name"];
$sql="select * from login where username='$user_name'";
//echo $sql;
$res=mysql_query($sql);
if($row=mysql_fetch_array($res))
{
    $hintqtn=$row["hint_q"];
	$hintans=$row["hint_a"];
	$pwd=$row["password"];
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang= "en"> <!--<![endif]-->
<head>
  <meta charset= "utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/login_css.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Please Enter Your Hint Answer.</h1>
						
					<div class="alert alert-info">
						Hint Question: <?php echo " ".$hintqtn; ?>
					</div>
					<form class="form-horizontal" action="getpwd.php" method="post">
						<fieldset>
							
						<div class="input-prepend" title= "Hint Answer" data-rel= "tooltip">
								<input name="hintans1" type="text" class="input-large span10" id="user_name" size="50" autofocus  />
						      <input name="hintans" type="hidden" id="hintans" value="<?php echo $hintans; ?>">
                              <input name="pwd" type="hidden" id="pwd" value="<?php echo $pwd; ?>">
</div>
							
							<div class="clearfix"></div>

						
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Get Password</button>
							</p>
						</fieldset>
					</form>
				</div>

</section>
</body>
</html>
<?php	
	
}
else
{
?>
<script type="text/javascript">
alert("Wrong username");
document.location="../index.php";
</script>
<?php
}
?>

