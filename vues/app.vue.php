<?php
if(isset($_SESSION['nom_prenom']))
{
  $nom=$_SESSION['nom_prenom'];
}else{
  $nom="Non connecter";
}
?>

<div class="pas_menu"  class="menu">
  <div class="pas_title" onclick="f()">MENU <span class="fa fa-bars"></span>
  </div>
  <div class="pas_dropdown"class="dropdown">
  <a href="index.php?page=accueil"> <p class="pas_p">Accueil <span class="fa fa-inbox"></span></p> </a></a>
  <a href="index.php?page=ins_up"> <p class="pas_p">Ajouter <span class="fa fa-pencil"></span></p> </a>
    <a href="index.php?page=liste"><p class="pas_p">Liste<span class="fa fa-book"></span></p></a>
    <a href="index.php?page=accueil&deconnect=''"><p class="pas_p">Deconnexion <span class="fa fa-sign-out"></span></p></a>
  </div>  
</div>

       
        <div class="p-3 h-100">
          <?php require($contenu);?>
        </di>



