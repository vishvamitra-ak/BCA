<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
            $sy=$_POST['sy'];
            $sp=$_POST['sp'];
            $py=$_POST['py'];
            $pp=$_POST['pp'];
            
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into marks values(null,null,'$sy','$sp','$py','$pp')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="dbtest_marks.html";
        </script>
    </body>
</html>