<?php
$host = 'localhost';
$dbname = 'pdoposts';
$user = 'root';
$password = '';

// set DSN
$dsn = "mysql:host=$host;dbname=$dbname";
// create a PDO instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
// PDO Query
// $stmt = $pdo->query('SELECT * FROM posts');

// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
// echo $row['title'] . "<br>";
// }

// while($row = $stmt->fetch(PDO::FETCH_OBJ)){
//     echo $row->title . "<br>";
//     }

// while($row = $stmt->fetch(PDO::FETCH_OBJ)){
//     echo $row->title . "<br>";
//     }

#PREPARED STATEMENTS(prepare & execute)


//UNSAFE
// $sql = "SELECT * FROM posts WHERE author = $author";

//FETCH MULTIPLE POSTS
// When using prepared statements there are two ways to do it, you can use;
// positional parameters or you can use;
// Named parameters.

// User Input
$author = 'brad';
$is_published = true;
$id = 1;

//  positional params
// $sql = "SELECT * FROM posts WHERE author = ?";
// when we use the question mark(just know that its a positional parameter).
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$author]);
// $posts = $stmt->fetchAll();

// NAMED Params
// $sql = "SELECT * FROM posts WHERE author = :author && is_published = :is_published";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['author' => $author, 'is_published' => $is_published]);
// $posts = $stmt->fetchAll();

// // var_dump($posts);
// foreach($posts as $post){
//     echo $post->title . '<br>';
// }

// FETCH SINGLE POST
// $sql = "SELECT * FROM posts WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);
// $post = $stmt->fetch();

// echo $post->body;

// GET ROW COUNT
$stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');