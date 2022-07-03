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
<?php include ("components/navbar.php"); ?>


    <!--LECTURERS PAGE-->
    <section class="lecturersPage">
        <div class="pageIntroBox">
            <p>Lecturers</p>
            <p></p>
        </div>
        <?php include ("components/searchTwo.php"); ?>
        <?php include ("components/search.php"); ?>
        <?php #include ("components/filter.php"); ?>


            
        </div>

        <div class="btnTwoHolder">
            <a href="addlecpage.php" class="btnTwo">Add a Lecturer</a>
        </div>

        <div class="lectrurerCardsContainer">
    <?php
    ;
    
    error_reporting(E_ALL ^ E_WARNING);  
    include ("components/displayLec.php"); ?>
        </div>
        <div class="pagination">
        <?php
        $number_of_pages = ceil($number_of_results/$results_per_page); 

        for($page = 1; $page <= $number_of_pages; $page++){
        echo "<a href='lecturers.php?page=$page'>$page</a>";
        }
        ?>

    </section>


</body>
<script src="assets/javascript/main.js"></script>
<script src="assets/javascript/rating.js"></script>
</html>