<?php include 'header.php'?>
<?php include 'functions.php'?>


<div class="background-color"></div>
<div class="background"></div>

<div class="container navbar">
<?php $categories = getCategories(); ?>
<div class="row">
  <div class="col-4 navbar-title">
    <h5><span style="color:red">&#60;</span> <span style="color: #197bee;"> fastcode </span><span style="color:green">&#47; </span><span style="color:red">&#62;</span></h5>
  </div>
  <div class="col-8 navbar-categories">
    <?php foreach($categories as $category) { ?>
      <h6><a href="category.php?id=<?php echo $category['id']; ?>" class="category"><?php echo $category['name'] ?></h5></a>
      <?php } ?>
    </div>
  </div>
</div>

<div class="container">
  <div class="row header">
    <h3>« Rien ne sert de courir... »</h3>
    <h5>Il faut presser "Ctrl" !</h5>
  </div>
</div>
  
<div class="container page">
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