<?php session_start();?>
<?php 
//permet de recuper  d'utiliser $_SESSION

for ($x = 1; $x <= 5; $x++) {
  
  $_SESSION['coeff'][$x] = 1;
 
}



if(isset($_POST['langue'])){
	if($_POST['langue']==fr){header('location:fr/menujeux.php');}
	elseif($_POST['langue']==en){header('location:en/menujeux.php');}

	
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Site educatif</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

<link rel="stylesheet" href="css/material.min.css">
<script defer src="js/material.min.js"></script>
<script type="text/javascript" src="js/mapper.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
	<link rel="stylesheet" href="css/projet_annuel.css">
</head>

<body >
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><?php echo $_SESSION['title'];?></span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      
    </div>
  </header>
  
  <main class="mdl-layout__content">
  
    <div class="mdl-grid">
	
	<!-- Your content goes here -->