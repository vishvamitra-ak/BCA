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
                
                <li class="active">Admissions</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Admissions</h1>
			</div>
		</div><!--/.row-->
		
		
<table width="1427" height="73" class="table table-bordered" id="sample_1">
  
      <thead class="thead-dark">
    <tr>
      
      <th width="210" scope="col">Student</th>
      <th width="100" scope="col">Course</th>
      <th width="100" scope="col">Application Date</th>
      <th width="100" scope="col">Application Status</th>
	  
		<th width="150">Details</th>
		<th width="250" scope="col">Modify Status</th>
    </tr>
        </thead>
    <tbody>
	  <?php
	  error_reporting(0);
	  $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	  $sql="select * from admission ad,student s,college c,course co where ad.stud_id=s.stud_id and c.clg_email='$uname' and ad.course_id=co.course_id and c.clg_id=co.clg_id";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
		  ?>
	  	<tr>
      		
      		<td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
      		<td><?php echo $row['course_name'];?></td>
     		 <td><?php echo $row['apply_date'];?></td>
     		 <td><?php echo $row['upload_details'];?></td>
           
			<td><a class="ed_btn" href="view_student.php?id=<?php echo $row[stud_id];?>">Student Details</a></td>
			 <td><a class="ins_btn" href="approve.php?id=<?php echo $row[adm_id];?>">Approve</a>     <a class="del_btn" href="deny.php?id=<?php echo $row[adm_id];?>">Deny</a></td>
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