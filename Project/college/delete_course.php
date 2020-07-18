<?php
	 $id=$_REQUEST['id'];
	 $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	 $sql="delete from course where course_id='$id'";
	 mysql_query($sql);
?>
<script>
	alert('Course deleted');
	document.location='view_course.php';
</script>
