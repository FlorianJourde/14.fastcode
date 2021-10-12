<?php
include 'header.php';
include 'functions.php';
include 'navbar.php';

// session_start();
// $_SESSION['firstname'] = $user['firstname'];
// header('location:index.php');
?>

<div class="container page">

  <?php 

  // var_dump($_POST);
  // var_dump($_SESSION);
  // var_dump($_FILES);
  $users = getUsers();

  if(isset($_SESSION['users']) && !empty($_SESSION['users'])) {
    // var_dump($users);
    if (isset($_POST) && !empty($_POST)) {
      $title = $_POST['title'];
      $content = $_POST['content'];
      $user_id = $_SESSION['users']['id'];
      
      // var_dump($user_id);
      // };
      
      if(isset($_FILES) && !empty($_FILES)) {
        $upload_dir = "images/";
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
        $prefix = uniqid();
        $destination = $upload_dir.$prefix.$img_name;
        $new_image = $prefix.$img_name;
        move_uploaded_file($tmp_name, $destination);
        // $image = $destination;
        // var_dump($new_image);
        addArticle($title, $user_id, $new_image, $content);
      };
    }
  } else {
    header('location:login.php?status=danger&message=authenticated user only');
  }

  // if(isset($_SESSION['firstname']) && !empty($_SESSION['firstname'])) {
  //   if(isset($_FILES) && !empty($_FILES)) {
  //     $upload_dir = "images/";
  //     $tmp_name = $_FILES['image']['tmp_name'];
  //     $img_name = $_FILES['image']['name'];
  //     $prefix = uniqid();
  //     $destination = $upload_dir.$prefix.$img_name;
  //     move_uploaded_file($tmp_name, $destination);  
  //   }
  // } else {
  //   header('location:login.php?status=danger&message=authenticated user only');
  // }
  ?>

  <!-- <div class="row"> -->
    <h3>Ajouter un article</h3>
  <!-- </div> -->
  <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Titre de l'article</label>
    <input class="form-control" type="text" name="title" id="title">
  </div class="form-group">
    <label for="image">Image à la une</label>
    <input class="form-control" type="file" name="image" id="image">
  <div class="form-group">
    <label for="content">Contenu de l'article</label>
    <textarea class="form-control" name="content"></textarea>
  </div>
    <!-- <div class="form-group">
      <label for="user">Auteur</label>
      <select name="user" class="form-control" id="user">
        <?php foreach ($users as $user) { ?>
          <option value="<?php echo $user['id'];?>"><?php echo $user['nickname'];?></option>
        <?php } ?>
      </select>
    </div> -->
    <div class="row">
      <input class="submit-btn btn-dark" type="submit" value="Envoyer">
    </div>
  </form>

</div>

<?php include 'footer.php'?>