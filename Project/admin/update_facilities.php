<html>
    <head>
        <title>Facilities</title>
    </head>
    <body>
        <?php
        
			$fac_id=$_POST['fac_id'];
            
            $fname=$_POST['fname'];
            $fdesc=$_POST['fdesc'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="update facilities set fname='$fname', fdesc='$fdesc' where fac_id='$fac_id'";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Updated");
            document.location="view_college.php";
        </script>
    </body>
</html>