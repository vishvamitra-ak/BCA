<html>
    <head>
        <title>Events</title>
    </head>
    <body>
        <?php
            $clg_id=$_POST['clg_id'];
            $event_name=$_POST['event_name'];
            $event_date=$_POST['event_date'];
            $event_details=$_POST['event_details'];
            $event_contact=$_POST['event_contact'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="insert into events values(null,'$clg_id','$event_name','$event_date','$event_details','$event_contact')";
            mysql_query($sql);
        ?>
        <script>
            alert("Event Added");
            document.location="view_events.php";
        </script>
    </body>
</html>