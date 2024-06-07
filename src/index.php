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
            <div class="title-form">
                <h1>Entrez votre établissement</h1>
                <div class="form">
                    <?php require_once './parts/form-etab.php' ?>
                </div>
            </div>
            <div class="etab-list">
                <?php require_once './parts/etab-list.php' ?>
            </div>
        </div>   
    </body>
</html>
