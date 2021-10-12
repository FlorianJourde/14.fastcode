<?php

function db_connect() {
  include 'connection.php';
  try
  {
    $db = new PDO('mysql:host=localhost;dbname=fastcode', $user, $pass);
    return $db;
  }
  catch(PDOException $e)
  {
    print "Error ! " . $e->getMessage() . "<br/>";
    die();
  }
}

function getCategories() {
  $connection = db_connect();
  $query = 'SELECT * FROM categories';
  $stmt = $connection->query($query);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $results;
}

function getArticles() {
  $connection = db_connect();
  $query = 'SELECT * FROM articles';
  $stmt = $connection->query($query);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // var_dump($results);
  return $results;
}

function getArticle($id) {
  $connection = db_connect();
  $query = 'SELECT * FROM articles
  WHERE id =' . $id;
  $stmt = $connection->query($query);
  $results = $stmt->fetch();
  return $results;
}

function getUser($id) {
  $connection = db_connect();
  $query = 'SELECT * FROM users
  INNER JOIN articles ON articles.user_id = users.id
  WHERE articles.id =' . $id;
  $stmt = $connection->query($query);
  $results = $stmt->fetch();
  return $results;
}

function getUsers() {
  $connection = db_connect();
  $query = "SELECT * FROM users";
  $stmt = $connection->query($query);
  $results = $stmt->fetchAll();
  return $results;
}

function addUser($lastname, $firstname, $nickname, $password, $email) {
  $con = db_connect();
  $query = "INSERT INTO users (id, lastname, firstname, nickname, password, email, gender, inscription)
  VALUES (null, '$lastname', '$firstname', '$nickname', '$password', '$email', 'M', '2021-03-05')";
  // var_dump($query);
  $con->query($query);
}

function userConnect($email) {
  $con = db_connect();
  $query = "SELECT * FROM users
  WHERE users.email = '$email'";
  $stmt = $con->query($query);
  $results = $stmt->fetch(PDO::FETCH_ASSOC);
  return $results;
}

function getArticlesFromCategory($id) {
  $con = db_connect();
  $query = "SELECT articles.id,  articles.title, articles.image, articles.content  FROM articles
  INNER JOIN articles_categories
  ON articles_categories.article_id = articles.id
  INNER JOIN categories
  ON articles_categories.category_id = categories.id
  WHERE articles_categories.category_id = " . $id;
  $stmt = $con->query($query);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $results;
  
}

function getComments($id) {
  $con = db_connect();
  $query = "SELECT comments.nickname, comments.date, comments.title, comments.content  FROM comments
  INNER JOIN articles
  ON articles.id = comments.article_id
  WHERE article_id = " .$id ;
  $stmt = $con->query($query);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  //  var_dump($results);
  return $results;
}

function addArticle($title, $user_id, $image, $content) {
  $con = db_connect();
  $query =
    "INSERT INTO articles (id, title, user_id, date, image, content)
    VALUES (null, '$title', '$user_id', NOW(), '$image', '$content')";
    $con->query($query);
}

function getArticleComments($id) {
  $con = db_connect();
  $query = 'SELECT * FROM comments
   WHERE comments.article_id = :id';
  $stmt = $con->prepare($query);
  $stmt->bindValue(':id', $id);
  $stmt -> execute();
  $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $comments;
}

// function addComment($id, $nickname, $comment, $article_id) {
//   $con = db_connect();
//   $query = "INSERT INTO comments (id, nickname, content, NOW(), article_id)
//   VALUES (null, '$nickname', '$comment', NOW(), '$article_id')";
//   // $stmt = $con ->prepare($query);
//   $con->query($query);
//   // $stmt->bindValue(':article_id', $id, PDO::PARAM_INT);
//   // $stmt->execute();
// }

// function addUser($lastname, $firstname, $nickname, $password, $email) {
//   $con = db_connect();
//   $query = "INSERT INTO users (id, lastname, firstname, nickname, password, email, gender, inscription)
//   VALUES (null, '$lastname', '$firstname', '$nickname', '$password', '$email', 'M', '2021-03-05')";
//   // var_dump($query);
//   $con->query($query);
// }

function addComment($id, $pseudo, $title, $comment) {
  $con = db_connect();
  $query = "INSERT INTO comments (id, nickname, title, content, article_id)
  VALUES (null, :nickname, :title, :content, :article_id)";
  $stmt = $con ->prepare($query);
  $stmt->bindValue(':article_id', $id, PDO::PARAM_INT);
  $stmt->bindValue(':nickname', $pseudo, PDO::PARAM_STR);
  $stmt->bindValue(':title', $title, PDO::PARAM_STR);
  $stmt->bindValue(':content', $comment, PDO::PARAM_STR);
  $stmt->execute();
}

// function getArticles() {
//   $connection = db_connect();
//   $query = 'SELECT * FROM articles';
//   $stmt = $connection->query($query);
//   $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//   var_dump($results);
//   return $results;
// }
