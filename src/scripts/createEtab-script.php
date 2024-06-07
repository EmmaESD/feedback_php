<?php 

$connectDatabase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");

$request = $connectDatabase->prepare("INSERT INTO etablishments (title, content, img_url) VALUES (:title, :content, :img_url)");

$request->bindParam(':title', $_POST['title']);
$request->bindParam(':img_url', $_POST['img_url']);
$request->bindParam(':content', $_POST['content']);

$request->execute();

header('Location: ../index.php?success=Nouvel etablissement ajouté !');
?>