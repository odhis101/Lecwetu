
<div class="lecReviewsHero">
    <p class="reviewsTitle">Lecturer <span>Reviews</span></p>
    <?php
    $sql2 = "SELECT * FROM ratings  WHERE proff_id = '$id'"; // thats works barely we also need to insert this when the user is rating 
    $res2 = mysqli_query($conn,$sql2);
    $count2 =mysqli_num_rows($res2);
    
    if($count2 > 0){
        // we have data
        if ($row4['REVIEWERS'] == 0){
            echo '<p class="noReviews">No reviews yet</p>';
        }

        while($rows= mysqli_fetch_assoc($res2))
        {
            
            $name2 = $rows ['username'];
            $ratings = $rows['rating'];
            $comments = $rows['comments'];
            
            
            
    ?>
   
                <!--LECTURER REVIEW -->
                <div class="lecReview">
                    <div class="usersRating">
                    <?php echo  $ratings ?>
                    </div>
                    <div class="ratingContent">
                        <p id="userName"> <?php echo $name2 ?></p>
                        <p id="userComments"> <?php echo  $comments ?></p>
                    </div>
                </div>


<?php

                    }
                }
                else{
                    ?>
                     <div class="lecReview">
                        <p class="noreviews">No reviews yet  </p>
                        <br> <br />
                        <p class="noreviews">Dont be shy, be our first   </p>
                    </div>
                </div>
                    <?php
                }
                ?>