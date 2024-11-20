
<?php 
session_start();
require_once("connexion_bd.php");
$message = "";

if(isset($_POST['send'])){

    if(!empty($_POST['Email']) AND !empty($_POST['Mot_de_passe'])){

        $Email = htmlspecialchars($_POST['Email']);
        $Password = $_POST['Mot_de_passe'];

        $selection = $db->prepare('SELECT id, Email, Mot_de_passe FROM livreur WHERE Email = ? AND Mot_de_passe = ?');
        $selection->execute(array($Email, $Password));

        if($selection->rowCount() > 0){

        $_SESSION['id'] = $selection->fetch()['id'];
        $_SESSION['Email'] = $Email;
        $_SESSION['Mot_de_passe'] = $Password;
        //$_SESSION['NomPrenom'] = $NomPrenom;
        
        
        header('location: Elite/espaceLiv.php');
        } else {

            $message = "Votre Email ou mot de passe est incorrect, Reéssayez!";
        }

    } else {

        $message = "Veuillez Compléter tous les champs";
    }

}else{
  $message = "";
}
 ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="css/sign-in.css">

    

    

<link href="css/bootstrap1.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="assets/img/favicon.png">
<meta name="theme-color" content="#712cf9">
    <!-- Custom styles for this template -->
  <link href="sign-in.css" rel="stylesheet">
</head>
<body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form method="POST" action="">
    <img class="mb-4" src="assets/img/favicon.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <?php if(isset($message)){ ?>
        <div>
          <h5 style="color: red;"><?php echo $message; ?></h5>
        </div>
      <?php } ?>
    <div class="form-floating">
      <input type="email" class="form-control" name="Email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="Mot_de_passe" id="floatingPassword" placeholder="Votre mot de passe">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
<!--       <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label> -->
      <a href="#" title="">Creer un compte</a>
    </div>
    <div class="col">
      <a class="w-30 btn btn-lg btn-primary"  href="index.php" title="">Retour</a>
      <button class="w-50 btn btn-lg btn-success" name="send" type="submit">Login</button>
    </div>
    <!-- <p class="mt-5 mb-3 text-muted">Email = root@root / Password = root</p> -->
  </form>
</main>



    
  </body>
</html>