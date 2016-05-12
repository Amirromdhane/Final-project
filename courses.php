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
      <li class="dropdown "><a class="dropdown-toggle page-scroll" data-toggle="dropdown" href="#">Our courses <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="dropdown-header">Languages</li>
          <li> <BUTTON style="background:white;border:0px;width:100%" id="b3">Ruby</BUTTON></li>
          
          <li class="dropdown-header">Frameworks</li>
          <li><BUTTON style="background:white;border:0px;width:100%" id="b1"> Angular</BUTTON></li>
          <li> <BUTTON style="background:white;border:0px;width:100%" id="b2">NodeJs</BUTTON></li>

        </ul>
      </li>
      <li>
      <label for="slide"><img src="photo/<?php echo $row['photo'];?>" class="user thumbnail"></label>
      </li>
    </ul>
  </div>
</nav>


<section class="course0">
  	<div class="row">
       <div class="col-md-4  col-sm-0"  style="">
    		<img src="img/pcSaroukh.png" width="300" style="" alt="">
      </div>
        <div class="col-md-8 col-sm-12 " >
        <div  class="titleCourse  all " style="display:block"> What Would Your Dream Job Be? Chase It!</div>
        <div  class="titleCourse all nodettr "> node-JS a javaScript framework!</div>
    		<div  class="titleCourse all angularttr"> Angular-JS a javaScript framework!</div>
        <div  class="titleCourse all rubyttr"> RUBY! </div>
        <a href="#course2"><BUTTON class=" float btnHeader btnForm all nodettr angularttr rubyttr" style="width:60%;color:white; margin-top:50px ">Let's see how it works</BUTTON> 
        </a>
      </div> 
    </div>
</section>

<section  id="course1" style=" padding:40px ; text-align:center;"class=" all nodettr angularttr rubyttr">
  <h2 style="text-align:center;"class=" all nodettr angularttr "> Let's watch some tutorials!</h2>
  <h2 style="text-align:center;"class=" all   rubyttr"> Ruby works just this simple</h2>
          <img src="img/cleanroom-ruby.gif " style="margin:40px 0 40px 0;" class="img-thumbnail rubyttr all"> 

     <div class="container" style="text-align:center;">
           <div class="all angularttr row ">
            <img src="img/vdoangular.jpg " id="1" class="img-thumbnail col-xs-3 tuto"  width="204" height="136"> 
            <img src="img/vdoangular3.jpg" id="2" class="img-thumbnail col-xs-3 tuto"  width="204" height="136">
            <img src="img/vdoangular.jpg" id="3" class="img-thumbnail col-xs-3 tuto"  width="204" height="136">
            <img src="img/vdoangular2.jpg" id="4" class="img-thumbnail col-xs-3 tuto"  width="204" height="136">
           </div>

          <div class="all nodettr">  
           <img src="img/vdonode2.jpg"  id="5" class="img-thumbnail col-xs-3 tuto"  width="204" height="136"> 
            <img src="img/vdonode2.jpg"  id="6" class="img-thumbnail col-xs-3 tuto"  width="204" height="136"> 
            <img src="img/vdonode2.jpg"  id="7" class="img-thumbnail col-xs-3 tuto"  width="204" height="136"> </div>
            <img src="img/vdonode2.jpg"  id="8" class="img-thumbnail col-xs-3 tuto"  width="204" height="136"> </div>



   </div>
</section>

<div id="myModal" class="modal"> <!-- blaset lvideo -->
  <div class="modal-content" >
    <span class="close" id="close">x</span>
    <div id="vdoHere" style="text-align:center; width:100%; padding:20px"></div>
  </div>
</div>
<script>
      var modal = document.getElementById('myModal');
      var close = document.getElementById('close');
     
     $(document).ready(function(){
    $(".tuto").click(function(event){ modal.style.display = "block";
      var id=event.target.id; 
      var vdoHtml="<video style='' width=70% autoplay><source src='video/"+id+".mp4' type='video/mp4'></video>";
        $('#vdoHere').html(vdoHtml);
    });
});
      close.onclick = function() { $('#vdoHere').html(""); modal.style.display = "none";}
</script>





<section id="course2" style=" padding:40px ;"class=" all nodettr angularttr rubyttr">
  	<div class="row">
      
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class="all angularttr cadre"> HTML is great for declaring static documents, but it falters when we try to use it for declaring dynamic views in web-applications. AngularJS lets you extend HTML vocabulary for your application. The resulting environment is extraordinarily expressive, readable, and quick to develop.
AngularJS version 1.0 was released in 2012,Miško Hevery, a Google employee, started to work with AngularJS in 2009,the idea turned out very well, and the project is now officially supported by Google.</p>
        <p style="color:#3b3b3b;" class="all nodettr cadre"> Node.js® is a JavaScript runtime built on Chrome's V8 JavaScript engine. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient.As an asynchronous event driven JavaScript runtime, Node is designed to build scalable network applications. In the following "hello world" example, many connections can be handled concurrently. Upon each connection the callback is fired, but if there is no work to be done Node is sleeping. </p>
        <p style="color:#3b3b3b;" class="all rubyttr cadre"> Ruby is A dynamic, open source programming language with a focus on simplicity and productivity.In Ruby, everything is an object. Every bit of information and code can be given their own properties and actions. Object-oriented programming calls properties by the name instance variables and actions are known as methods. Ruby’s pure object-oriented approach is most commonly demonstrated by a bit of code which applies an action to a number</p>
         </div>
        <div class="col-sm-5 all nodettr" style="text-align:center"><img src="img/node.jpg"  style="" alt=""></div>
        <div class="col-sm-5 all rubyttr" style="text-align:center"><img src="img/ruby.png"  style="" alt=""></div>
        <div class="col-sm-5 all angularttr" style="text-align:center"><img src="img/angular-js.png"  style="" alt=""></div>

    </div>
    
</section>

<hr class=" all nodettr angularttr rubyttr">

<section   id="course3" style="padding:40px"class=" all nodettr angularttr rubyttr">
    <div class="row ">
        <div class="col-sm-5 all angularttr" style="text-align:center"><img src="img/angular2.gif"  style="" alt=""></div>
        <div class="col-sm-5 all nodettr" style="text-align:center"><img src="img/nodejs.gif"  style="" alt=""></div>
        <div class="col-sm-5 all rubyttr" style="text-align:center"><img src="img/multiplatformruby.gif" style="" alt=""></div>
        
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class="all angularttr cadre"> oyee, started to work with AngularJS in 2009,the idea turned out very well, and the project is now officially supported by Google.</p>
        <p style="color:#3b3b3b;" class="all nodettr cadre">  Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient.As an asynchronous event driven JavaScript runtime, Node is designed to build scalable network applications. In the following "hello world" example, many connections can be handled concurrently. Upon each connection the callback is fired, but if there is no work to be done Node is sleeping. </p>
        <p style="color:#3b3b3b;" class="all rubyttr cadre"> Ruby is A dynamic,  Object-oriented programming calls properties by the name instance variables and actions are known as methods. Ruby’s pure object-oriented approach is most commonly demonstrated by a bit of code which applies an action to a number.
             5.times { print "We *love* Ruby " }</p>  
      </div>
    </div>
</section>

<FOOTER class="footer2">
<DIV style=""> LET'S BUILD TOGETHER </DIV> 
</FOOTER>
</body>
</html>