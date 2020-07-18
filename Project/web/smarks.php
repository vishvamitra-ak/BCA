<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
			
            $id=$_REQUEST['id'];
            $sslc_year=$_REQUEST['sy'];
           $sslc_per=$_REQUEST['sp'];
            $puc_year=$_REQUEST['py'];
            $puc_per=$_REQUEST['pp'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
			
			$sql1="select * from student where email='$id'";
			$res1=mysql_query($sql1);
			$row1=mysql_fetch_array(res1);
			$stud_id=$row1['stud_id'];
			
            $sql="insert into marks values(null,'$stud_id','$sslc_year','$sslc_per','$puc_year','$puc_per')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="index.php";
        </script>
    </body>
</html>