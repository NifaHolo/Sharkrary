<!DOCTYPE html>
<html>
<head>
    <?php require "head.php"?>
	<link rel="stylesheet" href="style/style2.css">
</head>
<body>
<?php require "base.php" ?>
   <a href="#"><img src="images/up.jpg" alt=""  class="bas"></a>
   <div class="livre">
   <?php

    $link = mysqli_connect("localhost", "root", "", "sharkrary");
    if(!$link){
          //  echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
   // echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
    //echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
    exit;
   }
//echo "Succès : Une connexion correcte à MySQL a été faite! La base de donnée my_db est géniale." . PHP_EOL;
//echo "Information d'hôte : " . mysqli_get_host_info($link) . PHP_EOL;
$req = " SELECT * FROM livre JOIN editeur ON editeur.id=livre.editeur ";// requete sql 
$result = mysqli_query($link,$req);

    if ($result) {
        //echo "SELECT a retourné ".mysqli_num_rows($result)."lignes.<br>";
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

               echo "<div>";
               echo "<a href='isbn/" . $row["isbn"] . ".php' class='a_image'><img src='images/" . $row["isbn"] . ".png'alt='' class='image'></a>";
               echo "<h1>" . $row["titre"] . "</h1>";
                       echo "<ul>";
                               // echo "<li>auteur : " . $row["auteur"] . "</p>"; //affiche les auteurs dans l'odre de la bdd
                                echo "<li><strong>Isbn </strong>: " . $row["isbn"] . "</li>";//affiche les isbn dans l'odre de la bdd
                                echo "<li><strong>Editeur</strong> : " . $row["libelle"] . "</li>";//affiche les libelle dans l'odre de la bdd
                                echo "<li><strong>Date de paruption</strong> : " . $row["annee"] . "</li>";//affiche les année dans l'odre de la bdd
                    echo "</div>";
                    echo "</ul>";
            }
    }
     ?>
</div>
</body>
</html>
