<html>
    <head>
        <title>ss</title>
    </head>
    <body>
        <?php
            $stud_rno=$_POST['rno'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('college',$con);
            $sql="select * from student where stud_rno=$stud_rno";
            echo mysql_query($sql);
        ?>
    </body>
</html>