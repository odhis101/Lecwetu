<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <title>LecWetu</title>
</head>
<body>

    <!--nav-->
<?php include ("components/navbar.php"); ?>

    

    <!--landing page-->
    <section class="landingPage">
        <div class="landingPageHero">
            <h3>Find your <span> Lecturer</span> And Drop a <span>Review</span></h3>
            <form class="searchBar" action="#"method ='POST'>
                <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                <img src="assets/img/search-icon.png" alt="search-icon">
            </button>   
            <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Find Your Lecturer">
            </form>
        </div>
    </section>
</body>
<?php include ("components/search.php"); ?>

<script src="assets/javascript/main.js"></script>
</html>