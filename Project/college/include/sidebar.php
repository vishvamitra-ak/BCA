<body>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
			<?php
	  error_reporting(0);
	  $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	  $sql="select * from college where clg_email='$uname'";
	  $res=mysql_query($sql);
	  $row=mysql_fetch_array($res);
	  
	  ?>
				<div class="profile-usertitle-name"><?php echo $clg_name; ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="active"><a href="/college/index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <!--<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Insert <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					
					<li><a class="" href="/college/insert_college_course.php">
						<span class="fa fa-arrow-right">&nbsp;</span> College_Course
					</a></li>
                    <li><a class="" href="/college/insert_course.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Course
					</a></li>
                    <li><a class="" href="/college/insert_events.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Events
					</a></li>
                    <li><a class="" href="/college/insert_facilities.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Facilities
					</a></li>
                    
				</ul>
			</li>-->
           <!-- <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-navicon">&nbsp;</em> View <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="/college/view_admission.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Admission
					</a></li>
				<li><a class="" href="/college/view_college.php">
						<span class="fa fa-arrow-right">&nbsp;</span> College
					</a></li>
					<li><a class="" href="/college/view_college_course.php">
						<span class="fa fa-arrow-right">&nbsp;</span> College_Course
					</a></li>
                    <li><a class="" href="/college/view_course.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Course
					</a></li>
                    <li><a class="" href="/college/view_events.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Events
					</a></li>
                    <li><a class="" href="/college/view_facilities.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Facilities
					</a></li>
                    <li><a class="" href="/college/view_marks.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Marks
					</a></li>
                    <li><a class="" href="/college/view_student.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Student
					</a></li>
				</ul>
			</li>-->
			
			<li><a href="/college/view_admission.php"><em class="fa fa-clone">&nbsp;</em> Admissions</a></li>
			<li><a href="view_course"><em class="fa fa-clone">&nbsp;</em> Course</a></li>
			<li><a href="view_events.php"><em class="fa fa-clone">&nbsp;</em> Events</a></li>
			<li><a href="view_facilities"><em class="fa fa-clone">&nbsp;</em> Facilities</a></li>
			
			<li><a href="edit_college.php?id=<?php echo $uname;?>"><em class="fa fa-clone">&nbsp;</em> Edit Profile</a></li>
			<li><a href="change_pass.php"><em class="fa fa-clone">&nbsp;</em> Change Password</a></li>
			<li><a href="/login/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
</body>