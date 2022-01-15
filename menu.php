<header class="">
    <div class="inner">
      <h1 class="tit" style="font-size: 3.5em;"><strong>ASSUREZ-VOUS UNE MEILLEURE SANT&#201;</strong></h1>

      <nav class="nav justify-content-center bg-dark">
        <a class="nav-link active" href="acchpt.php">HOPITAUX</a>
        <a class="nav-link" href="acchpt.php?param1=val4&param2=val2">PHARMACIES</a>
		    <a class="nav-link" href="formu.php">INSCRIPTION</a>
        <a class="nav-link" href="blog.php">BLOG</a>
        <?php 
        if (isset($_SESSION['id']) and(!empty($_SESSION['id'])) ) {
          echo "<a class=\"nav-link\" href=\"deconnect.php\">DECONNEXION</a>";
        }else {
          echo "<a class=\"nav-link\" href=\"connect.php\">CONNEXION</a>";
        }
         ?>
        
      </nav>
    </div>
  </header>