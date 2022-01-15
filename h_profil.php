<?php 
session_start();
include("conn.php");

?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>hopital</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="hosp.css">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
    </style>
    <!-- Custom styles for this template -->
   <link rel="stylesheet" href="hosp.css">
   <link href="assets/dist/css/bootstrap.css" rel="stylesheet">

   
  </head>
<body class="text-center">
	<div class="partie1" ><!-- ******tout de suite********* -->
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" style="color: white;">
    <?php
      include("menu.php");
    ?>

    </div>
      </div>
        <!--<****************o"-->
        <main class="container mt-2 pb-4" style=" ">
          <div class="row" style=" border-left: 3px solid #555; ">
            <?php 
              if(isset($_GET['param1'])){
                $idHOSP=$_GET['param1'];
                $req = $db->query("select idH, nomH, villeH, qtierH, descriptH, servicesH, telH, sitewebH, mail, img_url from hopital where idH='".$idHOSP."' ");
                while($rs=$req->fetch()){
                  $nom_hopi = $rs['nomH'];
                  $ville = $rs['villeH'];
                  $qtier = $rs['qtierH'];
                  $description = $rs['descriptH'];
                  $service = $rs['servicesH'];
                  $tel = $rs['telH'];
                  $siteweb = $rs['sitewebH'];
                  $mail = $rs['mail'];
                  $image = $rs['img_url'];
                  $id=$rs['idH'];
                  //}
              //}
                  echo "
                    <div class=\"col-lg-4\"> 
                      <img src=\"$image\" class=\"img-thumbnail mb-2\"><br>";
                  if(isset($_SESSION['id']) and $_SESSION['id']==$id){
                      echo "
                     <button class=\"btn btn-outline-primary \">Ajouter une image</button>
                      <br>
                      <a href=\"#\" class=\" btn btn-primary mt-4\">Modifier mes informations</a>
                      " ;}

                    echo "</div>
                     

                    <div class=\"col-lg-8 \" style=\"border:2px  ;\">
                    <div class=\"description mt-2\">
                      <h1>$nom_hopi</h1>
                      <p>
                      $description
                      </p>
                    </div>
                    <hr class=\"mt-4\">
                    <div class=\"service\">
                      
                      <h2><u>Nos services</u> </h2>
                      <p>
                      $service
                      </p>
                    </div>
                    <hr class=\"mt-4\">
                    <div class=\"contact\">
                      <h2><u>Contacts</u> </h2>
                      <div class=\"text-\" style=\"border: inse
                      t;\">
                        <span>Telephone : $tel</span>
                        <br>
                        <span>Adresse mail : <a href=\"malto:$mail\"> $mail</a></span><br>
                        <span>Ville : $ville</span><br/>
                        <span>Quartier : $qtier</span>
                        <br>
                         
                      </div>
                    </div>
                  </div>
                  </div>";
          }
        }
      ?>
          
        </main>
      <hr class="mt-4">

        <!--fffffffffffffffff>-->
          <?php 
            include("pied.php");
           ?>

</body>
</html>

