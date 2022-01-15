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

   <link rel="stylesheet" href="hosp.css">
   <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
</head>

<body class="text-center">
	<div class="partie1" style="height: 150px;">
    	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" style="color: white;">
		    <div>
		        <?php
		          include("menu.php");
		        ?> 
		    </div>
		</div>
	</div>

	<div id="ff">
		
	<div class="contact-form" style="padding-left: 3em; padding-bottom: 3em; padding-right: 3em; border: red; background-color: rgba(0,0,0,0.8); ">
		<div class="py-2 text-center">
		    <h2 style="color: white; font-size: 2.3em;">Choisir le type de compte à créer</h2>
		</div>
		<div><?php include("choix.php"); ?></div>

		<center>
			<?php
	         if(isset($_GET['param1']) and isset($_GET['param2'])){
	        	 if($_GET['param1']=="ch1" && $_GET['param2']=="val1")
		           {
		            include("inscript_hop.php");
		            echo "<style>
		            		.bout{
		            			background-color: #2C75FF;
		            			color: white;
		            		}
		            </style>";
		           }
		           if ($_GET['param1']=="ch2" && $_GET['param2']=="val2"){
		           	include("inscript_phar.php");
		           	echo "<style>
		            		.bout2{
		            			background-color: #2C75FF;
		            			color: white;
		            		}
		            </style>";
		           }
	         }
        	?>
		</center>
		
	</div>

<hr class="mt-4">
 <?php 
    include("pied.php");
 ?>
</body>
</html>