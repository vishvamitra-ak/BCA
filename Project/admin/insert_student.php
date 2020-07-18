
<body>
	
	<?php include('include/link.php');
        include('include/navbar.php');
    include('include/sidebar.php');
	
    ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/admin/index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
                <li class="active">Insert</li>
                <li class="active">Student</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Student</h1>
			</div>
		</div><!--/.row-->
		
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
                            <h2>REGISTER</h2>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form name="formID" id="formID"  method="post" action="insert_studentp.php" role="form" style="display: block;" enctype="multipart/form-data" >
                                    <label>First Name </label>
									<div class="form-group">
                                        
										<input type="text" name="fname" id="fname" tabindex="1" class="form-control" placeholder="First Name" required>
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
										<input type="text" name="email" id="email" tabindex="1" class="form-control validate[required],custom[email]" placeholder="E Mail" required>
									</div>
                                    <label>Contact</label>
                                    <div class="form-group">
										<input type="text" name="contact" id="contact" tabindex="1" class="form-control validate[required],custom[mobile]" placeholder="Contact" required>
									</div>
                                    <label>Address</label>
                                    <div class="form-group">
										<input type="text" name="addr" id="email" tabindex="1" class="form-control" placeholder="Address" required>
									</div>
                                    <label>Class X Details</label>
                                    <div class="form-group">
										<input type="text" name="sslc_year" id="email" tabindex="1" class="form-control" placeholder="SSLC Year" required>
									</div>
									<div class="form-group">
										<input type="text" name="sslc_per" id="email" tabindex="1" class="form-control" placeholder="SSLC Score" required>
									</div>
									
									<label>Class XII Details</label>
                                    <div class="form-group">
										<input type="text" name="puc_year" id="email" tabindex="1" class="form-control" placeholder="PUC Year" required>
									</div>
									
									
                                    <div class="form-group">
										<input type="text" name="puc_per" id="email" tabindex="1" class="form-control" placeholder="PUC Score" required>
									</div>
									<label>Password</label>
									<div class="form-group">
										<input type="password" name="password" id="email" tabindex="1" class="form-control" placeholder="Password" required>
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
	</div>	<!--/.main-->
	
	
	
	<script src="js/jquery-1.11.1.min.js"></script>
    <script  src="/validation/index.js"></script>
    <script src="/validation/valid.js" type="text/javascript"></script>
    <script src="/validation/valid2.js" type="text/javascript"></script>
    <script src="/validation/valid3.js" type="text/javascript"></script>
    <script src="/validation/valid4.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
    
    
    
    
    
    
    
    
    
    
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
	
	
<!--<link rel="stylesheet" href="valid/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<script src="js/jquery.min.js"></script>
		<script src="valid/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="valid/jquery.validationEngine.js" type="text/javascript"></script>
		
		<script>	
		$(document).ready(function() {
			$("#formID").validationEngine()
		});
	</script>-->
		
</body>