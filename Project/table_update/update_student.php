<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
        error_reporting(0);
			$stud_id=$_POST['stud_id'];
            $fname=$_POST['fname'];
            $mname=$_POST['mname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $contact=$_POST['contact'];
            $addr=$_POST['addr'];
            $edu=$_POST['edu'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="update student set fname='$fname', mname='$mname', lname='$lname', email='$email', contact='$contact', address='$addr', edu_qual='$edu' where stud_id='$stud_id'";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Updated");
            document.location="/table_view/view_student";
        </script>
    </body>
</html>