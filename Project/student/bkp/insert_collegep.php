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
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into college values(null,'$clg_name','$clg_city','$clg_univ','$clg_email','$clg_contact','$clg_website','$clg_addr')";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Inserted");
            document.location="/admin/view_college.php";
        </script>
    </body>
</html>