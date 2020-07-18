<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <?php
            $name=$_POST['name'];
            $rno=$_POST['rno'];
            $addr=$_POST['addr'];
        
            echo "Name is ";echo $name."<br>";
            echo "Roll No is ";echo $rno."<br>";
            echo "Address is ";echo $addr."<br>";
        ?>
    </body>
</html>