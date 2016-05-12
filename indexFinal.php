<!doctype html> 

<?php session_start();?>
<?php
$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("webproject");

if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$result = mysql_query("select * from users where username='$username' and password='$password'");
   if (mysql_num_rows($result)==0) { echo "you are not registered "; }
else {
session_start(); 
$_SESSION["username"]=$_POST['username']; 
header("Location: courses.php");
exit();}
}
mysql_close($connection); 
?>

<html>
<head>
<meta charset="utf-8">
<title>acceuil</title>
<link href="css/styles.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body id="toop">
   
<nav id="Nav" class="navbar navbar-default navbar-fixed-top container-fluid a">
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
                        <a class="page-scroll" href="#courses">Our Courses</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Our team</a>
                    </li>
                     <?php  if(!isset($_SESSION["username"]) ) {

                      echo'<li><a class="page-scroll" href="#login">LOG IN</a></li>';}?>
                </ul>
            </div>
</nav>
<header>
  <div class="headerIn titreshodow" style="">
    <div >LEARN CODE AND GET A JOB </div>
    <div>CHANGE YOUR LIFE.</div><hr width="50px" >
    <?php  if(!isset($_SESSION["username"]) ) {

echo'<a  href="#login">  <button type="button" class=" float btnHeader btnForm" style="margin:20px!important;width:100px!important;">                        LOG IN
</button></a>'; }
?>
  
  </div>
</header>


<section style="padding:40px 150px 40px 150px;" id="courses">
  <H2 style="padding:20px">What do you want to learn?</H2>
  <div class="row">
   <!--
          <a href="" style="display: block;position: relative;margin: 0 auto;">
            <img src="img/architecture.jpg"  class=" col-md-6 col-xs-12" style="padding:0px"  width="100%" >
          </a> -->
   
<!-- yabda -->
<a href="sites.php">
            <div class="team-item col-md-6 col-xs-12">
            <!-- team-member wrapper-->
            <div class="team-item-wrapper">
              <!-- team-member pic -->
              <div class="team-member-picture-wrapper">
                <div class="team-item-picture">
                  <img src="img/codementor.png" alt=""/>
                </div>
                <div class="team-member-find">
                  <div class="team-member-find-overlay">
                    <!-- overlay content -->
                  <div class="team-member-find-content"><p>Coding online learning sites </p></div>                  
                
                    <!-- /overlay content -->
                  </div>                
                </div>
              </div>          
              <!-- team-member Infos -->
            </div>
            <!-- /team-member wrapper-->
          </div>
</a>
<!-- youfa -->
<!-- yabda -->
<a href="editors.php">

            <div class="team-item col-md-6 col-xs-12">
            <!-- team-member wrapper-->
            <div class="team-item-wrapper">
              <!-- team-member pic -->
              <div class="team-member-picture-wrapper">
                <div class="team-item-picture">
                  <img src="img/editor.jpg" alt=""/>
                </div>
                <div class="team-member-find">
                  <div class="team-member-find-overlay">
                    <!-- overlay content -->
                    <div class="team-member-find-content">
                      <p>Popular coding editors </p>
                    </div>                  
                    <!-- /overlay content -->
                  </div>                
                </div>
              </div>          
              <!-- team-member Infos -->
            </div>
            <!-- /team-member wrapper-->
          </div>
  </a>
<!-- youfa -->
<!-- yabda -->
<a href="courses.php">

            <div class="team-item col-md-6 col-xs-12">
            <!-- team-member wrapper-->
            <div class="team-item-wrapper">
              <!-- team-member pic -->
              <div class="team-member-picture-wrapper">
                <div class="team-item-picture">
                  <img src="img/js animation.gif" alt=""/>
                </div>
                <div class="team-member-find">
                  <div class="team-member-find-overlay">
                    <!-- overlay content -->
                    <div class="team-member-find-content">
                     <p>Coding languages </p>
                   </div>                  
                    <!-- /overlay content -->
                  </div>                
                </div>
              </div>          
              <!-- team-member Infos -->
            </div>
            <!-- /team-member wrapper-->
          </div>
</a>
<!-- youfa -->
<!-- yabda -->
<a href="architecture.php">

            <div class="team-item col-md-6 col-xs-12">
            <!-- team-member wrapper-->
            <div class="team-item-wrapper">
              <!-- team-member pic -->
              <div class="team-member-picture-wrapper">
                <div class="team-item-picture">
                  <img src="img/architecture.jpg" alt=""/>
                </div>
                <div class="team-member-find">
                  <div class="team-member-find-overlay">
                    <!-- overlay content -->
                    <div class="team-member-find-content"><p>Web architectures </p></div>                  
                    <!-- /overlay content -->
                  </div>                
                </div>
              </div>          
              <!-- team-member Infos -->
            </div>
            <!-- /team-member wrapper-->
          </div>
        </a>
<!-- youfa -->
</div>
  
</section>





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

 <?php 

   if(!isset($_SESSION["username"]) ) {echo'<section class="bloc3 " id="login" > 
    <div class="container">
    <h2  style="color: #fff;">Register now</h2>
    <p style="margin-top:20px;margin-bottom:30px; color:#fff">Log in or register now to get access to our courses!</p>
    <div class="row" >
      <form id="form1" method="post" class="">
        <div class="col-sm-3">
          <input name="username" id="ID" type="text" class="inputForm" placeholder="ID" required>
        </div>
        <div class="col-sm-3">
          <input name="password" id="password" class="inputForm" type="password" placeholder="password" required>
        </div>
        <div class="col-sm-3">
          <input type="submit" class="btn btnForm " name="submit" value="LOG IN"/>
        </div>
        <div class="col-sm-3">
          <input type="button" class="btn btnForm " id="myBtn" value="REGISTER NOW!"/>
        </div>
      </form>
    </div>
  </div>
  
  <div id="myModal" class="modal"> 
    <div class="modal-content"> <span class="close">x</span>
      <p>Register here </p>
      <form  method="POST" action="./indexFinal.php" enctype="multipart/form-data" name="formulaire_envoi_fichier" id="formulaire_envoi_fichier" >
        <input type="text" class="inputForm" name="name2" placeholder="Name">
        <br>
        <input type="file" class="inputForm" name="fichier_choisi" >
        <br>
        <input type="text" class="inputForm" name="lastname2" placeholder="Last name">
        <br>
        <input type="text" class="inputForm" name="username2" placeholder="Username">
        <br>
        <input type="password" class="inputForm" name="password2" placeholder="password">
        <br>
        <input type="submit" class="btn btnForm " name="submit2" value="REGISTER"/>
        <br>
      </form>
</div>
  </div>
  <!----- --> 
</section>';}?>

          <?php //on verifie que le champ est rempli: si oui $_FILES["fichier_choisi"]["name"]== nom.ext
          function redirect($url)
{
    $string = '<script type="text/javascript">';
    $string .= 'window.location = "' . $url . '"';
    $string .= '</script>';
    echo $string;
}
if(isset($_POST['submit2'])){

if(!empty($_FILES["fichier_choisi"]["name"]) || !empty($_FILES["fichier_choisi"]["name"]))
{
  //nom du fichier choisi:
  $nomFichier    = $_FILES["fichier_choisi"]["name"] ;  //name.ext à inserer fl requete
  $nomTemporaire = $_FILES["fichier_choisi"]["tmp_name"] ;//pour copier la photo
  $typeFichier   = $_FILES["fichier_choisi"]["type"] ;//ces 3 champs jst bech yaplodi correctement
  $poidsFichier  = $_FILES["fichier_choisi"]["size"] ;
  $codeErreur    = $_FILES["fichier_choisi"]["error"] ;
 
  $chemin = "./photo/" ;//chemin des fichiers uplaoded
  $name = $_POST['name2'];
  $lastname = $_POST['lastname2'];
  $username = $_POST['username2'];
  $password = $_POST['password2'];
  if(copy($nomTemporaire, $chemin.$nomFichier))
    { 
      $connection = mysql_connect("localhost", "root", ""); 
      $db = mysql_select_db("webproject");
      $reponse=mysql_query("insert into users values('$name','$lastname','$username','$password','$nomFichier')");
//header("Location:courses.php"); 

session_start(); 
$_SESSION["username"]=$_POST['username2'];   
redirect("courses.php");
}
} 
}
?>



    

<script> 
var modal = document.getElementById('myModal');// Get the html modal
var btn = document.getElementById("myBtn");// Get the button
var span = document.getElementsByClassName("close")[0];// Get the <span> X : close 
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
   modal.style.display = "none";
    }
}
</script> 

<!-- ======================= map & quote =========================== -->
<section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.488357161279!2d10.636119415262373!3d35.81249208016386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1302756a7452317b%3A0xfe8bdcb107b21c72!2sInstitut+Sup%C3%A9rieur+des+Sciences+Appliqu%C3%A9es+et+de+Technologie+de+Sousse!5e0!3m2!1sfr!2s!4v1461086634783" height="350" width="100%" style="pointer-events: none; border:none;"></iframe>
</section>
<footer class="footer2">
    <div>
  <?php
$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("webproject");
$result = mysql_query($req="select * FROM quotes ORDER BY RAND() LIMIT 1;");
while ($row=mysql_fetch_array($result)){ echo "".$row['content']." -- ".$row['author']."";}
mysql_close($connection); 
?>
  </div>
</footer>

</body>
</html>