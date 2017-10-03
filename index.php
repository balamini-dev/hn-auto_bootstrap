<!DOCTYPE html>
<html lang="en">
<head>
  <title>HN AUTO & Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Mukta+Malar" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="index.php"> <img src="icon.png" alt="logo hn auto"></a>
      <a class="navbar-brand" href="index.php">HN AUTO & Services</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="tel:0700000092" class="navbar-phone" style="padding: 9px;"> <img src="phone.png" alt="logo phone">07 00 00 00 92</a></li>
          
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <li class="active"><a href="#">Accueil</a></li>
       <li><a href="#">Nos véhicules</a>
       <li><a href="#">À propos de nous</a></li>
       <li><a href="#">Contact</a></li>
      </li>
    </ul>
  </div>
</nav>
  
<div class="section1">
  <div class="text1"><p class="sous_text1">HN AUTO, véhicules d'occassion à bas prix</p></div>
  <div class="conteneur_boutton">
    <div class="boutton">
      <a href="#" class="btn btn-primary btn-lg">NOS VOITURES</a>
      <a href="#" class="btn btn-primary btn-lg">À PROPOS DE NOUS</a>
    </div>
  </div>
</div>

<div class="section2">
  <div class="l1">
    <b><p class="text2">Garantie 6 mois</p></b>
    <img class="image_section2" src="icon_6.png" alt="icon_6">
    <p class="text3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>

  <div class="l1">
    <b><p class="text2">Facture d'entretient</p></b>
    <img class="image_section2" src="icon_carnet_entretient.png" alt="icon_carnet_entretient">
    <p class="text3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>

  <div class="l1">
    <b><p class="text2">Aucun frais à prévoir</p></b>
    <img class="image_section2" src="icon_euro.png" alt="icon_euro">
    <p class="text3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</div>

<div><!-- SECTION 3 --></div> 

<div id="section4"><h2 class="titre_section4">CONTACT</h2>
  <div class="sous_section4">
    <div class="conteneur_form1"> 
      <form class ="formulaire" method="post" action=".php">
          <div class="sous_conteneur_form1"><input type="text" name="nom" placeholder="nom" id="form1" /></div>
          <div class="sous_conteneur_form1"><input type="email" name="email" placeholder="email" id="form1" /></div>
          <div class="sous_conteneur_form1"><input type="text" name="objet" placeholder="objet" id="form1" /></div>
    </div>

    <div class="conteneur_form2">
      <p>
          <textarea name="message" placeholder="votre message" id="form2"></textarea>
          </p>
          <input type="submit" value="Envoyer" id="bouton" />
    </div>
  </div>
</div>
</body>
<?php 
include("footer.php");
?>
</html>
