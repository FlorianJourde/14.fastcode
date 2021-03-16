<?php include 'header.php'?>
<?php include 'functions.php'?>

<?php $categories = getCategories(); ?>
<div class="row">
  <?php foreach($categories as $category) {
    // $stagiairesBrand = getBrands($stagiaire['id']); ?>
    <h5><a href="category.php?id=<?php echo $category['id']; ?>" class="category"><?php echo $category['name'] ?></h5></a>
  <?php } ?>
</div>



<div class="row">
  <?php $image = getImages();
  ?>
  <img src="images/<?php echo $image ?>" alt="">
</div>


  
<?php include 'footer.php'?>