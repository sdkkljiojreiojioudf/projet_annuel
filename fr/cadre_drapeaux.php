<style>
div{border:0px solid black;font-size:24px;}
input[type=text]{
    width: 20%;
    padding: 7px 10px;
    
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	FONT-size:24px;
}


</style>

<?php 
if(!isset($_SESSION['essai_restant'])or empty($_SESSION['essai_restant'])){
	$_SESSION['essai_restant']=2;
}

if (isset($_POST['pays'])){
	
	$postpays=strtolower($_POST['pays']);
$payschoose=strtolower($_SESSION['pays']);
	
	if($postpays==$payschoose){
		$_SESSION['score_drapeau']++;
		unset($_SESSION['pays']);
		header('location:drapeaux_fr.php');
	}else{
		$_SESSION['essai_restant']=$_SESSION['essai_restant']-1;
		
		if($_SESSION['essai_restant']<1){
		$_SESSION['perdu_drapeau']=TRUE;
		$_SESSION['jeux']="Drapeaux";
		$_SESSION['pays']="";
		$_SESSION['essai_restant']=
	$_SESSION['essai_restant']=2;
	unset($_SESSION['pays']);
	unset($_SESSION['essai_restant']);
		header('location:drapeaux_fr.php');
		}
	}
}

//pour connaitre le nombre de pays dans la table et ainsi generer un nb aleatoire dans une range correcte
if(!isset($_SESSION['pays'])or empty($_SESSION['pays'])){
foreach($bdd->query("SELECT count(*)as nb FROM PAYS")as $result_nb){}


$rand_numb=rand(1,$result_nb['nb']);
$_SESSION['rand_numb']=$rand_numb;
foreach($bdd->query("SELECT NomPays FROM PAYS where IDPays = '$rand_numb'")as $result_pays){}



$_SESSION['pays']=strtolower($result_pays['NomPays']);

}


?>


<div class="mdl-grid mdl-cell--9-col" id="cadre_drapeau1" style="box-shadow:2px 2px 7px black;padding:30px;transition-duration: 1s;" >
<div CLASS="mdl-cell mdl-cell--8-col ">
<form method="post" action="">
<label for="pays">Quel est ce pays?:</label>
<input id="pays" type="text" name="pays"  autofocus></>
<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect buttonretour2 color-t"
 type="submit" ></>
</form>
</DIV>
<div  class="mdl-cell"style="margin-top:10px;font-size:34px;">
Score: 
<?php echo $_SESSION['score_drapeau'];?>
</div>
<div  class="mdl-cell"style="margin-top:10px;font-size:17px;">
Nombre d'essais restant: 
<?php echo $_SESSION['essai_restant'];?>
</div>

</div>





 
 
 
<div class="mdl-grid"  id="cadre_drapeau2" style="margin-top:40px;transition-duration: 1s;">

<img STYLE="height:200px;width:400px;"src="img/<?php echo $_SESSION['rand_numb'];?>.png"></img>

</div>

<?php include('partie_terminee_events_drapeaux.php');?>




