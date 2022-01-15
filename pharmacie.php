<style type="text/css">
  .tit{
    color: #DE3163;
  }
  .partie1{
  width: 100%;
  background-image:url("image/17.jpg");
  height:250px;
  background-size:400px;
}
</style>


<?php 
  include("conn.php");

  $req = $db->query('SELECT * FROM hopital '); //order by dat_inscript desc
  $i=0;
  while ($data = $req->fetch()) {
    $i=$i+1;
    $id = $data['idH'];
    $nom = $data['nomH'];
    $vil = $data['villeH'];
    $descript = $data['descriptH'];
    $service = $data['servicesH'];
    $img = $data['img_url'];


    if(strlen($descript)>300){
      $text=substr($descript, 0,298)."...";
    }else{
      $descript;
    }

    if($i%2==0){
      echo "
          <hr class=\"featurette-divider \">
          <div class=\"row featurette\">

            <div class=\"col-md-7\" style=\"color:black;\">
              <h2> <span class=\"text-muted\">$nom</span></h2>
              <p>
                $text
              </p>
              <p><a href=\"#\"><button type=\"button\" class=\"btn btn-outline-primary btn-lg\">Voir plus</button></a></p>
            </div>
     
            <div class=\"col-md-5\">
              <img src=\"$img\" height=\"300px\" width=\"500px\"/>
            </div>

        </div> ";
    }else{
      echo "
          <hr class=\"featurette-divider\">
          <div class=\"row featurette\" style=\"color:black;\">
      
            <div class=\"col-md-7 order-md-2\">
              <h2 ><span class=\"text-muted\">$nom</span></h2>
              <p >
                $text
              </p>
              <p><a href=\"&\"><button type=\"button\" class=\"btn btn-outline-primary btn-lg\">Voir plus</button></a></p>
            </div>

            <div class=\"col-md-5 order-md-1\">
              <img src=\"$img\" height=\"300px\" width=\"500px\"/>
            </div>
          </div> ";
    }

  }
  
 ?>
<hr class="featurette-divider bg-dark">    


