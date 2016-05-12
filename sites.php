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
 <!-- <br><br><br><br><br><br><br> -->
 



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
       <div class="col-md-4  "  style="">
    		<img src="img/web_dev.png" width="300" style="" alt="">
      </div>
        <div class="col-md-8 col-sm-12 " >
        <div  class="titleCourse titreshodow" >More than 91,981,022 jobs are waiting! learn here and get a job</div>
        
      </div> 
    </div>
</section>




<section   id="course3" style="padding:40px">
    <div class="row ">
        <div class="col-sm-5  logout  " style="text-align:center"><img src="img/Skillcrush.jpg"  style="img-thumbnail" alt=""></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2"> Skillcrush offers professional web design and development courses aimed at one who is interested in the field, regardless of their background — with short, easy-to-consume modules and a 3-month Career Blueprints to help students focus on their career priorities.</p>
      </div>
      <hr >

    </div>
        <hr >

        <div class="row ">
        <div class="col-sm-5   logout " style="text-align:center"><img src="img/Codecademy.png"  style="img-thumbnail" alt=""></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2"> One of the most popular free places to learn coding is CodeAcademy. In fact, more than 24 million people have already learned how to code through this educational company’s engaging experience. At CodeAcademy, you can dive right in and take courses</p>
      </div>
    </div>
<hr >

    <div class="row ">
        <div class="col-sm-5  logout  " style="text-align:center"><img src="img/Edx.jpg"  style="img-thumbnail" alt=""></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2">EdX is another leading online-learning platform that is open source instead of for-profit. It was founded by Harvard University and MIT in 2012, so you know that you’ll learn about cutting-edge technologies and theories. Today, edX includes 60 schools. You probably can’t go wrong with the free Introduction to Computer Science from Harvard University.

</p>
      </div>
      <hr >

    </div>
    <hr >

    <div class="row ">
        <div class="col-sm-5  logout  " style="text-align:center"><img src="img/coursea.jpg"  style="img-thumbnail" alt=""></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2">Founded in 2012, Coursera has grown into a major for-profit educational-technology company that has offered more than 1,000 courses from 119 institutions. While you can pay for certain programs to receive a certificate, there are a number of free introductory programming courses in various specializations from universities such as the University of Washington, Stanford, the University of Toronto and Vanderbilt.</p>
      </div>
    </div>
<hr >

    <div class="row ">
        <div class="col-sm-5   logout " style="text-align:center"><img src="img/Udemy.png"  style="img-thumbnail" alt=""></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2">Founded in 2010, Udemy is an online learning platform that can be used as a way to improve or learn job skills. While there are courses you have to pay for, there are plenty of free programming courses, which are taught via video lessons, such as Programming for Entrepreneurs - HTML & CSS or Introduction to Python Programming.

</p>
      </div>
    </div>
<hr >

    <div class="row ">
        <div class="col-sm-5  logout  " style="text-align:center"><img src="img/khan.jpg"  style="img-thumbnail" alt=""></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2">Created in 2006 by educator Salman Khan, Khan Academy is one of the original free online-learning institutions. With step-by-step video tutorials, you can  learn how to program drawings, animations and games using JavaScript and ProcessingJS, or learn how to create webpages with HTML and CSS.

</p>
      </div>
    </div>
<hr >

    <div class="row ">
        <div class="col-sm-5   logout " style="text-align:center"><img src="img/OpenClassrooms.png"  style="img-thumbnail" alt=""></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2">OpenClassrooms is an online learning platform for vocational training, providing courses in IT, technology, entrepreneurship, and digital skills[1] at large, in English, French, and Spanish.</p>
      </div>
    </div>
    <hr >

    <div class="row ">
        <div class="col-sm-5  logout  " style="text-align:center"><img src="img/code-school.png"  style="img-thumbnail" alt=""></div>   
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre2">Code School is an online learning destination for existing and aspiring developers that teaches through entertaining content.
</p>
      </div>
    </div>


</section>

<FOOTER class="footer2">
<DIV style=""> LET'S BUILD TOGETHER </DIV> 
</FOOTER>
</body>
</html>