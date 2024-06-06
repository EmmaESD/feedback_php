<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="form">
            <?php require_once './parts/form.php'?>
        </div>
        <div class="postlist">
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
                </div>
            <?php endforeach ?>
        </div>
    </div>    
</body>
</html>