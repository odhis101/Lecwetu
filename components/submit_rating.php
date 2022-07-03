<?php 
        if(isset($_POST['submit'])){
             $comment = $_POST['comment'];
             $score = $_POST['score'];
             $sql = "INSERT INTO ratings SET 
             rating = $score,
             user_id = $user_id,
             proff_id = $id,
             comments = '$comment',
             username = '$username'
             ";
             $res= mysqli_query($conn,$sql);
         
             $_SESSION["successful"] = "You have successfully submittef your rating ";
             header("Location:lecturer.php?lec_id=$id");


        }
        ?>