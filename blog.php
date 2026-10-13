<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog | Quinten</title>
        <link href="css/style.css" rel="stylesheet">
        <script src="js/source.js"></script>
    </head>
    <body>
        <?php include __DIR__ . '/elements/header.php'; ?>
        <main>
            <div class="main-content">
                <h1>Blog</h1>
                <div class="blogs">
                    <article class="blog-card">
                        <h2>Waarom HBO ICT?</h2>
                        <p>Mijn interesse in ICT begon al op jonge leeftijd, toen mijn moeder een Nintendo Wii kocht voor onze familie.</p>
                        <a href="why-it.php">Lees meer over mijn keuze voor ICT</a>
                    </article>
                    <article class="blog-card">
                        <h2>Mijn missie en SWOT-analyse</h2>
                        <p>Dit jaar wil ik mezelf verder ontwikkelen als zelfstandig programmeur door technische problemen eerst zelf te onderzoeken en op te lossen.</p>
                        <a href="mission.php">Lees mijn missie en SWOT-analyse</a>
                    </article>
                    <article class="blog-card">
                        <h2>Mijn toekomst</h2>
                        <p>Over vier jaar hoop ik een baan te hebben als Software Engineer.</p>
                        <a href="future-me.php">Lees meer over mijn toekomst</a>
                    </article>
                </div>
            </div>
        </main>
        <?php include __DIR__ . '/elements/footer.php'; ?>
    </body>
</html>
