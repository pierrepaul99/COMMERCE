<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Exo.css" /> 
    <title>Boutique</title>
</head>
  <body>
      <div> 
        <header>
        <h1 > <em>La Boutique</em></h1>
      </header>
    <nav class="nav">
    
        <div class="nav_box" >
      <a class="mets" href="Exo.php">Acceuil</a>

       <a class="mets" href="Contactez.php"style=" background-color:rgb(162,139,169);"> Formulaire </a>
     
      </div>
 
 </nav>    
 <p>  

<form action="form.php" method="post" >
  <div class="champ">
    <label for="nom">Nom</label>
    <input type="text"  name="Name" id="nom">
  </div>
  <P>
    
  </P>
  <div class="champ">
    <label for="prenom">Prénom</label>
    <input type="text"  name="seudo" id="prenom">
  </div>
  <P>
    
  </P>  
  <div class="champ">
<label for="mel">E-mail </label>
<input type="email" name="mail" id="mel" />
 </div> 

 <p>

 </p>
<div><label for="command">Commande</label><br />
<textarea type="text" name="commande" id="command"></textarea> <br></div>
 <button type="submit">OK</button>
</form>
<<?php if(isset($_post['valider']))
{
  Echo $_post['nom'];
}
 ?>
  <h5> Ecrivez nous sur messenger en cliquant sur l'icone  <br> <a href="https://free.facebook.com/jessie.prescott.229?ref_component=mfreebasic_home_header&ref_page=MNotificationsController&refid=48"><img src="Photos/messenger.png" alt="messenger"/></a></h5>

 <footer> 
<nav class="nav">
  <div class="nav_box">
    <a class="mets" href="Hommes.php"> Hommes </a>
            <a class="mets" href="Femmes.php">Femmes</a>

  </div>
</nav>
</footer>
 </body>
   </html> 