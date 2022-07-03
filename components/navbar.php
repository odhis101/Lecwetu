<?php
session_start(); 
include ('config.php');


?>


<?php
            if(isset($_SESSION['id'])){
                $user_id=$_SESSION['id'];
               // if the user is signed in 
               $inactive = "";
               $active = "inactive-div";
               $sql_user = "SELECT * FROM users WHERE id = $user_id";
               $res=  mysqli_query($conn,$sql_user);
               if($res== true){ 
                $count = mysqli_num_rows($res);
                if($count==1){
          
                 // get the details
                 //echo 'Admin available';
                 $rows = mysqli_fetch_assoc($res);
                 $username=$rows['username'];
                 }    
                }
            }         
            
            else{
                $inactive = "inactive-div";
                $active = "";
            }
        ?>

<nav>
        <img class="navMenu" src="assets/img/burger-menu.png" alt="menu-icon" onclick="navMenuToggle">
        <a href="index.php"> <img src="assets/img/logo.png" alt="logo"></a>
        <div class="loginBtns <?php echo $active;?> "> <!-- this shouldn't show if the user is logged in -->
            <button class="loginBtn" type="submit">Login</button>
            <button class="signUpBtn" type="submit">Sign Up</button>
        </div>
      
        <div class="active-login <?php echo $inactive;?> "> <!-- this should show if the user is signed in -->
            <div>
                <p><?php echo $username ;?></p>
                <img src="assets/img/user-icon.png" alt="user-icon">
            </div>
            <div class="userNav inactive-div">
                <a href="logout.php">Log Out</a>
            </div>
        </div>
    </nav>
    <div class="menu-links">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="university.php">Universities</a></li>
            <li><a href="lecturers.php">Lecturers</a></li>
        </ul>
    </div>