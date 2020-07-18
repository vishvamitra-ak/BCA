<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
            $stud_id=$_POST['stud_id'];
            $sslc_year=$_POST['sslc_year'];
            $sslc_per=$_POST['sslc_per'];
            $puc_year=$_POST['puc_year'];
            $puc_per=$_POST['puc_per'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into marks values(null,'$stud_id','$sslc_year','$sslc_per','$puc_year','$puc_per')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="/admin/view_marks.php";
        </script>
    </body>
</html>