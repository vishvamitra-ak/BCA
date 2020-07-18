<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
            $course_name=$_POST['course_name'];
            $course_desc=$_POST['course_desc'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into course values(null,'$course_name','$course_desc')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="/table_view/view_course.php";
        </script>
    </body>
</html>