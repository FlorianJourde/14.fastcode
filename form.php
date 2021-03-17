<?php
include 'header.php';
include 'functions.php';
include 'navbar.php';

// include 'register.php';
?>

<div class="container page">
<form action="register.php" method="post">
  <div class="form-group">
    <label for="lastname">Nom</label>
    <input name="lastname" type="lastname" class="form-control" id="lastname" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="firstname">Prénom</label>
    <input name="firstname" type="firstname" class="form-control" id="firstname" placeholder="Prénom">
  </div>
  <div class="form-group">
    <label for="nickname">Pseudo</label>
    <input name="nickname" type="nickname" class="form-control" id="nickname" placeholder="Pseudo">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input name="password" type="lastname" class="form-control" id="password" placeholder="Mot de passe">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="lastname" class="form-control" id="email" placeholder="Email">
  </div>
  <button type="submit" class="btn btn-dark">Ajouter</button>
</form>
</div>

<?php include 'footer.php'?>