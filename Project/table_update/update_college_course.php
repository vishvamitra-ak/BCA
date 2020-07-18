<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
        error_reporting(0);
			$clg_course_id=$_POST['clg_course_id'];
            $course_id=$_POST['course_id'];
            $clg_id=$_POST['clg_id'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="update college_course set course_id='$course_id', clg_id='$clg_id' where clg_course_id='$clg_course_id'";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Updated");
            document.location="/table_view/view_college_course.php";
        </script>
    </body>
</html>