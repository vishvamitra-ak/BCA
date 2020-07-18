<html>
    <head>
        <title>Course</title>
    </head>
    <body>
        <?php
			$clg_id=$_POST['clg_id'];
            $course_name=$_POST['course_name'];
            $course_desc=$_POST['course_desc'];
			$fees=$_POST['fees'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into course values(null,'$clg_id','$course_name','$course_desc','$fees')";
            mysql_query($sql);
			
        ?>
        <script>
            alert("Values Inserted");
            document.location="view_course.php";
        </script>
    </body>
</html>