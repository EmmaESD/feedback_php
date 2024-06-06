<div class="form">
    <form action="../scripts/createPost-script.php" method="POST">
        <div class="note">
            <input type="radio" name="note" value="1" id="note1" required>
            <label for="note1">1</label>
            <input type="radio" name="note" value="2" id="note2" required>
            <label for="note2">2</label>
            <input type="radio" name="note" value="3" id="note3" required>
            <label for="note3">3</label>
            <input type="radio" name="note" value="4" id="note4" required>
            <label for="note4">4</label>
            <input type="radio" name="note" value="5" id="note5" required>
            <label for="note5">5</label>
        </div>
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your email">
        <textarea name="content" placeholder="your message" id="content"></textarea>
        <input type="submit" value="Envoyer">
    </form>
</div>