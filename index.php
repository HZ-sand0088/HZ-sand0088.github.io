<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="/resources/logo.png">
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
                <p>Hier vertel ik over mijn verleden, mijn huidige schoolcarrière en mijn toekomstplannen. Ook deel ik mijn gedachten en ervaringen die daarbij horen.</p>
                <h2>Wat kan je hier vinden?</h2>
                <article class="img-grid">
                    <a href="dashboard.php" class="internal-link">
                        <h3>Mijn voortgang</h3>
                        <p>Mijn voortgang in het eerste jaar van HBO-ICT op HZ</p>
                        <p class="fake-link">Bekijk pagina</p>
                    </a>
                    <a href="profile.php" class="internal-link">
                        <h3>Over mij</h3>
                        <p>Informatie over wie ik ben, zoals mijn verleden en mijn hobbies.</p>
                        <p class="fake-link">Bekijk pagina</p>
                    </a>
                    <a href="why-it.php" class="internal-link">
                        <h3>Waarom ICT?</h3>
                        <p>Waarom ik voor HBO ICT heb gekozen als werkpad.</p>
                        <p class="fake-link">Bekijk pagina</p>
                    </a>
                    <a href="blog.php" class="internal-link">
                        <h3>Mijn blog</h3>
                        <p>Mijn gedachtes over mijn keuzes in beeld te kunnen brengen door mijn blog.</p>
                        <p class="fake-link">Bekijk pagina</p>
                    </a>
                    <a href="future-me.php" class="internal-link">
                        <h3>Mijn toekomst</h3>
                        <p>En mijn plannen over mijn toekomst te kunnen lezen.</p>
                        <p class="fake-link">Bekijk pagina</p>
                    </a>
                    <a href="mission.php" class="internal-link">
                        <h3>Mijn missie</h3>
                        <p>Mijn persoonlijke leerdoelen, SWOT-analyse en mijn sterke en zwakke punten.</p>
                        <p class="fake-link">Bekijk pagina</p>
                    </a>
                </article>
            </div>
        </main>
        <?php include __DIR__ . '/elements/footer.php'; ?>
    </body>
</html>
