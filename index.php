<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/source.js"></script>
  </head>
  <body>
    <?php include 'elements/header.php';?>
    <main>
        <div class="main-content">
            <h1>Mijn Portfolio</h1>
            <p>But this isn't just any kind of portfolio.. This is an<p id="rainbow">IT portfolio!</p> </p>
            <p class="spin">Here, you'll be able to see my progression, where I get stuck, what I made, and my thoughts about IT</p>
            <h2>What you'll find here?</h2>
            <ul id="clean-list">
                <li><a href="dashboard.php" id="internal-link"><p>My progression in my first year of HBO ICT.</p></a></li>
                <li><a href="profile.php" id="internal-link"><p>Information about myself, like my hobbies.</p></a></li>
                <li><a href="why-it.php" id="internal-link"><p>Why I chose IT/Software Developer as my profession.</p></a></li>
                <li><a href="blog.php" id="internal-link"><p>Be able to read my thoughts about school, IT, and it's development</p></a></li>
                <li><a href="future-me.php" id="internal-link"><p>Read what I'm planning for my future</p></a></li>
            </ul>
        </div>
    </main>
    <?php include 'elements/footer.php';?>
  </body>
</html>