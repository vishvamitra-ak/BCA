<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
            $stud_name=$_POST['name'];
            $stud_rno=$_POST['rno'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('college',$con);
            $sql="insert into student values(null,'$stud_rno','$stud_name')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="db.html";
        </script>
    </body>
</html>