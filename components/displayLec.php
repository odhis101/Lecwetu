<?php
$results_per_page = 14;
$search = $_SESSION["add"];

if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 1;
}

$this_page_first_result = ($page-1)*$results_per_page;

$sql_check = "SELECT * FROM professors WHERE name LIKE'%$search%' LIMIT $this_page_first_result, $results_per_page";
$result_check = mysqli_query($conn,$sql_check);

/*--------------------------------------------------
  new query to get the total number of results


*/
# $sql = "SELECT * FROM professors WHERE name LIKE'%$search%'"; # this is the search that we got from index.php ( for some reason it doesn't work')
$sql = "SELECT * FROM professors WHERE name LIKE'%{$search}%'";
$number_of_results = mysqli_num_rows(mysqli_query($conn, $sql));
$row = mysqli_num_rows($result_check);

if($row> 0){

    while($rows=mysqli_fetch_assoc($result_check))
    {
  
    
         $id = $rows ['id'];
         $name = $rows ['name'];  
         $university = $rows ['university'];
         $sql2 = "SELECT AVG(rating) AS avg FROM ratings where proff_id =  $id ";
         $avg =  mysqli_query($conn, $sql2);
         $row2 = mysqli_fetch_assoc($avg);
         $sql4 = "SELECT LENGTH(rating) AS REVIEWERS FROM `ratings`WHERE proff_id = $id";
         $reviewers = mysqli_query($conn, $sql4);
         $row4 = mysqli_fetch_assoc($reviewers);
         
         if ($row4['REVIEWERS'] == 0) {
            $reviewers = 0;
            $average = 0;
    
        }
        else {
            $reviewers = $row4['REVIEWERS'];
            $average =$row3['avg'];
        }
        


?>
 <a class="lecHref" href="lecturer.php?lec_id=<?php echo $id; ?>"> <!--.............LECTURER CARD...........-->
                <div class="lecturerCard">
                    <h2><?php echo  $name ?></h2>
                    <p><?php echo $reviewers;?> Reviews</p>
                    <p><?php echo  $university ?></p>
                    <div class="ratingContainer">
                        <div class="rating"><?php echo $row2['avg']; ?></div>
                    </div>
                    <div class="ratingColorBox"></div>
                </div>
            </a>
            <?php

    }}
    else{
        echo "No results found";
    }
    
    ?>  