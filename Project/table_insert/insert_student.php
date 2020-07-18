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
								<form id="login-form"  method="post" action="/table_insert/insert_studentp.php" role="form" style="display: block;">
                                    <label>First Name </label>
									<div class="form-group">
										<input type="text" name="fname" id="email" tabindex="1" class="form-control" placeholder="First Name" required>
									</div>
                                    <label>Middle Name</label>
                                    <div class="form-group">
										<input type="text" name="mname" id="email" tabindex="1" class="form-control" placeholder="Middle Name" required>
									</div>
                                    <label>Last Name</label>
                                    <div class="form-group">
										<input type="text" name="lname" id="email" tabindex="1" class="form-control" placeholder="Last Name" required>
									</div>
                                    <label>E Mail</label>
                                    <div class="form-group">
										<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="E Mail" required>
									</div>
                                    <label>Contact</label>
                                    <div class="form-group">
										<input type="text" name="contact" id="email" tabindex="1" class="form-control" placeholder="Contact" required>
									</div>
                                    <label>Address</label>
                                    <div class="form-group">
										<input type="text" name="addr" id="email" tabindex="1" class="form-control" placeholder="Address" required>
									</div>
                                    <label>Education</label>
                                    <div class="form-group">
										<input type="text" name="edu" id="email" tabindex="1" class="form-control" placeholder="Education" required>
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