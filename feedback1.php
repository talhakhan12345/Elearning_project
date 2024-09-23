<?php
session_start();
?>

<?php 
 if(isset($_SESSION['myemail'])){
    echo "<script>window.location.href='student/feedback.php'</script>";
 }
 else{
    echo "<script>window.location.href='LoginorSignup.php'</script>";
 }
?>