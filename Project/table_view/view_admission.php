<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/res/css/view.css">
    <link rel="stylesheet" type="text/css" href="/res/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="/vendor/css/grid.css">
    <link rel="stylesheet" type="text/css" href="/vendor/css/normalize.css">
<title>Untitled Document</title>
</head>

<body>
    
    <header><div class="content">
    <div class="navbar">
    <a class="active" href="/">Home</a>
    <a href="/admin">Admin</a>
  
        </div></div>
    </header>
  
<div class="content">
<table width="1427" height="73">
  <tbody>
    <tr>
      <th width="139" scope="col">Admission ID</th>
      <th width="209" scope="col">Student ID</th>
      <th width="71" scope="col">College ID</th>
      <th width="185" scope="col">Application Date</th>
      <th width="250" scope="col">Upload Details</th>
		<th width="150"></th>
		<th width="150"></th>
    </tr>
	  <?php
	  error_reporting(0);
	  $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	  $sql="select * from admission";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
		  ?>
	  	<tr>
      		<td><?php echo $row['adm_id'];?></td>
      		<td><?php echo $row['stud_id'];?></td>
      		<td><?php echo $row['clg_id'];?></td>
     		 <td><?php echo $row['apply_date'];?></td>
     		 <td><?php echo $row['upload_details'];?></td>
            <td><a class="ed_btn" href="/table_edit/edit_admission.php?id=<?php echo $row[adm_id];?>">EDIT</a></td>
			<td><a class="del_btn" onClick="return confirm('Are you sure?');" href="/table_delete/delete_admission.php?id=<?php echo $row[adm_id];?>">DELETE</a></td>
			
    	</tr>
	  <?php
	  }
	  ?>
    
  </tbody>
</table>
        </div>
    <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>