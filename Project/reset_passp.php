<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/res/login/css/bootstrap.css">
	<link rel="stylesheet" href="/res/login/css/styles.css">
	<script src="/res/login/js/jquery.js"></script>
	<script src="/res/login/js/bootstrap.js"></script>
	<script src="/res/login/js/scripts.js"></script>
</head>
<body>
<?php include('login/include/navbar.php');
include('login/include/link.php');
?>

	<!-- <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>-->
	
<div class="container">

	

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">

	
								
		</div>
	</div>
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							
								<a href="login.php" class="active" id="login-form-link">Reset Password</a>
							
							
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form formID"  method="post" role="form" style="display: block;" class="form-signin" action="reset_passpp.php">
								<?php
									$username=$_POST['username'];
									$con=mysql_connect('localhost','root','xyzzy');
									mysql_select_db('project_test',$con);
									$sql="select * from login where username='$username'";
									$res=mysql_query($sql);
									$row=mysql_fetch_array($res);
									if(empty($row))
									{?>
										<script>
											alert("User Not Found!");
											document.location="reset_pass.php";
										</script>
										<?php
									}
									
										
								?>
								<input type=hidden name="username" value="<?php echo $row['username'];?>">
									<div class="form-group">
									
										<label>Hint Question:</label>
										<p><?php echo $row['hintq'] ?></p>
									
									</div>
									<div class="form-group">
										<input type="text" name="hinta" id="email" tabindex="1" class="form-control" placeholder="Answer" required>
									</div>
									
									<div class="form-group">
										<input type="password" name="n_pass" id="login-
										password" tabindex="2" class="form-control" placeholder="New Password" required>
									</div>
									<div class="form-group">
										<input type="password" name="n2_pass" id="login-
										password" tabindex="2" class="form-control" placeholder="Re-enter New Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Submit">
											</div>
										</div>
									</div>
									
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


	
</body>
</html>