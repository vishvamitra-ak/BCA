<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
        error_reporting(0);
			$adm_id=$_POST['adm_id'];
            $stud_id=$_POST['stud_id'];
            $clg_id=$_POST['clg_id'];
            $apply_date=$_POST['apply_date'];
            $upload_details=$_POST['upload_details'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="update admission set stud_id='$stud_id', clg_id='$clg_id', apply_date='$apply_date', upload_details='$upload_details' where adm_id='$adm_id'";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Updated");
            document.location="/table_view/view_admission";
        </script>
    </body>
</html>