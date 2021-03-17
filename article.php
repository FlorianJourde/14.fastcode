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
  
<div class="container page">

</div>

  
<?php include 'footer.php'?>