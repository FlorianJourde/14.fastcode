<?php include 'header.php'?>
<?php include 'functions.php'?>
<?php include 'article.php'?>

<?php $categories = getCategories(); ?>
<div class="row">
  <?php foreach($categories as $category) {
    ?>
    <h5><a href="category.php?id=<?php echo $category['id']; ?>" class="category"><?php echo $category['name'] ?></h5></a>
  <?php } ?>
</div>


<?php $image = getImages();
  ?>
<div class="row">
   <a href="article.php?id=<?php echo $image['id']; ?>"> <img src='images/<?php echo $image ?>' alt=""></a>
</div>


<?php include 'footer.php'?>