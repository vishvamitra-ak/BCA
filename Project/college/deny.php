<html>
    <head>
        <title>Deny</title>
    </head>
    <body>
        <?php
		
        error_reporting(0);
			$adm_id=$_REQUEST['id'];
			
            $con=mysql_connect('localhost','root','xyzzy');
            mysql_select_db('project_test',$con);
            $sql="update admission set upload_details='Denied' where adm_id='$adm_id'";
            mysql_query($sql);
			
			$sql2="select * from admission a, student s where a.adm_id='$adm_id' and a.stud_id=s.stud_id";
			$res2=mysql_query($sql2);
			$row2=mysql_fetch_array(res2);
			$mobile=$row2['contact'];
			$name=$row2['fname'];
			$name2=$row2['lname'];
			$msg="Hello,+".$name."+ +".$name2."+, Your admission has been denied+";
			$data=urlencode($msg);
			$smsurl="http://123.108.46.12/API/WebSMS/Http/v1.0a/index.php?username=Urneeds&password=studneeds&sender=URNEED&to=$mobile&message=$msg";
			$content=file_get_contents($smsurl);
        ?>
        <script>
            alert("Admission Denied");
            document.location="/college/view_admission.php";
        </script>
    </body>
</html>