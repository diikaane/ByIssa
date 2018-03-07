<?php
    $_SESSION['login'] = $user ;
    $_SESSION['id'] = $id ;
    $_SESSION['profile'] = $profile ;
?>
<?php if($_SESSION['profile'] == 'juriste') { ?>
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon"></div>
                <div class="mr-5">
                  <form action="" method="POST" id="formListe">
                    <div class="form-group">
                      <label for="login">Lister Les Contrat</label>
                      <input class="form-control" id="login" type="hidden"  name="id" value="<?=$_SESSION['id']?>">
                    </div>
                    <input class="form-control" type="submit" name="submit" value="Lister">
                  </form>
                  <div class="" id="form-content"></div>
                </div>
              </div>
            </div>
        </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon"></div>
                <div class="mr-5">
                  <form action="" method="POST" id="formValide">
                    <div class="form-group">
                      <label for="login">Valider  Contrat</label>
                      <input class="form-control" id="login" type="hidden"  name="id" value="<?=$_SESSION['id']?>">
                    </div>
                    <input class="form-control" type="submit" name="submit" value="Valider">
                  </form>
                  <div id="form-valide"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon"></div>
                <div class="mr-5">
                  <form action="" method="POST" id="formVerif">
                    <div class="form-group">
                      <label for="login">Verifier Contrat</label>
                      <input class="form-control" id="login" type="hidden"  name="id" value="<?=$_SESSION['id']?>">
                    </div>
                    <input class="form-control" type="submit" name="submit" value="Valider">
                  </form>
                  <div id="form-verif"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class=""></i>
                </div>
                <div class="mr-5"></div>
              </div>
            </div>
          </div>
      <script type="text/javascript">
      var form = document.getElementById('formListe');
      var div1 = document.getElementById('form-content');
      form.addEventListener('submit',function(e) {
      e.preventDefault();
      var request = new  XMLHttpRequest();
      request.onreadystatechange = function(){
        if (request.readyState===4) {
          div1.innerHTML = request.responseText;
        }

      }
      var data = new FormData(form);
      request.open('post','view/pages/action/listerContrat.php',true);
      request.send(data);
    });

    var form = document.getElementById('formValide');
    var div = document.getElementById('form-valide');
    form.addEventListener('submit',function(e) {
    e.preventDefault();
    var request = new  XMLHttpRequest();
    request.onreadystatechange = function(){
      if (request.readyState===4) {
        div.innerHTML = request.responseText;
      }

    }
    var data = new FormData(form);
    request.open('post','view/pages/action/VerifContrat.php',true);
    request.send(data);
    })

    var form = document.getElementById('formVerif');
    var div2 = document.getElementById('form-verif');
    form.addEventListener('submit',function(e) {
    e.preventDefault();
    var request = new  XMLHttpRequest();
    request.onreadystatechange = function(){
      if (request.readyState===4) {
        div2.innerHTML = request.responseText;
      }

    }
    var data = new FormData(form);
    request.open('post','view/pages/action/validerContrat.php',true);
    request.send(data);
    })
      </script>
<?php } ?>
<?php if($_SESSION['profile'] == 'comptable') { ?>
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class=""></i>
                </div>
                <div class="mr-5"></div>
              </div>
            </div>
        </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class=""></i>
                </div>
                <div class="mr-5"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class=""></i>
                </div>
                <div class="mr-5"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class=""></i>
                </div>
                <div class="mr-5"></div>
              </div>
            </div>
          </div>
      </div>

<?php } ?>
<?php if($_SESSION['profile'] == 'administrateur') { ?>
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class=""></i>
                </div>
                <div class="mr-5"></div>
              </div>
            </div>
        </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class=""></i>
                </div>
                <div class="mr-5"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class=""></i>
                </div>
                <div class="mr-5"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class=""></i>
                </div>
                <div class="mr-5"></div>
              </div>
            </div>
          </div>
      </div>
<?php } ?>
<?php if ($_SESSION['profile'] == 'directeur') { ?>

  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon"></div>
                <div class="mr-5">
                  <form action="" method="POST" id="formListe">
                    <div class="form-group">
                      <label for="login">Lister Les Contrat</label>
                      <input class="form-control" id="login" type="hidden"  name="id" value="<?=$_SESSION['id']?>">
                    </div>
                    <input class="form-control" type="submit" name="submit" value="Lister">
                  </form>
                  <div class="" id="form-content"></div>
                </div>
              </div>
            </div>
        </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon"></div>
                <div class="mr-5">
                  <form action="" method="POST" id="formValide">
                    <div class="form-group">
                      <label for="login">Valider  Contrat</label>
                      <input class="form-control" id="login" type="hidden"  name="id" value="<?=$_SESSION['id']?>">
                    </div>
                    <input class="form-control" type="submit" name="submit" value="Valider">
                  </form>
                  <div id="form-valide"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon"></div>
                <div class="mr-5">
                  <form action="" method="POST" id="formVerif">
                    <div class="form-group">
                      <label for="login">Liste Contrat à Jour</label>
                      <input class="form-control" id="login" type="hidden"  name="id" value="<?=$_SESSION['id']?>">
                    </div>
                    <input class="form-control" type="submit" name="submit" value="Valider">
                  </form>
                  <div id="form-verif"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class=""></i>
                </div>
                <div class="mr-5">
                  <form action="" method="POST" id="formAnul">
                    <div class="form-group">
                      <label for="login">Annuler Contrat</label>
                      <input class="form-control" id="login" type="hidden"  name="id" value="<?=$_SESSION['id']?>">
                    </div>
                    <input class="form-control" type="submit" name="submit" value="Valider">
                  </form>
                  <div id="form-anul"></div>
                </div>
              </div>
            </div>
          </div>
      <script type="text/javascript">
      var form = document.getElementById('formListe');
      var div1 = document.getElementById('form-content');
      form.addEventListener('submit',function(e) {
      e.preventDefault();
      var request = new  XMLHttpRequest();
      request.onreadystatechange = function(){
        if (request.readyState===4) {
          div1.innerHTML = request.responseText;
        }

      }
      var data = new FormData(form);
      request.open('post','view/pages/action/listerContrat.php',true);
      request.send(data);
    });

    var form = document.getElementById('formValide');
    var div = document.getElementById('form-valide');
    form.addEventListener('submit',function(e) {
    e.preventDefault();
    var request = new  XMLHttpRequest();
    request.onreadystatechange = function(){
      if (request.readyState===4) {
        div.innerHTML = request.responseText;
      }

    }
    var data = new FormData(form);
    request.open('post','view/pages/action/validerContratDirecteur.php',true);
    request.send(data);
    })

    var form = document.getElementById('formVerif');
    var div3 = document.getElementById('form-verif');
    form.addEventListener('submit',function(e) {
    e.preventDefault();
    var request = new  XMLHttpRequest();
    request.onreadystatechange = function(){
      if (request.readyState===4) {
        div3.innerHTML = request.responseText;
      }

    }
    var data = new FormData(form);
    request.open('post','view/pages/action/ListerContratAJour.php',true);
    request.send(data);
    })


    var form = document.getElementById('formAnul');
    var div2 = document.getElementById('form-anul');
    form.addEventListener('submit',function(e) {
    e.preventDefault();
    var request = new  XMLHttpRequest();
    request.onreadystatechange = function(){
      if (request.readyState===4) {
        div2.innerHTML = request.responseText;
      }

    }
    var data = new FormData(form);
    request.open('post','view/pages/action/AnulerContrat.php',true);
    request.send(data);
    })
      </script>

<?php } ?>
