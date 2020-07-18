<html>
    <head>
        <title>Marks</title>
    </head>
    <body>
        <?php
            $marks=$_POST['marks'];
            $per=($marks/700)*100;
            if($per<35.0)
                $res="Fail";
            else
            {
                if($per<70.0)
                    $res="First Class";
                else
                    $res="Distinction";
            }   
            echo "<p>"."Percentage= ".$per."</p>"."<p>"."Result : ".$res;
        ?>
    </body>
</html>