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
  WHERE users.id =' . $id;
  $stmt = $connection->query($query);
  $results = $stmt->fetch();
  return $results;
}

function addUser($lastname, $firstname, $nickname, $password, $email) {
  $con = db_connect();
  $query = "INSERT INTO users (id, lastname, firstname, nickname, password, email, gender, inscription) VALUES (null, '$lastname', '$firstname', '$nickname', '$password', '$email', 'M', '2021-03-05')";
  // var_dump($query);
  $con->query($query);
}