<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mijn Portfolio | Quinten</title>
        <link href="css/style.css" rel="stylesheet">
        <script src="js/source.js"></script>
    </head>
    <body>
        <?php include __DIR__ . '/elements/header.php'; ?>
        <main>
            <div class="main-content">
                <h1>Mijn Portfolio</h1>
                <p>Maar dit is niet zomaar een portfolio.. dit is een <span class="rainbow">IT portfolio!</span></p>
                <p class="spin">Hier vertel ik over mijn verleden, mijn huidige schoolcarrière en mijn toekomstplannen. Ook deel ik mijn gedachten en ervaringen die daarbij horen.</p>
                <h2>What you'll find here?</h2>
                <ul class="clean-list">
                    <li><a href="dashboard.php" class="internal-link"><p>Mijn voortgang in het eerste jaar van HBO-ICT op HZ</p></a></li>
                    <li><a href="profile.php" class="internal-link"><p>Informatie over wie ik ben, zoals mijn verleden en mijn hobbies.</p></a></li>
                    <li><a href="why-it.php" class="internal-link"><p>Waarom ik voor HBO ICT heb gekozen als werkpad.</p></a></li>
                    <li><a href="blog.php" class="internal-link"><p>Mijn gedachtes over mijn keuzes in beeld te kunnen brengen door mijn blog.</p></a></li>
                    <li><a href="future-me.php" class="internal-link"><p>En mijn plannen over mijn toekomst te kunnen lezen.</p></a></li>
                </ul>
            </div>
        </main>
        <?php include __DIR__ . '/elements/footer.php'; ?>
    </body>
</html>
