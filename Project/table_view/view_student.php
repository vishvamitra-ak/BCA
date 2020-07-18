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
<table width="1427" height="700">
  <tbody>
    <tr>
      <th width="139" scope="col">Student ID</th>
      <th width="209" scope="col">First Name</th>
      <th width="71" scope="col">Middle Name</th>
      <th width="185" scope="col">Last Name</th>
      <th width="250" scope="col">Email</th>
      <th width="181" scope="col">Contact</th>
      <th width="167" scope="col">Address</th>
      <th width="173" scope="col">Edu Qualification</th>
		<th width="150"></th>
		<th width="150"></th>
    </tr>
	  <?php
	  error_reporting(0);
	  $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	  $sql="select * from student";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
		  ?>
	  	<tr>
      		<td><?php echo $row['stud_id'];?></td>
      		<td><?php echo $row['fname'];?></td>
      		<td><?php echo $row['mname'];?></td>
     		 <td><?php echo $row['lname'];?></td>
     		 <td><?php echo $row['email'];?></td>
     		 <td><?php echo $row['contact'];?></td>
     		 <td><?php echo $row['address'];?></td>
     		 <td><?php echo $row['edu_qual'];?></td>
            <td><a class="ed_btn" href="/table_edit/edit_student.php?id=<?php echo $row[stud_id];?>">EDIT</a></td>
			<td><a class="del_btn" onClick="return confirm('Are you sure?');" href="/table_delete/delete_student.php?id=<?php echo $row[stud_id];?>">DELETE</a></td>
			
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