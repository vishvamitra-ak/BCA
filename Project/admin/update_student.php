<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
        error_reporting(0);
			$stud_id=$_POST['stud_id'];
			$marks_id=$_POST['marks_id'];
            $fname=$_POST['fname'];
            $mname=$_POST['mname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $contact=$_POST['contact'];
            $addr=$_POST['addr'];
            $edu=$_POST['edu'];
			
			$sslc_year=$_POST['sslc_year'];
            $puc_year=$_POST['puc_year'];
            $sslc_per=$_POST['sslc_per'];
            $puc_per=$_POST['puc_per'];
			
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
			
            $sql="update student set fname='$fname', mname='$mname', lname='$lname', email='$email', contact='$contact', address='$addr', edu_qual='$edu' where stud_id='$stud_id'";
            mysql_query($sql);
			$sql1="update marks set sslc_year='$sslc_year', sslc_per='$sslc_per', puc_year='$puc_year', puc_per='$puc_per' where marks_id='$marks_id'";
            mysql_query($sql1);
			
        ?>
        <script>
            alert("Values Updated");
            document.location="view_student.php";
        </script>
    </body>
</html>