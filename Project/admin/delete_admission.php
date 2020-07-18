<?php
	error_reporting(0);
	 $id=$_REQUEST['id'];
	 $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	 $sql="delete from admission where adm_id='$id'";
	 mysql_query($sql);
?>
<script>
	alert('values deleted');
	document.location='view_college.php';
</script>
