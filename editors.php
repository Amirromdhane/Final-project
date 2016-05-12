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
         <a class="page-scroll" href="">editors</a>
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
<section class="course03">
  	<div class="row">
       <div class="col-md-4  col-sm-0"  style="">
    		<img src="img/success.gif" width="300" class="img-thumbnail" alt="">
      </div>
        <div class="col-md-8 col-sm-12 " >
        <div  class="titleCourse titreshodow" >List of best Code Editors for Mac and Windows for Editing WordPress Files</div>
        
      </div> 
    </div>
</section>




<section   id="course3" style="padding:40px">
    <div class="row ">
          
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre3 "> Notepad++ is a free and open source code editor for Windows. It is easy to use for beginners and highly powerful for advanced users. It comes with syntax highlighting for many languages including PHP, JavaScript, HTML, and CSS. It also comes with a built-in FTP plugin that allows you to connect to your server and edit files directly without leaving the editor.
</p>
      </div>
      <div class="col-sm-5 logout " style="text-align:center"><img src="img/notepad.png"  style="img-thumbnail" alt=""></div> 
      <hr >

    </div>
        <hr >

        <div class="row ">
          
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre3">TextWrangler came out of the popular BBEdit text editor. This powerful and feature rich text editor is a freeware. It comes with a very intuitive user interface that makes it super easy to browse files and work on projects. It has advanced search and replace tools, and it can directly edit and save files to FTP, SFTP servers.
</p>
      </div>
      <div class="col-sm-5   logout " style="text-align:center"><img src="img/textwrangler.png"  style="img-thumbnail" alt=""></div> 
    </div>
<hr >

    <div class="row ">
           
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre3">Coda is perhaps one of the most loved web development and programming editor for Mac. It is famous for its ridiculously good looking interface, and smart powerful features. It allows you to edit local or remote files, manage projects, work on multiple files at once with easy switching between tabs

</p>
      </div>
      <div class="col-sm-5   logout " style="text-align:center"><img src="img/coda.jpg"  style="img-thumbnail" alt=""></div>
      <hr >

    </div>
    <hr >

    <div class="row ">
         
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre3">Sublime Text is a cross-platform code editor for Mac, Windows, and Linux. It comes with all the features you would expect from a powerful code editor and then some more. It looks beautiful and you can tweak the appearance to make it more comfortable for you. Sublime Text comes with advanced code editor features which allow you to autofill, autocomplete, reference function in a file, multiple selection, split editing, and many more.
</p>
      </div>
       <div class="col-sm-5  logout  " style="text-align:center"><img src="img/sublimetext.png"  style="img-thumbnail" alt=""></div> 
    </div>
<hr >

    <div class="row ">
          
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre3">TextMate promises to bring Apple’s approach to operating systems into a text editor. TextMate is a simple yet feature rich code editor for Mac. Easy clip board management, sophisticated find and replace, autocompletion, foldable code blocks, are some of the powerful features of TextMate.

</p>
      </div>
          <div class="col-sm-5  logout  " style="text-align:center"><img src="img/textmate.png"  style="img-thumbnail" alt=""></div> 

    </div>


<hr >

    <div class="row ">
        
       <div class="col-sm-7 " >
        <p style="color:#3b3b3b;" class=" cadre3">Atom is a cross-platform code editor created by developers for developers. It is open source, and much like WordPress, Atom users can submit packages and themes for the software. It looks pretty and you can change the appearance by installing themes. It comes with built-in package manager to extend it, smart autocompletion, file system browser, multiple panes, find and replace.
</p>
      </div>
       <div class="col-sm-5  logout  " style="text-align:center"><img src="img/atom.png"  style="img-thumbnail" alt=""></div>  
    </div>



</section>

<FOOTER class="footer2">
<DIV style=""> LET'S BUILD TOGETHER </DIV> 
</FOOTER>
</body>
</html>