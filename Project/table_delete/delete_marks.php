<?php
	 $id=$_REQUEST['id'];
	 $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	 $sql="delete from marks where marks_id='$id'";
	 mysql_query($sql);
?>
<script>
	alert('values deleted');
	document.location='/table_view/view_marks.php';
</script>
