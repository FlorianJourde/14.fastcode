<?php
session_start();
if(isset($_SESSION['users'])){
  $user = $_SESSION['users'];
};
?>

<div class="container navbar">
  <!-- <div class="row"> -->
    <?php $categories = getCategories(); ?>
  <!-- </div> -->
<!-- </div> -->
  <!-- <div class="row"> -->
    <div class="col navbar-title">
      <h5><a href="index.php"><span style="color:red">&#60;</span> <span style="color: #197bee;"> fastcode </span><span style="color:green">&#47; </span><span style="color:red">&#62;</span></a></h5>
    </div>
    <div class="col navbar-categories">
      <?php foreach($categories as $category) { ?>
        <h6><a href="category.php?id=<?php echo $category['id']; ?>" class="category"><?php echo $category['name'] ?></h5></a>
      <?php } ?>
    </div>
      <!-- </div> -->
    <?php if(isset($user) && !empty($user)) { ?>
    <!-- <div class="row"> -->
      <div class="col buttons">
        <a href="logout.php"><button type="submit" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i></button></a>
      </div>
    <!-- </div> -->
    <?php }else{ ?>
    <!-- </div> -->
    <!-- <div class="row"> -->
      <div class="col buttons">
        <a href="login.php"><button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i></button></a>
        <a href="register.php"><button type="submit" class="btn btn-dark"><i class="fas fa-user-plus"></i></button></a>
      </div>
    <!-- </div> -->
    <?php } ?>
  </div>
</div>