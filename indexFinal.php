<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>acceuil</title>
<link href="css/styles.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>

<body id="toop">
<nav id="Nav" class="navbar navbar-default navbar-fixed-top container-fluid">
	 <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navb">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#toop">SkyFall</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navb">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="courses.html">Our Courses</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Our team</a>
                    </li>
                      <li>
                        <a class="page-scroll" href="#login">LOG IN</a>
                    </li>
                </ul>
            </div>
</nav>
<header>
  <div class="headerIn" style="color: white; text-shadow: 2px 2px 4px #000000;">
    <div >LEARN CODE AND GET A JOB </div>
    <div>CHANGE YOUR LIFE.</div><hr width="50px" >
  <a  href="#login">  <button type="button" class=" float btnHeader btnForm" style="margin:20px!important;width:100px!important;">                        LOG IN
</button></a>
  </div>
</header>
<section></section>

<!-- SECTION: Team
		================================================== -->
<section class="bloc4" id="team"> 
  <div class="container">
    <div class="">
      <h2  >Our team</h2>
    </div>
    <div class="row" >
      <div class="col-sm-6 teamItem"> <img class="imgTeam" src="img/team11.jpg" alt=""/>
        <p class="teamName">Baha Eddine Ferchichi</p>
        <p >Co-Founder @ Google</p>
      </div>
      <div class="col-sm-6 teamItem"> <img class="imgTeam" src="img/team22.jpg" alt=""/>
        <p class="teamName">Amir Romdhane</p>
        <p >CEO @ Apple</p>
      </div>
    </div>
  </div>
</section>

<section></section>

<section class="bloc3 " id="login" > 
  <!-- SECTION: Register
		================================================== -->
  <div class="container">
    <h2  style="color: #fff;">Register now</h2>
    <p style="margin-top:20px;margin-bottom:30px; color:#fff">ti 7asilou logi in wala register now</p>
    <div class="row" >
      <form id="form1" method="post" class="">
        <div class="col-sm-3">
          <input name="name" id="name" type="text" class="inputForm" placeholder="ID" required>
        </div>
        <div class="col-sm-3">
          <input name="password" id="password" class="inputForm" type="password" placeholder="password" required>
        </div>
        <div class="col-sm-3">
          <input type="submit" class="btn btnForm " name="submit" value="LOG IN"/>
        </div>
        <div class="col-sm-3">
          <input type="button" class="btn btnForm " name="submit2" id="myBtn" value="REGISTER NOW!"/>
        </div>
      </form>
    </div>
  </div>
  
  <?php
$name =$_POST['name'];
$lastname =$_POST['lastname'];
$username =$_POST['username'];
$password =$_POST['password'];

mysql_connect("localhost","root","");
mysql_select_db("webproject");

$req="insert into users(name,lastname,username,password) values('$name','$lastname','$username','$password')";
$res=mysql_query($req);
if ($res==true) echo "Report sent";else echo "Error accured";
?>
<?php
$username =$_POST['username'];
$password =$_POST['password'];
mysql_connect("localhost","root","");
mysql_select_db("webproject");
$req="select * from users where (username='$username') and (password='$password')";
$res=mysql_query($req);
if (mysql_num_rows($res) == 0) {
    echo "wrong username or password ";
    exit;


?>
  <!----- -->
  
  <div id="myModal" class="modal"> 
    
    <!-- Modal content -->
    <div class="modal-content"> <span class="close">x</span>
      <p>Register here </p>
      <form>
        <input type="text" class="inputForm" placeholder="Name" name="name">
        <br>
        <input type="text" class="inputForm" placeholder="Last name" name="lastname">
        <br>
        <input type="text" class="inputForm" placeholder="ID" name="username">
        <br>
        <input type="password" class="inputForm" placeholder="password" name="password">
        <br>
        <input type="submit" class="btn btnForm " name="submit" value="REGISTER"/>
        <br>
      </form>
    </div>
  </div>
  <?php
  ?>
  <!----- --> 
  
</section>
<script> 
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
<!-- ================================================== -->
<section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.488357161279!2d10.636119415262373!3d35.81249208016386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1302756a7452317b%3A0xfe8bdcb107b21c72!2sInstitut+Sup%C3%A9rieur+des+Sciences+Appliqu%C3%A9es+et+de+Technologie+de+Sousse!5e0!3m2!1sfr!2s!4v1461086634783" height="350" width="100%" style="pointer-events: none; border:none;"></iframe>
</section>
<footer>
  <div>"dynamic quotes " -Dr.flen</div>
</footer>
</body>
</html>
