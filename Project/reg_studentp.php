<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
		
            $fname=$_POST['fname'];
            $mname=$_POST['mname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
			$em=$_POST['email'];
            $contact=$_POST['contact'];
            $addr=$_POST['addr'];
            
			$sslc_year=$_POST['sslc_year'];
            $sslc_per=$_POST['sslc_per'];
            $puc_year=$_POST['puc_year'];
            $puc_per=$_POST['puc_per'];
			
			
			$password=$_POST['password'];
           $hintq=$_POST['hintq'];
			$hinta=$_POST['hinta'];
            
			
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
			
            $sql="insert into student values(null,'$fname','$mname','$lname','$email','$contact','$addr')";
            mysql_query($sql);
			
			
			
			$sql1="insert into login values('$email','$password','student','$hintq','$hinta')";
            mysql_query($sql1);
			
			
			$sql2="select * from student where email='$email'";
			$res2=mysql_query($sql2);
			$row2=mysql_fetch_array($res2);
			$stud_id=$row2['stud_id'];
			
            $sql3="insert into marks values(null,'$stud_id','$sslc_year','$sslc_per','$puc_year','$puc_per')";
            mysql_query($sql3);
			
        ?>
        <script>
            alert("Account Created!");
            document.location="index.php";
        </script>
    </body>
</html>