<?php
include_once('includes/head.php');
include_once('includes/sidebar.php');
include_once('includes/navbar.php');

?>

<div class="main-content">
    <?php 
if (isset($_GET['id'])){
    if (deleteCourseById($_GET['id'])){
        echo "<div class='alert alert-success'>Course has been deleted <a href='courses.php' class='btn btn-primary'>Back</a> </div>";
    }else {
        echo "<div class='alert alert-danger'>No course deleted. </div>";
    }


}


?>
</div>



<?php
include_once('includes/footer.php');
?>