
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Application traçabilité matière</title>
	<link href="styleAuthentification.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
session_start();
if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $_SESSION['username'] = $username;
      header("Location: index.php");
}
?>  
    <div class="conteiner-fluid" id="content">
        <div id="title">AUTHENTIFICATION</div>
    
        <form id="form" action="index.php" method="post" name="login">
            <div>
                <label for="user">Entrer votre nom :</label>
                <input type="text" id="user" name="username" required>
            </div>
            <div class="button">
                <button type="submit">CONNECTION</button>
            </div>
        </form>
    </div>
</body>
</html>