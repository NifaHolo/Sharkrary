<!DOCTYPE html>
<html>

<head>
<?php require "head.php"?>
  <link rel="stylesheet" href="../style/style3.css">
</head>

<body>
<?php require "base.php" ?>
   <div class="livre" >
<?php
$isbn = $_GET["isbn"];
 $link = mysqli_connect($dbhost, $dbuser , $dbpwd , $dbname);
    if(!$link){
   //  echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
   // echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
   //echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
    exit;
   }
   //echo "Succès : Une connexion correcte à MySQL a été faite! La base de donnée my_db est géniale." . PHP_EOL;
   //echo "Information d'hôte : " . mysqli_get_host_info($link) . PHP_EOL;
    $req = " SELECT * FROM livre JOIN editeur e ON e.id=livre.editeur JOIN auteur a ON a.idLivre=livre.isbn JOIN personne p ON p.id=livre.editeur where isbn = '$isbn';";// requete sql 
    $result = mysqli_query($link,$req);

if ($result)
{
    //echo "SELECT a retourné ".mysqli_num_rows($result)."lignes.<br>";
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
        echo"<div>";
          echo"  <img src='../images/poisson_trop_choupi.gif' id='foto1'>";
          echo"<h1><u>Bonjour toi, la description est ici ---> </u></h1>";
        echo"</div>";
        echo"<div>";
          echo"<img src='../images/" . $row["isbn"] . ".png' alt='' id='foto1'>";
        echo"</div>";
        echo"<div>";
          echo"<ul class='leftul' align=center>";
           echo "<li><strong>titre<strong>: " . $row["titre"] . " " . $row["nom"] . "</li>";
           //Affiche les titres dans l'ordre de la bdd
            echo "<li><strong>Auteur </strong>: " . $row["prenom"] . " " . $row["nom"] . "</li>";
           //affiche les auteurs dans l'odre de la bdd
           echo "<li><strong>Isbn </strong>: " . $row["isbn"] . "</li>";
            //affiche les isbn dans l'odre de la bdd
            echo "<li><strong>Editeur</strong> : " . $row["libelle"] . "</li>";
            //affiche les Editeurs dans l'odre de la bdd
            echo "<li><strong>Date de paruption</strong> : " . $row["annee"] . "</li>";
            //affiche les Dates de paruption dans l'odre de la bdd
            echo "<li><strong>Genre</strong> : " . $row["genre"] . "</li>";
            //affiche les Genre dans l'ordre de la bdd
            echo "<li><strong>Pages</strong> : " . $row["nbpages"] . "</li>";
            //affiche les pages dans l'ordre de la bdd
            echo"<li><a href='tous_les_livres.php'><img src='../images/poisson_rigolo.png' alt ='' class='retour' ></a></li>";      
          echo"</ul>";
        echo"</div>";
  }
}
?>
</body>
</html>
