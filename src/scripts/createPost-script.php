<?php 

$connectDatabase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");

$request = $connectDatabase->prepare("INSERT INTO messages (name, email, content, note) VALUES (:name, :email, :content, :note)");

$request->bindParam(':name', $_POST['name']);
$request->bindParam(':email', $_POST['email']);
$request->bindParam(':content', $_POST['content']);
$request->bindParam(':note', $_POST['note']);

$request->execute();

header('Location: ../index.php?sort=');
?>