
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
                <li class="active">Marks</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Marks</h1>
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
								<form id="login-form"  method="post" action="/admin/insert_marksp.php" role="form" style="display: block;">
                                    <label>Student</label>
									<!--<div class="form-group">
										<input type="text" name="stud_id" id="email" tabindex="1" class="form-control" placeholder="Student ID" required>
									</div>-->
                                    <div class="form-group">
                                        
                                            <select class="form-control" id="sel1" name="stud_id">
                                            
                                            
                                            <option>SELECT</option>
                                            <?php
	                                           error_reporting(0);
	                                           $con=mysql_connect('localhost','root','xyzzy');
	                                           mysql_select_db('project_test',$con);
	                                           $sql="select * from student";
	                                           $res=mysql_query($sql);
	                                           while($row1=mysql_fetch_array($res))
	                                           {
		                                           ?>
                                            <option value="<?php echo $row1['stud_id'];?>"><?php echo $row1['fname'];?></option>
                                                <?php
                                                    }
                                                    ?>
                                        </select>
                                            
                                        </div>
                                    <label>X Year</label>
                                    <div class="form-group">
										<input type="text" name="sslc_year" id="email" tabindex="1" class="form-control" placeholder="X Year" required>
									</div>
                                    <label>X Percentage</label>
                                    <div class="form-group">
										<input type="text" name="sslc_per" id="email" tabindex="1" class="form-control" placeholder="X Percentage" required>
									</div>
                                    <label>XII Year</label>
                                    <div class="form-group">
										<input type="text" name="puc_year" id="email" tabindex="1" class="form-control" placeholder="XII year" required>
									</div>
                                    <label>XII Percentage</label>
                                    <div class="form-group">
										<input type="text" name="puc_per" id="email" tabindex="1" class="form-control" placeholder="XII Percentage" required>
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
		
</body>
</html>