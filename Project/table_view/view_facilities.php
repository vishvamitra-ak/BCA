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
      <th width="139" scope="col">ID</th>
      <th width="209" scope="col">College ID</th>
      <th width="71" scope="col">Name</th>
      <th width="185" scope="col">Description</th>
		<th width="150"></th>
		<th width="150"></th>
    </tr>
	  <?php
	  error_reporting(0);
	  $con=mysql_connect('localhost','root','xyzzy');
	  mysql_select_db('project_test',$con);
	  $sql="select * from facilities";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
		  ?>
	  	<tr>
      		<td><?php echo $row['fac_id'];?></td>
      		<td><?php echo $row['clg_id'];?></td>
      		<td><?php echo $row['fname'];?></td>
     		 <td><?php echo $row['fdesc'];?></td>
            <td><a class="ed_btn" href="/table_edit/edit_facilities.php?id=<?php echo $row[fac_id];?>">EDIT</a></td>
			<td><a class="del_btn" onClick="return confirm('Are you sure?');" href="/table_delete/delete_facilities.php?id=<?php echo $row[fac_id];?>">DELETE</a></td>
			
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