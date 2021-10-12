<?php
require 'functions.php';

if(isset($_POST) && !empty($_POST)) {
  $id = $_POST['id'];
  $pseudo = $_POST['pseudo'];
  $title = $_POST['title'];
  $comment = $_POST['content'];
  $article = getArticle($id);
  addComment($id, $pseudo, $title, $comment, $article['id']);
};

$comments = getArticleComments($id);

foreach ($comments as $comment) { ?>
  <div id="comments">
    <div class="row">
      <div class="col-6">
        <h4 id="commenttitle"><?php echo $comment['title'] ?></h4>
      </div>
      <div class="col-6">
        <h6 id="commentdate"><?php echo $comment['date'] ?></h6>
      </div>
    </div>
    <h6 id="comment-nickname"><?php echo $comment['nickname'] ?></h4>
    <span id="comment-content"><?php echo $comment['content'] ?></span>
  </div>
<?php } ?>