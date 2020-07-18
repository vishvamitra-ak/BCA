<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
            $clg_id=$_POST['clg_id'];
            $fname=$_POST['fname'];
            $fdesc=$_POST['fdesc'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into facilities values(null,'$clg_id','$fname','$fdesc')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="view_college.php";
        </script>
    </body>
</html>