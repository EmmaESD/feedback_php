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
<?php
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'desc';

switch ($filter) {
    case 'asc':
        $orderBy = "date ASC";
        break;
    case 'most':
        $orderBy = "note DESC";
        break;
    case 'least':
        $orderBy = "note ASC";
        break;
    default:
        $orderBy = "date DESC";
        break;
}

$connectDatabase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");
$request = $connectDatabase->prepare("SELECT * FROM messages ORDER BY $orderBy");
$request->execute();
$messages = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<form id="filterForm" method="GET" action="">
    <select name="filter" class="form-select" onchange="submitForm()" aria-label="Order by date">
        <option value="desc" <?= $filter == 'desc' ? "selected" : "" ?>>Derniers avis</option>
        <option value="asc" <?= $filter == 'asc' ? "selected" : "" ?>>Premiers avis</option>
        <option value="most" <?= $filter == 'most' ? "selected" : "" ?>>Les plus populaires</option>
        <option value="least" <?= $filter == 'least' ? "selected" : "" ?>>Les moins populaires</option>
    </select>
</form>
<script>
    function submitForm() {
        document.getElementById('filterForm').submit();
        console.log('test submit')
    }
</script>
        </div>
        <div class="postlist">
            <?php require_once './parts/post-list.php' ?>
        </div>
    </div>    
</body>
</html>
