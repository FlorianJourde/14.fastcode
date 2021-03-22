<?php 
include 'header.php';
include 'functions.php';
include 'navbar.php';

$id = $_GET["id"];
$article = getArticle($id);
$user = getUser($id);
$comments = getComments($id);

?>     
  
<div class="container page">
    <!-- <?php var_dump($id); ?> -->
    <p><?php echo $user['nickname'] ?></p>
    <p><?php echo $user['date'] ?></p>

    <div class="row header-height">
        <img class="col header-image" src="images/<?php echo $article['image'] ?>" alt="">
    </div>
    <div>
        <h3><?php echo $article['title'] ?></h3>
        <p><?php echo $article['content'] ?></p>
    </div>
    
    <?php foreach ($comments as $comment) { ?>
        <div id="comment">
            <div class="row">
                <div class="col-6">
                    <h5 id="commenttitle"><?php echo $comment['title'] ?></h5>
                </div>
                <div class="col-6">
                    <h6 id="commentdate"><?php echo $comment['date'] ?></h6>
                </div>
            </div>
    
            <h4><?php echo $comment['nickname'] ?></h4>
            <p><?php echo $comment['content'] ?></p> 
        </div>
            <?php } ?>

            
    
    
  

</div>

<?php include 'footer.php'?>