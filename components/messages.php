<?php 
if(isset($_SESSION['user_message'])){
    echo $_SESSION['user_message'];
    unset($_SESSION['user_message']);
  }
  if(isset($_SESSION['successful'])){
    echo $_SESSION['successful'];
    unset($_SESSION['successful']);
  }
  if(isset($_SESSION['user_message'])){
    echo $_SESSION['user_message'];
    unset($_SESSION['user_message']);
  }
  if(isset($_SESSION['successful'])){
    echo $_SESSION['successful'];
    unset($_SESSION['successful']);
  }
  ?>