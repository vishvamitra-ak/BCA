<html>
    <head>
        <title>Marks</title>
         <link rel="stylesheet" type="text/css" href="/res/css/reg.css">
        <link rel="stylesheet" type="text/css" href="/res/css/navbar.css">
    </head>
    <body>
  <div class="content">
    <div id="navbar">
  <a class="active" href="/">Home</a>
    <a href="/admin">Admin</a>
  
</div>
        <div class="bg-img">
        <form action="/test/dbtest_student.php" method="post">
            <div class="container">
                <h1 style="text-align: center">Register</h1>
                <hr>
                <label>First Name </label>
                <input type="text" placeholder="First Name" name="fname" required>
                <label>Middle Name</label>
                <input type="text" placeholder="Middle Name" name="mname" required>
                <label>Last Name</label>
                <input type="text" placeholder="First Name" name="lname" required>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                <label>Contact</label>
                <input type="text" placeholder="Contact" name="contact" required>
                <label>Address</label>
                <textarea name="addr" >Address</textarea><br>
                <label>Education</label>
                <input type="text" placeholder="Education" name="edu" required>
                <hr>
            <button type="submit" class="registerbtn">Register</button>
            </div>			
         </form>
            </div>
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