<?php 
$connectDatabase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");
$request = $connectDatabase->prepare("SELECT * FROM etablishments");
$request->execute();
$etablishments = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($etablishments as $etablishment): ;?>
    <div class="card-etab" >
        <div class="title-img">
            <img src="<?php echo $etablishment['img_url']; ?>" alt="">
            <h1 class="title"><?php echo $etablishment['title'];?></h1>
        </div>
        <h2 class="content-etab"><?php echo $etablishment['content']; ?></h2> 
        <button><a href="./parts/singleEtab.php">commentaire</a></button>
    </div>
<?php endforeach ?>