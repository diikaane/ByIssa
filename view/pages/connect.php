<?php

    session_start();
    require_once dirname(dirname(__DIR__)).'/controller/Implementation/IAdministrateurImpl.php';
    require_once dirname(dirname(__DIR__)).'/controller/Implementation/IClientImpl.php';
    require_once dirname(dirname(__DIR__)).'/controller/Implementation/IComptableImpl.php';
    require_once dirname(dirname(__DIR__)).'/controller/Implementation/IDirecteurImpl.php';
    require_once dirname(dirname(__DIR__)).'/controller/Implementation/IJuristeImpl.php';
    if(isset($_POST['submit'])) {
        $administrateur = new IAdministrateurImpl();
        $erreur = $administrateur->Authentifier($_POST['login'],$_POST['password']);

    }

?>


          <?php

              if(isset($erreur))
              echo "  <div class=\"alert alert-danger\">" . $erreur ."</div>";
          ?>

      <div class="card card-login mx-auto mt-5">
      <div class="card-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="login">Login</label>
            <input class="form-control" id="login" type="text" a placeholder="Enter Login" name="login">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control"  type="password" placeholder="Password" name="password">
          </div>
          </div>
          <input class="form-control" type="submit" name="submit" value="Se Connecter">
        </form>
      </div>
