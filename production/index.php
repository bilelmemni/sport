<?php




include "../production/classe/utilisateur.php";
$Utilisateur = new Utilisateur();

if (isset($_POST['auth'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($Utilisateur->auth($email, $pass)) {
        header("location: listeU.php");
        exit();
    } else {
        echo "Email ou mot de passe incorrect.";
        // Ou rediriger vers une page de connexion avec un message d'erreur
        // header("location: login.php?error=invalid_credentials");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Salle de sport | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Connexion</h1>
              <center>   <form method="post" action="">
                                        <div class="row">
                                        
                                   
                                           
                                            <div class="form-group col-12">
                                                <label for="inputMaxParticipants">Email</label>
                                                <input name="email" type="texte" class="form-control" id="inputMaxParticipants" placeholder="Email">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="inputMaxParticipants">Password</label>
                                                <input name="pass" type="text" class="form-control" id="inputMaxParticipants" placeholder="Password">
                                            </div>
                                            
                                         
                                            <div class="form-group col-12 text-center">
                                                <button type="submit" name="auth" class="btn btn-primary">se connecter</button>
                                            </div>
                                        </div>
                                    </form>
                                    </center>

              <div class="clearfix"></div>

              <div class="separator">
             

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Salle de sport</h1>
                </div>
              </div>
            </form>
          </section>
        </div>

      
      </div>
                                        
                                    </form>
    </div>
  </body>
</html>
