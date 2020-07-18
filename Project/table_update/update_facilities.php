<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
        error_reporting(0);
			$fac_id=$_POST['fac_id'];
            $clg_id=$_POST['clg_id'];
            $fname=$_POST['fname'];
            $fdesc=$_POST['fdesc'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="update facilities set clg_id='$clg_id', fname='$fname', fdesc='$fdesc' where fac_id='$fac_id'";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Updated");
            document.location="/table_view/view_facilities.php";
        </script>
    </body>
</html>