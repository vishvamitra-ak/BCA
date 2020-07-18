<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
        error_reporting(0);
			$marks_id=$_POST['marks_id'];
            $stud_id=$_POST['stud_id'];
            $sslc_year=$_POST['sslc_year'];
            $sslc_per=$_POST['sslc_per'];
            $puc_year=$_POST['puc_year'];
            $puc_per=$_POST['puc_per'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="update marks set stud_id='$stud_id', sslc_year='$sslc_year', sslc_per='$sslc_per', puc_year='$puc_year', puc_per='$puc_per' where marks_id='$marks_id'";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Updated");
            document.location="/table_view/view_marks.php";
        </script>
    </body>
</html>