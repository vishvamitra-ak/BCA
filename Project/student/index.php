<!DOCTYPE html>
<html>
<?php
    include('include/link.php');
    include('include/sidebar.php');
    include('include/navbar.php');
    
    ?>
<body>
	
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
			
				<h1 class="page-header headd">Welcome, <?php
															 $con=mysql_connect('localhost','root','xyzzy');
																mysql_select_db('project_test',$con);
																$sql="select * from student where email='$uname'";
																$res=mysql_query($sql);
																$row=mysql_fetch_array($res);
															echo $row['fname']; echo "  ";
																echo $row['lname'];	?></h1>
			</div>
		</div><!--/.row-->
		
		<img class="imgg" src="car2.jpg"></img>
			</div><!--/.col-->
			
		</div><!--/.row-->
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