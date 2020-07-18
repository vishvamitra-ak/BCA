<?php
	 $id=$_REQUEST['id'];
	 $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	 $sql="delete from facilities where fac_id='$id'";
	 mysql_query($sql);
?>
<script>
	alert('Facility deleted');
	document.location='view_facilities.php';
</script>
