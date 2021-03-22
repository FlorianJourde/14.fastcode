<?php 
include 'header.php';
include 'functions.php';
include 'navbar.php';

$id = $_GET["id"];
$article = getArticle($id);
$user = getUser($id);
?>
  
<div class="container page">
 <!-- <?php var_dump($id); ?> -->
 <p><?php echo $user['nickname'] ?></p>
 <div class="row header-height">
  <img class="col header-image" src="images/<?php echo $article['image'] ?>" alt="">
  </div>
  <div>
  <h3><?php echo $article['title'] ?></h3>
  <p><?php echo $article['content'] ?></p>
 </div>
</div>

<?php include 'footer.php'?>