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
        <div class="button-tri">
            <button><a href="./scripts/tri-script.php">Trier par date</a></button>
            <button><a href="./scripts/tri-script.php">Trier par note</a></button>
        </div>
        <div class="postlist">
            <?php require_once './parts/post-list.php'?>
        </div>
    </div>    
</body>
</html>