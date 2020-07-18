<html>
    <head>
        <title>Events</title>
    </head>
    <body>
        <?php
        error_reporting(0);
			$events_id=$_POST['events_id'];
            $clg_id=$_POST['clg_id'];
            $event_name=$_POST['event_name'];
            $event_date=$_POST['event_date'];
            $event_details=$_POST['event_details'];
            $event_contact=$_POST['event_contact'];
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="update events set clg_id='$clg_id', event_name='$event_name', event_date='$event_date', event_details='$event_details', event_contact='$event_contact' where events_id='$events_id'";
            mysql_query($sql);
        ?>
        <script>
            alert("Values Updated");
            document.location="view_events.php";
        </script>
    </body>
</html>