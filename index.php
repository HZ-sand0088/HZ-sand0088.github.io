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
                <p>But this isn't just any kind of portfolio.. This is an <span class="rainbow">IT portfolio!</span></p>
                <p class="spin">Here, you'll be able to see my progression, where I get stuck, what I made, and my thoughts about IT</p>
                <h2>What you'll find here?</h2>
                <ul class="clean-list">
                    <li><a href="dashboard.php" class="internal-link"><p>My progression in my first year of HBO ICT.</p></a></li>
                    <li><a href="profile.php" class="internal-link"><p>Information about myself, like my hobbies.</p></a></li>
                    <li><a href="why-it.php" class="internal-link"><p>Why I chose IT/Software Developer as my profession.</p></a></li>
                    <li><a href="blog.php" class="internal-link"><p>Be able to read my thoughts about school, IT, and it's development</p></a></li>
                    <li><a href="future-me.php" class="internal-link"><p>Read what I'm planning for my future</p></a></li>
                </ul>
            </div>
        </main>
        <?php include __DIR__ . '/elements/footer.php'; ?>
    </body>
</html>
