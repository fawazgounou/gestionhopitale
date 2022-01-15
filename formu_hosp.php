<?php 
include("conn.php");

?>
<!--*********************************************************************************************-->
<style type="text/css">
	#aa{
		width: 100%;
		height: 100%;
		/*background-image: url("assets/images/body7.jpg");*/
		background: url("image/14.jpg") center no-repeat;
		position: absolute;
		top: 0;left: 0;
		z-index: 1;
		background-size: contain;
		opacity: 0.5;
	}
	#ff{
		position: relative;
		color:white;

	}
	#ff a{
		color: white;
		z-index: 5;
	}
</style>

<div id="ff" style="height: 25em ; padding-top: 3em; padding-bottom: 3em; padding-left:auto; border: red; background-color: rgba();">
	
<div id="aa">
</div><br><br>
		<a href="acchpt.php?param1=val8&param2=val8" class="btn btn-primary col-md-3 ">Compte hopital</a>
		<a href="acchpt.php?param1=val8&param2=val9" class="btn btn-success col-md-3 ml-5">Compte pharmacie</a>
<br><br>	
</div>
