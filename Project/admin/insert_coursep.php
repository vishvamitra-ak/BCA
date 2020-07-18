<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
			$clg_id=$_POST['clg_id'];
			$fees=$_POST['fees'];
            $course_name=$_POST['course_name'];
            $course_desc=$_POST['course_desc'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into course values(null,'$clg_id','$course_name','$course_desc','$fees')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="view_college.php";
        </script>
    </body>
</html>