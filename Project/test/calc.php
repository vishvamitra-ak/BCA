<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <h3>Result</h3>
        <?php
            $a=$_POST['n1'];
            $b=$_POST['n2'];
            $op=$_POST['op'];
            switch($op)
            {
                case 'add':echo "$a+$b=".($a+$b)."<br>";
                           break;
                case 'sub':echo "$a-$b=".($a-$b)."<br>";
                           break;
                case 'mul':echo "$a*$b=".($a*$b)."<br>";
                           break;
                case 'div':if($b!=0)
                                echo "$a/$b=".($a/$b)."<br>";
                           else
                                echo "Denominator can not be zero";
            }
        ?>
    </body>
</html>