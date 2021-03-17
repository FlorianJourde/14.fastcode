<?php
include 'header.php';
include 'functions.php';
include 'navbar.php';
?>

<div class="container">
  <div class="row header">
    <h3>« Rien ne sert de courir... »</h3>
    <h5>Il faut presser "Ctrl" !</h5>
  </div>
</div>
  
<div class="container page">
  <a href="form.php">
    <button type="submit" class="btn btn-dark">Ajouter un utilisateur</button>
  </a>
  <?php $articles = getArticles (); ?>
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