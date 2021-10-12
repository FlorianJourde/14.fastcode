<?php
include 'header.php';
include 'functions.php';
include 'navbar.php';
?>

<div class="container page">

  <?php 
  if(isset($_GET) && !empty($_GET)){ ?>
    <div class="text-center alert alert-<?php echo $_GET['status']; ?>" role="alert">
      <?php echo "Erreur !"; ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php } ?>

  <?php
  if(isset($_POST) && !empty($_POST)) {
    $post = $_POST;
    $email = $post['email'];
    $password = $post['password'];
    $user = userConnect($email);
    if(password_verify($password, $user['password'])) {
      session_start();
      $_SESSION['users'] = [
        'id' => $user['id'],
        'lastname' => $user['lastname'],
        'firstname' => $user['firstname'],
        'nickname' => $user['nickname'],
        'email' => $user['email']
    ];
      header('location:index.php');
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
      <input name="email" type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
      <label for="password">Mot de passe</label>
      <input name="password" type="password" class="form-control" id="password">
    </div>
    <div class="row">
      <button type="submit" class="submit-btn btn-dark">Connexion</button>
    </div>
  </form>
</div>

<?php include 'footer.php'?>