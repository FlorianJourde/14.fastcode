<?php
include 'header.php';
include 'functions.php';
include 'navbar.php';

// $id = $_GET['id'];

$users = getUsers();
$article = addArticle($title, $content);

if(isset($_POST)) {
  $title = $_POST['title'];
  $content = $_POST['content'];
  
  if($title != "" && $content != "") {
    addArticle($title, $content);
  }
}

// function db_connect() {
//   include 'connection.php';
//   try
//   {
//     $db = new PDO('mysql:host=localhost;dbname=fastcode', $user, $pass);
//     return $db;
//   }
//   catch(PDOException $e)
//   {
//     print "Error ! " . $e->getMessage() . "<br/>";
//     die();
//   }
// }
?>

<div class="container page">
  <!-- <div class="row"> -->
    <h3>Ajouter un article</h3>
  <!-- </div> -->
  <form action="" method="post">
    <div class="form-group">
      <label for="title">Titre</label>
      <input name="title" class="form-control" id="title" value="<?php echo $article['title'] ?>">
    </div>
    <div class="form-group">
      <label for="story">Contenu de l'article</label>
      <textarea id="story" class="form-control" name="story"><?php echo $article['content'] ?></textarea>
    </div>
    <div class="form-group">
      <label for="user">Auteur</label>
      <select name="user" class="form-control" id="user">
        <?php foreach ($users as $user) { ?>
          <option value="<?php echo $user['user_id'];?>"><?php echo $user['nickname'];?></option>
        <?php } ?>
      </select>
    </div>
    <button type="submit" class="btn btn-dark">Connexion</button>
  </form>
</div>

<?php include 'footer.php'?>