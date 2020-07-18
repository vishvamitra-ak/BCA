<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
            $course_id=$_POST['course_id'];
            $clg_id=$_POST['clg_id'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into college_course values(null,'$course_id','$clg_id')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="/table_view/view_college_course.php";
        </script>
    </body>
</html>