<?php
    $connectDatabase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");
    $request = $connectDatabase->prepare("SELECT * FROM messages");
    $request->execute();
    $messages = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($messages as $message): ;?>
    <div class="card" >
        <h1 class="note"><?php echo $message['note'];?></h1>
        <h2 class="name"><?php echo $message['name']; ?></h2>
        <h3 class="email"><?php echo $message['email']; ?></h3>
        <p class="content"><?php echo $message['content']; ?></p>
        <h4 class="date"><?php echo $message['date']?></h4>   
    </div>
<?php endforeach ?>