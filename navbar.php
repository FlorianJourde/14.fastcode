<?php
session_start();
if(isset($_SESSION['firstname'])){
  $user = $_SESSION['firstname'];
};
?>

<div class="container navbar">
<?php $categories = getCategories(); ?>
<div class="row">
<?php
if(isset($user) && !empty($user)) { ?>
<div class="row">
  <div class="col buttons">
    <a href="logout.php">
      <button type="submit" class="btn btn-danger">Se deconnecter</button>
    </a>
  </div>
</div>
<?php }else{ ?>
<div class="row">
  <div class="col buttons">
    <a href="login.php">
      <button type="submit" class="btn btn-dark">Se connecter</button>
    </a>
    <a href="register.php">
      <button type="submit" class="btn btn-dark">S'enregistrer</button>
    </a>
  </div>
</div>
<?php } ?>
</div>
<div class="row">
  <div class="col-4 navbar-title">
    <h5><a href="index.php"><span style="color:red">&#60;</span> <span style="color: #197bee;"> fastcode </span><span style="color:green">&#47; </span><span style="color:red">&#62;</span></a></h5>
  </div>
  <div class="col-8 navbar-categories">
    <?php foreach($categories as $category) { ?>
      <h6><a href="category.php?id=<?php echo $category['id']; ?>" class="category"><?php echo $category['name'] ?></h5></a>
      <?php } ?>
    </div>
  </div>
</div>