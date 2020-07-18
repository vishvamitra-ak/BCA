
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
               
                <li class="active">Events</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Events</h1>
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
								<form id="login-form"  method="post" action="insert_eventsp.php" role="form" style="display: block;">
                                    
									<!--<div class="form-group">
										<input type="text" name="clg_id" id="email" tabindex="1" class="form-control" placeholder="College ID" required>
									</div>-->
                                    <div class="form-group">
                                        
                                            
                                            <?php
	                                           error_reporting(0);
	                                           $con=mysql_connect('localhost','root','xyzzy');
	                                           mysql_select_db('project_test',$con);
	                                           $sql="select * from college where clg_email='$uname'";
	                                           $res=mysql_query($sql);
	                                           $row1=mysql_fetch_array($res)
	                                           
		                                           ?>
                                            
                                            <input name=clg_id type=hidden value="<?php echo $row1['clg_id'];?>">
                                        
                                            
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
</html>