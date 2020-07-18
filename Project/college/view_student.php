<!DOCTYPE html>
<html>
<body>
       <link href="css1/bootstrap.min.css" rel="stylesheet" />	
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
                
                <li class="active">Student Details</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Student Details</h1>
			</div>
		</div><!--/.row-->
		
		
<table width="1427" height="70" class="table table-bordered" id="sample_1">
  <thead class="thead-dark" >
    <tr>
      
      <th width="150" scope="col">First Name</th>
      <th width="100" scope="col">Middle Name</th>
      <th width="150" scope="col">Last Name</th>
      <th width="200" scope="col">Email</th>
      <th width="150" scope="col">Contact</th>
      <th width="200" scope="col">Address</th>
      <th width="150" scope="col">Class X</th>
	  <th width="150" scope="col">Class XII</th>
    </tr>
      </thead>
    <tbody>
	  <?php
	  $id=$_REQUEST['id'];
	  error_reporting(0);
	  $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	  $sql="select * from student s, marks m where s.stud_id='$id' and s.stud_id=m.stud_id";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
		  ?>
	  	<tr>
      		
      		<td><?php echo $row['fname'];?></td>
      		<td><?php echo $row['mname'];?></td>
     		 <td><?php echo $row['lname'];?></td>
     		 <td><?php echo $row['email'];?></td>
     		 <td><?php echo $row['contact'];?></td>
     		 <td><?php echo $row['address'];?></td>
     		 <td><p>Year: <?php echo $row['sslc_year'];?></p><p>Score: <?php echo $row['sslc_per'];?> %</p></td>
            <td><p>Year: <?php echo $row['puc_year'];?></p><p>Score: <?php echo $row['puc_per'];?> %</p></td>
			
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
		
    
      <script src="js1/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js1/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js1/DT_bootstrap.js"></script>
   <script src="js1/dynamic-table.js"></script>
</body>
</html>