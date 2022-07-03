<?php
    $id =$_GET['lec_id'];
    $sql = "SELECT * FROM professors WHERE id = '$id'";
    $res = mysqli_query($conn,$sql);
    $sql4 = "SELECT LENGTH(rating) AS REVIEWERS FROM `ratings`WHERE proff_id = $id";
    $reviewers = mysqli_query($conn, $sql4);
    $row4 = mysqli_fetch_assoc($reviewers);
    $sql3 = "SELECT AVG(rating) AS avg FROM ratings where proff_id =  $id ";
    $avg =  mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_assoc($avg);
    $average =$row3['avg'];
    $reviewers = $row4['REVIEWERS'];
    if ($row4['REVIEWERS'] == 0) {
        $reviewers = 0;
        $average = 0;

    }
    else {
        $reviewers = $row4['REVIEWERS'];
        $average =$row3['avg'];
    }
    

    if($res== true){
        $count = mysqli_num_rows($res);
       if($count==1){
   
           // get the details
           //echo 'Admin available';
           $rows = mysqli_fetch_assoc($res);
           
           $name=$rows['name'];
           $university = $rows ['university'];
          
       }
   }
   
?>

