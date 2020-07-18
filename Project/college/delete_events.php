<?php
	 $id=$_REQUEST['id'];
	 $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	 $sql="delete from events where events_id='$id'";
	 mysql_query($sql);
?>
<script>
	alert('Event deleted');
	document.location='view_events.php';
</script>
