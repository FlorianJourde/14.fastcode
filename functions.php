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

function getImages() {
  $connection = db_connect();
  $query = 'SELECT `image` FROM articles';
  $stmt = $connection->query($query);
  $results = $stmt->fetch();
  // var_dump($results);
  return $results['image'];
}

function getTitle() {
  $connection = db_connect();
  $query = 'SELECT `title` FROM articles';
  $stmt = $connection->query($query);
  $results = $stmt->fetch();
  // var_dump($results);
  return $results;
}

function getContent() {
  $connection = db_connect();
  $query = 'SELECT `content` FROM articles';
  $stmt = $connection->query($query);
  $results = $stmt->fetch();
  // var_dump($results);
  return $results;
}

function getArticles() {
  $connection = db_connect();
  $query = 'SELECT * FROM articles';
  $stmt = $connection->query($query);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $results;
}