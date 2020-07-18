<!DOCTYPE html>
<html>
<body>
	
	<?php include('include/link.php');
        include('include/navbar.php');
    include('include/sidebar.php');
    ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
                
                <li class="active">Marks</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Marks</h1>
			</div>
		</div><!--/.row-->
		
		
<table width="1427" height="70" class="table">
  <thead class="thead-dark"></thead>
    <tr>
      <th width="139" scope="col">ID</th>
      <th width="209" scope="col">Student ID</th>
      <th width="71" scope="col">X Year</th>
      <th width="185" scope="col">X Percentage</th>
      <th width="250" scope="col">XII Year</th>
      <th width="181" scope="col">XII Percentage</th>
		
    </tr>
    <tbody>
	  <?php
	  $id=$_REQUEST['id'];
	  error_reporting(0);
	  $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	  $sql="select * from marks m,student s where m.stud_id=s.stud_id and m.stud_id='$id'";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
		  ?>
	  	<tr>
      		<td><?php echo $row['marks_id'];?></td>
      		<td><?php echo $row['stud_id'];?></td>
      		<td><?php echo $row['sslc_year'];?></td>
     		 <td><?php echo $row['sslc_per'];?></td>
     		 <td><?php echo $row['puc_year'];?></td>
     		 <td><?php echo $row['puc_per'];?></td>
           
			
    	</tr>
	  <?php
	  }
	  ?>
	  
	  
    
  </tbody>
</table>
       
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