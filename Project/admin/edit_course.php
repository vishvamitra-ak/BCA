<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!--<link rel="stylesheet" href="/res/css/edit_bootstrap.css">
    <link rel="stylesheet" href="/res/css/navbar.css">-->
	<link rel="stylesheet" href="/res/css/edit_styles.css">
	<script src="/res/js/edit_bootstrap.js"></script>
	<script src="/res/js/edit_jquery.js"></script>
	<script src="/res/js/edit_scripts.js"></script>
</head>
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
                <li class="active">Edit</li>
                <li class="active">Course</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Course</h1>
			</div>
		</div><!--/.row-->
    
    <?php
		$id=$_REQUEST['id'];
	  error_reporting(0);
	  $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	  $sql="select * from course where course_id='$id'";
	  $res=mysql_query($sql);
	  $row=mysql_fetch_array($res);
		  ?>
	
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
                            <h2>EDIT</h2>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="post" action="update_course.php" role="form" style="display: block;">
                                    <input type="hidden" name="course_id" id="hiddenField" value="<?php echo $row['course_id']; ?>">
                                    <label>Course Name </label>
									<div class="form-group">
										<input type="text" name="course_name" id="email" tabindex="1" class="form-control" placeholder="Course Name" required value="<?php echo $row['course_name'];?>">
									</div>
                                    <label>Course Description</label>
                                    <div class="form-group">
										<input type="text" name="course_desc" id="email" tabindex="1" class="form-control" placeholder="Course Description" required value="<?php echo $row['course_desc'];?>">
									</div>
									<label>Fees</label>
                                    <div class="form-group">
										<input type="text" name="fees" id="email" tabindex="1" class="form-control" placeholder="Course Description" required value="<?php echo $row['fees'];?>">
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
</div>

	
</body>
</html>