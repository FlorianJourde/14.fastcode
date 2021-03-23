<?php
require 'functions.php';

if(isset($_POST) && !empty($_POST)) {
    $id = $_POST['id'];
    $pseudo = $_POST['pseudo'];
    $comment = $_POST['comment'];
    addComment($id, $pseudo, $comment);
};

$comments = getArticleComments($id);

foreach($comments as $comment) { ?>
  <div class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $comment['pseudo']?></h5>
      <small><?php echo $comment['date']?></small>
    </div>
  </div>
<?php } ?>