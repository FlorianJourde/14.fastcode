<?php 
include 'header.php';
include 'functions.php';
include 'navbar.php';

$id = $_GET["id"];
// $content = getArticlesFromCategory($id);
// echo $content;
?>
  
<div class="container page">

<?php $articles = getArticlesFromCategory ($id); ?>
  <?php foreach ($articles as $article) { ?>
  <div class="row article">
    <img class="col-5 image-article" src="images/<?php echo $article['image'] ?>" alt="">
    <div class="col-7 content-article">
        <h5><a href="article.php?id=<?php echo $article['id']; ?>"><?php echo $article['title'] ?></a></h5>
        <p><a href="article.php?id=<?php echo $article['id']; ?>"><?php echo $article['content'] ?></a></p>
    </div>
  </div>
  <?php } ?>
</div>

<?php include 'footer.php'?>