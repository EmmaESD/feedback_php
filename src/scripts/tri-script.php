<?php 
try {
    $connectDatabase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");
    $connectDatabase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $order = 'DESC';
    $sql = 'SELECT * FROM messages ORDER BY note ' . $order;
    $request = $connectDatabase->query($sql);   

    $fetch = $request->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les résultats pour vérifier le tri
    foreach ($fetch as $message) {
        echo 'Note : ' . $message['note'] . '<br>';
        echo 'Contenu : ' . $message['content'] . '<br><br>';
    }

    // Redirection après affichage si nécessaire
    header('Location: ../index.php?success=Posts triés par notes !');

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
