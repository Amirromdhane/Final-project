<!doctype html>
 <?php
session_start(); 
?>

<?php
$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("webproject");
if(isset($_POST['submit2'])){
$name = $_POST['name2'];
$lastname = $_POST['lastname2'];
$username = $_POST['username2'];
$password = $_POST['password2'];
$query = mysql_query($req="insert into users (name, lastname, username, password) values ('$name', '$lastname', '$username', '$password')");
//session_start();
$_SESSION["username"] = $username;
//echo ""+$_SESSION["username"]+"";
}
mysql_close($connection); 
?>

<?php 
$user=$_SESSION["username"];
$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("webproject");
$sql1=mysql_query("select * from users where username='$user'");
$row=mysql_fetch_array($sql1);
echo "Bonjour "; echo $_SESSION["username"];    
?>
<html>
<head>
<meta charset="utf-8">
<title>courses</title>
<link href="css/styles.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<script>
$(document).ready(function(){

        $("#b2").click(function(){
        $(".all").hide();
        $(".nodettr").fadeIn("slow");
});

        $("#b1").click(function(){
        $(".all").hide();
        $(".angularttr").fadeIn("slow");
});
            $("#b3").click(function(){
        $(".all").hide();
        $(".rubyttr").fadeIn("slow");
    });

});
</script>

</head>
<script>
function openNav() {
    
    if (document.getElementById("slide").checked) {
      document.getElementById("coursePage").style.marginRight = "230px";}
    else{
    document.getElementById("coursePage").style.marginRight= "0";}
    }
</script>

<input type="checkbox" id="slide" onchange="openNav()" />
<div class="slideright">
  <nav class="sidebar">
    <ul>
      <br>
      <li>  <img src="photo/<?php echo $row['photo']; ?>" class="img-thumbnail" width="100"/> </li> 
      <li> <?php echo $row['name']; ?> </li> 
      <li> <?php echo $row['lastname']; ?> </li> 
       <li class="logout">
         <a class="page-scroll logout" href="logout.php">Log out   <i class="fa fa-sign-out"></i></a>
      </li>
    </ul>
  </nav>
</div>
<body id="coursePage" > 



<nav id="Nav" class="navbar navbar-default navbar-fixed-top container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navb"> <span class="sr-only">Toggle navigation   </span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                       <span class="icon-bar"></span> </button>
    <a class="navbar-brand page-scroll" href="indexFinal.php">SkyFall</a> </div>
  <div class="collapse navbar-collapse" id="navb">
    <ul class="nav navbar-nav navbar-right">
     
      <li>
         <a class="page-scroll" href="architecture.php">architectures</a>
      </li>
      <li>
         <a class="page-scroll" href="sites.php">WebSites</a>
      </li>
      <li>
         <a class="page-scroll" href="editors.php">editors</a>
      </li>
      <li>
         <a class="page-scroll" href="courses.php">Our courses</a>
      </li>

      <li>
      <label for="slide"><img src="photo/<?php echo $row['photo'];?>" class="user thumbnail"></label>
      </li>
    </ul>
  </div>
</nav>
<!--
<section class="course0">
  <div class="row"> 
      <div class="col-sm-3 "> <img class="imgTeam" src="img/team11.jpg" alt=""/></div>
      <div class="col-sm-3"> 
        <BUTTON  class="btn btnForm" style=" border-radius: 100px; width:40%; height:30px;">JAVASCRIPT</BUTTON>
        <P >Angular JS</P>
        <BUTTON class="btn btnForm" style=" border-radius: 100px; width:50%; height:50px;">Resume Course</BUTTON>
      </div>
  </div>
</section> -->
<section class="course02">
  	<div class="row">
       <div class="col-md-4"  style="">
    		<img src="img/web_dev.png" width="300" style="" alt="">
      </div>
        <div class="col-md-8 col-sm-12 " >
        <div  class="titleCourse titreshodow" >THIS PAGE IS UNDER CONSTRUCTION</div>
        
      </div> 
    </div>
</section>




<section   id="course3" style="padding:40px">
    <div class="row ">
        <div class="col-sm-5  logout  " style="text-align:center"><img src="img/.jpg"  style="img-thumbnail" alt=""></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2"> </p>
      </div>
      <hr >

   
</section>

<FOOTER class="footer2">
<DIV style=""> LET'S BUILD TOGETHER </DIV> 
</FOOTER>
</body>
</html>