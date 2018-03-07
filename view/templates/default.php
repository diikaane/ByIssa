
<!DOCTYPE html>
<html lang="fr">

<head>
<?php include('include/head.php') ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <?php include('include/nav.php') ?>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <?php echo $content ; ?>
    </div>
  </div>
  <?php include ('include/footer.php'); ?>
</body>

</html>
