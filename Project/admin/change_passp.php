<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
		include('include/link.php');
			
            $pass=$_POST['c_pass'];
            $new_pass=$_POST['n_pass'];
			$new_pass2=$_POST['n2_pass'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="select * from login where username='$uname'";
            $res=mysql_query($sql);
			$row=mysql_fetch_array($res);
			
			if($row['password']!=$pass)
			{?>
				<script>
					alert("Current Password is wrong!");
					document.location="change_pass.php";
				</script>
			<?php
			}
			else if($new_pass!=$new_pass2)
			{
				
				?>
					<script>
					alert("New Passwords do not match");
					document.location="change_pass.php";
				</script>
			<?php
				}
				else
				{
					 $sql1="update login set password='$new_pass' where username='$uname'";
					mysql_query($sql1);
					?>
					<script>
					alert("Password changed!");
					document.location="index.php";
				</script>
			<?php
				}
			
			
        ?>
        <script>
            alert("Password Changed!");
            document.location="index.php";
        </script>
    </body>
</html>