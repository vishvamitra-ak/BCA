<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
		
			$username=$_POST['username'];
            $hinta=$_POST['hinta'];
            $new_pass=$_POST['n_pass'];
			$new_pass2=$_POST['n2_pass'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="select * from login where username='$username'";
            $res=mysql_query($sql);
			$row=mysql_fetch_array($res);
			
			if($row['hinta']!=$hinta)
			{?>
				<script>
					alert("Hint Answer is wrong!");
					document.location="reset_pass.php";
				</script>
			<?php
			}
			else if($new_pass!=$new_pass2)
			{
				
				?>
					<script>
					alert("New Passwords do not match");
					document.location="reset_pass.php";
				</script>
			<?php
				}
				else
				{
					 $sql1="update login set password='$new_pass' where username='$username'";
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