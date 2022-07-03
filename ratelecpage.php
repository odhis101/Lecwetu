<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fonts.css">

    <title>Rate Your Lecturer</title>
</head>
<body>
<?php include ("components/navbar.php"); 
      include ("components/displayingLecDetails.php");
      include ("components/check_repeated_ratings.php");
?>  
  <!--section-->
    <section class="rateLecPage">
        <h4>Rate Lecturer: <span><?php echo  $name ?></span></h4>
        <form action="" action="#"method ='POST' class="rateLecForm">
            <div>
                <p>Score Your Lecturer: 0-100</p>
                <d  iv>
                    <div class="scoreSelectionContainer">
                        <div class="scoreSelection">10</div>
                        <div class="scoreSelection">20</div>
                        <div class="scoreSelection">30</div>
                        <div class="scoreSelection">40</div>
                        <div class="scoreSelection">50</div>
                        <div class="scoreSelection">60</div>
                        <div class="scoreSelection">70</div>
                        <div class="scoreSelection">80</div>
                        <div class="scoreSelection">90</div>
                        <div class="scoreSelection">100</div>
                    </div>
                    <div class="selectedScore"></div>
                </div>
                <input type="hidden" name = "score" value="" id = "text1">
            </div> 
            <div>
               <p>Drop a Review</p> 
               <input type="text" name = "comment" >
            </div>

            <button class="btnFour" type="submit" name="submit">Submit</button>
        </form>
        <?php include("components/submit_rating.php"); ?>
    </section>

<script src="assets/javascript/userrating.js"></script>
<script src="assets/javascript/main.js"></script>
</body>
</html>