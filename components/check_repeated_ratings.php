
<?php
# run a sql query to getting proff_id and user_id if it returns empty we can continue 
$sql4="SELECT * FROM ratings WHERE user_id = $user_id AND proff_id = $id";
$res4=mysqli_query($conn,$sql4);
$sql = "SELECT * FROM professors WHERE id = '$id'";
$res = mysqli_query($conn,$sql);
$count4 = mysqli_num_rows($res4);
 if ($count4>0){
   $_SESSION["user_message"] = "You can only rate once";
   header('Location: lecturer.php?lec_id='.$id);

 
 }
 else{
    # user has not rated
   if($res== true){ 
       $count = mysqli_num_rows($res);
       if($count==1){
 
        // get the details
        //echo 'Admin available';
        $rows = mysqli_fetch_assoc($res);
        
        $name=$rows['name'];
 
       
    }
 }
 
     $sql2 = "SELECT * FROM users WHERE id = '$user_id'";
     $sql5 = "SELECT AVG(rating) AS avg FROM ratings where proff_id =  $id ";
     $avg = mysqli_query($conn,$sql5);
     $row3 = mysqli_fetch_assoc($avg);
  
    
     $res2 = mysqli_query($conn,$sql2);
 
 
     if($res== true){
       $count2 = mysqli_num_rows($res2);
       if($count2==1){
 
           // get the details
           //echo 'Admin available';
           $rows2 = mysqli_fetch_assoc($res2);
           
           $name2=$rows2['username'];
         
         
       }
     }
  }
 
 ?>


