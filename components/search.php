<?php 

if(isset($_POST['searchQuerySubmit'])){
   $search = $_POST['searchQueryInput']; // getting the search inputs 
   $_SESSION['add']= $search; // this moves the search data from the index page to load the search query in the redirected page 
   header("location:lecturers.php");
   
}
   
?>