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
                <li class="active">View</li>
                <li class="active">Student</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Student  <a class="ins_btn" href="insert_student.php">INSERT</a></h1>
			</div>
		</div><!--/.row-->
		
		
<table width="1427" height="73" class="table table-bordered" id="sample_1">
  <thead class="thead-dark" >
    <tr>
      <th width="139" scope="col">Student ID</th>
      <th width="209" scope="col">First Name</th>
      <th width="71" scope="col">Middle Name</th>
      <th width="185" scope="col">Last Name</th>
      <th width="250" scope="col">Email</th>
      <th width="181" scope="col">Contact</th>
      <th width="167" scope="col">Address</th>
      
	  
	  		<th width="150">Class X</th>
		<th width="150">Class XII</th>
		<th width="200"></th>
		<th width="150"></th>

		
    </tr>
      </thead>
    <tbody>
	  <?php
	  error_reporting(0);
	  $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	  $sql="select * from student s,login l,marks m where s.email=l.username and m.stud_id=s.stud_id";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
		  ?>
	  	<tr>
      		<td><?php echo $row['stud_id'];?></td>
      		<td><?php echo $row['fname'];?></td>
      		<td><?php echo $row['mname'];?></td>
     		 <td><?php echo $row['lname'];?></td>
     		 <td><?php echo $row['email'];?></td>
     		 <td><?php echo $row['contact'];?></td>
     		 <td><?php echo $row['address'];?></td>
			 
			 <td>Year:    <?php echo $row['sslc_year'];?> Score: <?php echo $row['sslc_per'];?> %</td>
     		 
     		 <td>Year: <?php echo $row['puc_year'];?> Score: <?php echo $row['puc_per'];?> %</td>
     		 
     		  
            <td><a class="ed_btn" href="edit_student.php?id=<?php echo $row[stud_id];?>">EDIT</a></td>
			<td><a class="del_btn" onClick="return confirm('Are you sure?');" href="delete_student.php?id=<?php echo $row[stud_id];?>">DELETE</a></td>
			
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