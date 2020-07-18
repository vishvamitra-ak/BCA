<html>
    <head>
        <title>ss</title>
    </head>
    <body>
	<?php include('include/link.php');
        
    ?>
        <?php
		
            $em=$uname;
            $course_id=$_REQUEST['id'];
            $apply_date=date("Y/m/d");
            $upload_details="Pending";
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
			$sql1="select * from student where email='$em'";
			$res1=mysql_query($sql1);
			$row1=mysql_fetch_array($res1);
			$stud_id=$row1['stud_id'];
			
            $sql="insert into admission values(null,'$stud_id','$course_id','$apply_date','$upload_details')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="view_admission.php";
        </script>
    </body>
</html>