<?php
include 'header.php';
include 'functions.php';
include 'navbar.php';

if(isset($_POST) && !empty($_POST)) {
  $post = $_POST;
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $nickname = $_POST['nickname'];
  $plainPassword = $_POST['password'];
  $password = password_hash($plainPassword, PASSWORD_BCRYPT);
  $email = $_POST['email'];
  // var_dump($post);
  addUser($lastname, $firstname, $nickname, $password, $email) ;
}

?>

<div class="container page">
  <?php var_dump($post) ?>
</div>

<?php include 'footer.php'?>