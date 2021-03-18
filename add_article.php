<?php
include 'header.php';
include 'functions.php';
include 'navbar.php';
?>

<div class="container page">
  <!-- <div class="row header"> -->
    <h3>Ajouter un article</h3>
  <!-- </div> -->
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Email</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="password">Mot de passe</label>
      <input name="password" type="password" class="form-control" id="password" placeholder="Mot de passe">
    </div>
    <button type="submit" class="btn btn-dark">Connexion</button>
  </form>
</div>

<?php include 'footer.php'?>