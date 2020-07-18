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
                            <h2>COLLEGE REGISTRATION</h2>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="post" action="reg_clgp.php" role="form" style="display: block;">
                                    <label>College Name </label>
									<div class="form-group">
										<input type="text" name="clg_name" id="email" tabindex="1" class="form-control" placeholder="College Name" required>
									</div>
                                    <label>City</label>
                                    <div class="form-group">
										<input type="text" name="clg_city" id="email" tabindex="1" class="form-control" placeholder="City" required>
									</div>
                                    <label>University</label>
                                    <div class="form-group">
										<input type="text" name="clg_univ" id="email" tabindex="1" class="form-control" placeholder="University" required>
									</div>
                                    <label>E Mail (This will be your username) </label>
                                    <div class="form-group">
										<input type="text" name="clg_email" id="email" tabindex="1" class="form-control" placeholder="E Mail" required>
									</div>
                                    <label>Contact</label>
                                    <div class="form-group">
										<input type="text" name="clg_contact" id="email" tabindex="1" class="form-control" placeholder="Contact" required>
									</div>
                                    <label>Website</label>
                                    <div class="form-group">
										<input type="text" name="clg_website" id="email" tabindex="1" class="form-control" placeholder="Website" required>
									</div>
                                    <label>Address</label>
                                    <div class="form-group">
										<input type="text" name="clg_addr" id="email" tabindex="1" class="form-control" placeholder="Address" required>
									</div>
									
									<label>Password</label>
									<div class="form-group">
										<input type="password" name="password" id="login-
										password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									
									<label>Hint Question</label>
                                    <div class="form-group">
										<input type="text" name="hintq" id="email" tabindex="1" class="form-control" placeholder="Hint Question" required>
									</div>
									<label>Hint Answer</label>
                                    <div class="form-group">
										<input type="text" name="hinta" id="email" tabindex="1" class="form-control" placeholder="Hint Answer" required>
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