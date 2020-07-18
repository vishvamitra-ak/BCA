<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
        error_reporting(0);
			$course_id=$_POST['course_id'];
            $course_name=$_POST['course_name'];
            $course_desc=$_POST['course_desc'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="update course set course_name='$course_name', course_desc='$course_desc' where course_id='$course_id'";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Updated");
            document.location="/table_view/view_course.php";
        </script>
    </body>
</html>