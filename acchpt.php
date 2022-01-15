<?php 
  session_start();
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
   <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
   
</head>

<body class="text-center">
	<div class="partie1" >
      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" style="color: white;">
        <div>
            <?php
              include("menu.php");
            ?> 
        </div>

        <?php
         if(isset($_GET['param1']) and isset($_GET['param2'])){
           if($_GET['param1']=="val4" && $_GET['param2']=="val2")
           {
            echo "<main role=\"main\" class=\"inner cover\" style=\"color: #3A020D;\">
                  <br/><p class=\"lead\"><b>Nos différentes pharmacies vous offrent des produits de qualités, pour vos différents traitements vous garantissant ainsi une meilleur santé.</b></p>
                </main>";
            
           }
           else{
              echo "";
           }
         }
         else{
           echo "<main role=\"main\" class=\"inner cover\" >
                  <br/><p class=\"lead\"><b>Nos différents hopitaux vous offrent des services de qualités, différents traitements selon vos besoins et un bon suivi médical vous garantissant ainsi une meilleur santé.</b></p>
                </main>";
            } 
        ?>
      
  
    </div>
  </div>



    <div>
	     <?php
         if(isset($_GET['param1']) and isset($_GET['param2'])){
        	 if($_GET['param1']=="val4" && $_GET['param2']=="val2")
           {
            include("pharmacie.php");
           }
         }
         else{
        	 include("liste.php");
         } 
        ?>
    	
    </div>

   <div style="width: 100%;">
     <?php 
      include("pied.php");
     ?>
   </div> 	
    
  
</body>
</html>

