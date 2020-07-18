<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/res/css/edit_bootstrap.css">
    <link rel="stylesheet" href="/res/css/navbar.css">
	<link rel="stylesheet" href="/res/css/edit_styles.css">
	<script src="/res/js/edit_bootstrap.js"></script>
	<script src="/res/js/edit_jquery.js"></script>
	<script src="/res/js/edit_scripts.js"></script>
</head>
<body>

	<header><div class="content">
    <div class="navbar">
    <a class="active" href="/">Home</a>
    <a href="/admin">Admin</a>
  
        </div></div>
    </header>
	
    <?php
		$id=$_REQUEST['id'];
	  error_reporting(0);
	  $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	  $sql="select * from college where clg_id='$id'";
	  $res=mysql_query($sql);
	  $row=mysql_fetch_array($res);
		  ?>
    
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
                            <h2>EDIT</h2>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="post" action="/table_update/update_college.php" role="form" style="display: block;">
                                    <input type="hidden" name="clg_id" id="hiddenField" value="<?php echo $row['clg_id']; ?>">
                                    <label>College Name </label>
									<div class="form-group">
										<input type="text" name="clg_name" id="email" tabindex="1" class="form-control" placeholder="College Name" required value="<?php echo $row['clg_name'];?>">
									</div>
                                    <label>City</label>
                                    <div class="form-group">
										<input type="text" name="clg_city" id="email" tabindex="1" class="form-control" placeholder="City" required value="<?php echo $row['clg_city'];?>">
									</div>
                                    <label>University</label>
                                    <div class="form-group">
										<input type="text" name="clg_univ" id="email" tabindex="1" class="form-control" placeholder="University" required value="<?php echo $row['clg_univ'];?>">
									</div>
                                    <label>E Mail</label>
                                    <div class="form-group">
										<input type="text" name="clg_email" id="email" tabindex="1" class="form-control" placeholder="E Mail" required value="<?php echo $row['clg_email'];?>">
									</div>
                                    <label>Contact</label>
                                    <div class="form-group">
										<input type="text" name="clg_contact" id="email" tabindex="1" class="form-control" placeholder="Contact" required value="<?php echo $row['clg_contact'];?>">
									</div>
                                    <label>Website</label>
                                    <div class="form-group">
										<input type="text" name="clg_website" id="email" tabindex="1" class="form-control" placeholder="Website" required value="<?php echo $row['clg_website'];?>">
									</div>
                                    <label>Address</label>
                                    <div class="form-group">
										<input type="text" name="clg_addr" id="email" tabindex="1" class="form-control" placeholder="Address" required value="<?php echo $row['clg_addr'];?>">
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