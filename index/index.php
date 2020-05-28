<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion;
  if(!isset($_POST['username'])){
	   header("Location: authentification.php");
  } else {
	    $username = $_POST['username'];
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Application traçabilité matière</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div id="menu"><?php include 'menu.php'; ?></div>
    <div id="recap">
        Recap :
        <div id='toolChoiced'></div><br />
        <div id='listKit'></div>
    </div>
    <div class="rows" id="Profil">
        <div>BIENVENUE </div>
    <div id='user'><?php echo $username; ?></div>
    </div>
    <div id="content">
        <?php include '1-Nouveau_Moulage/toolChoice.php'; ?>
        <?php include '1-Nouveau_Moulage/kitTable.php'; ?>
    </div>
    <br clear="both" />
<script src="./1-Nouveau_Moulage/tool.js"></script>
<script src="./1-Nouveau_Moulage/kit.js"></script>
<script src="./1-Nouveau_Moulage/main.js"></script>
<script src="./2-PrintableSheet/printSheetScript.js"></script>
</body>
</html>