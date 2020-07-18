
<body>
	<link href="css1/bootstrap.min.css" rel="stylesheet" />

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
                <li class="active">College</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">College</h1>
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
                            <h2>INSERT</h2>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="post" action="/admin/insert_collegep.php" role="form" style="display: block;">
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
                                    <label>E Mail</label>
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
    <script src="js1/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js1/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js1/DT_bootstrap.js"></script>
   <script src="js1/dynamic-table.js"></script>
		
</body>