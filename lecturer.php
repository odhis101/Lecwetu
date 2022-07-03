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
<?php 
error_reporting(E_ALL ^ E_WARNING);  
include ("components/navbar.php");
include ("components/messages.php");
include ("components/displayingLecDetails.php");
?>

   

    <!--LECTURER PAGE-->
    <section class="lecturerPage">
        <div class="pageIntroBox">
            <p>Lecturer</p>
            <p></p>
        </div>

        <div class="lecturerHero">
            <div class="lecturerDetails">
                <h2 id="lecturerName" ><?php echo  $name ?></h2>
                <p><?php echo  $university ?></p>
                <p class="overallRating">Overall Rating <span class="meanRating"><?php echo round($average); ?></span></p>
                <p class="ratingsCount">Number Of Ratings <span><?php echo $reviewers;?></span></p>
                <a href="ratelecpage.php?lec_id=<?php echo $id;?>" class="btnThree">Rate Lecturer</a>
            </div>
            
           <?php
           include("components/userComments.php");
           ?>


    </section>


</body>
<script src="assets/javascript/main.js"></script>
<script src="assets/javascript/lecRating.js"></script>

</html>