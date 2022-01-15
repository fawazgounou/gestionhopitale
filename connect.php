<?php 
  session_start();

  include("conn.php");

  if(isset($_POST['connecter']) && $_POST['connecter']=="Se connecter"){
    
    $id=$_POST['id'];
    $pass=md5($_POST['password']);
    $passA=md5('1234');

    if(!empty($id) && !empty($pass)){
      if($id =='admin' && $pass == $passA){
        $_SESSION['id_a']=0;
        //include("update_reserv.php");
        header("location:admin.php");
      }
      else{
        $res = $db->query("SELECT * FROM hopital WHERE idH='".$id."' AND mdpH='".$pass."' ");

        $comp=$res->rowcount();
        if($comp != 0){
           while($rest=$res->fetch()){

            $idH=$rest['idH'];
            $pass=$rest['pass_abn'];

            $_SESSION['id']=$idH;
            $_SESSION['pass_abn']=$pass;
            header("location:h_profil.php?param1=$idH");
          }
        }
        else{
          $message = "Identifiant ou mot de passe incorrect !";
        }   
      }
    
  }
  else{
        $message = "Veuillez remplir tous les champs !";
      }
  }

 ?>


<!-- code html   -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Connexion</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">

    <link href="style_connect.css" rel="stylesheet">

  </head>

  <body  style="">
    <div class="partie1 text-center" >
      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" style="color: white;">
        <div>
            <?php
              include("menu.php");
            ?> 
        </div>
      </div>
    </div>


    
      <div class="contact-form" style="width: 30em; margin:auto;">
      <br/><br/><h1 class="h3 mb-3 font-weight-normal text-center" style="color: #0F9DE8; font-size: 2.3em; font-family: Algerian; margin-bottom: 200px;"><span>HOPITAL/PHARMACIE</span></h1>

      <div style="color: red;" class="text-center"><?php if(isset($message)){echo $message;} ?></div>

      <form class="form-signin " method ="POST" action="">
        <br/>
        <div class="form-label-group">
          <input type="text" name="id" class="form-control" placeholder="Identifiant" value="<?php if(isset($_POST['id'])){echo $_POST['id'];} ?>" required autofocus>
          <label for="id">Identifiant</label>
        </div> <br/>

        <div class="form-label-group">
          <input type="password" name="password" class="form-control" placeholder="Mot de passe" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>"  required>
          <label for="password">Mot de passe</label>
        </div>

        <br/>
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="connecter" value="Se connecter" style="border-radius: 20px;">

        <br/><a href="formu.php" class="text-center">Pas encore inscrit ? Incsrivez-vous!</a>

      </form>
    </div>
   
  </body>
</html>
