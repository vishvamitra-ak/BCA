<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
            $stud_id=$_POST['stud_id'];
            $clg_id=$_POST['clg_id'];
            $apply_date=$_POST['apply_date'];
            $upload_details=$_POST['upload_details'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into admission values(null,'$stud_id','$clg_id','$apply_date','$upload_details')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="/table_view/view_admission.php";
        </script>
    </body>
</html>