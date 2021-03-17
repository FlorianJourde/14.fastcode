<?php
include 'header.php';
include 'functions.php';
include 'navbar.php';
?>

<div class="container page">

<?php
if(isset($_POST) && !empty($_POST)) {
  $post = $_POST;
  // var_dump($post);
  $email = $post['email'];
  $password = $post['password'];
  $user = userConnect($email);
  if(password_verify($password, $user['password'])) {
    echo "Connexion réussie";
  } else {
    echo "Connexion échouée";
  }
}
?>

<!-- <?php var_dump($user); ?> -->
  <h3>Se connecter</h3>
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