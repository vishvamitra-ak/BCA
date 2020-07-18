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
            $contact=$_POST['contact'];
            $addr=$_POST['addr'];
            $edu=$_POST['edu'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into student values(null,'$fname','$mname','$lname','$email','$contact','$addr','$edu')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="/admin/view_student.php";
        </script>
    </body>
</html>