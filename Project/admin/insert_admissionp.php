<html>
    <head>
        <title>Admission</title>
    </head>
    <body>
        <?php
            $stud_id=$_POST['stud_id'];
            $course_id=$_POST['course_id'];
            $apply_date=$_POST['apply_date'];
            $upload_details=$_POST['upload_details'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into admission values(null,'$stud_id','$course_id','$apply_date','$upload_details')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="view_college.php";
        </script>
    </body>
</html>