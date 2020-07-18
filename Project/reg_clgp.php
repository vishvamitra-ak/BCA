<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
            $clg_name=$_POST['clg_name'];
            $clg_city=$_POST['clg_city'];
            $clg_univ=$_POST['clg_univ'];
            $clg_email=$_POST['clg_email'];
            $clg_contact=$_POST['clg_contact'];
            $clg_addr=$_POST['clg_addr'];
            $clg_website=$_POST['clg_website'];
			
			$password=$_POST['password'];
			$hintq=$_POST['hintq'];
			$hinta=$_POST['hinta'];
			
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into college values(null,'$clg_name','$clg_city','$clg_univ','$clg_email','$clg_contact','$clg_website','$clg_addr')";
            mysql_query($sql);
			$sql1="insert into login values('$clg_email','$password','college','$hintq','$hinta')";
            mysql_query($sql1);
        ?>
        <script>
            alert("Account Created!");
            document.location="index.php";
        </script>
    </body>
</html>