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
                            <h2>INSERT</h2>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="post" action="/table_insert/insert_eventsp.php" role="form" style="display: block;">
                                    <label>College</label>
									<!--<div class="form-group">
										<input type="text" name="clg_id" id="email" tabindex="1" class="form-control" placeholder="College ID" required>
									</div>-->
                                    <div class="form-group">
                                        
                                            <select class="form-control" id="sel1">
                                            
                                            
                                            <option>SELECT</option>
                                            <?php
	                                           error_reporting(0);
	                                           $con=mysql_connect('localhost','root','xyzzy');
	                                           mysql_select_db('project_test',$con);
	                                           $sql="select * from college";
	                                           $res=mysql_query($sql);
	                                           while($row1=mysql_fetch_array($res))
	                                           {
		                                           ?>
                                            <option value="<?php echo $row1['clg_id'];?>"><?php echo $row1['clg_name'];?></option>
                                                <?php
                                                    }
                                                    ?>
                                        </select>
                                            
                                        </div>
                                    <label>Event Name</label>
                                    <div class="form-group">
										<input type="text" name="event_name" id="email" tabindex="1" class="form-control" placeholder="Event Name" required>
									</div>
                                    <label>Event Date</label>
                                    <div class="form-group">
										<input type="date" name="event_date" id="email" tabindex="1" class="form-control" required>
									</div>
                                    <label>Event Details</label>
                                    <div class="form-group">
										<input type="text" name="event_details" id="email" tabindex="1" class="form-control" placeholder="Event Details" required>
									</div>
                                    <label>Contact</label>
                                    <div class="form-group">
										<input type="text" name="event_contact" id="email" tabindex="1" class="form-control" placeholder="Contact" required>
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