<?php
include_once('includes/head.php');
include_once('includes/sidebar.php');
include_once('includes/navbar.php');

?>

<div class="main-content">
 <?php 

if (isset($_POST['btnSubmit'])){
  if (addCourse($_POST)){
    header('location:courses.php');
  } else {
    echo ('<div class="alert alert-danger">No course registred</div>');
  }

}



?>
  <form action="add-course.php" method="post">
    <div class="card w-50">
      <!-- card header -->
      <div class="card-header bg-primary text-white">
        <h2 class="card-title">Course registration</h2>
      </div>
      <!-- card body -->
      <div class="card-body">
        <!-- row 1 -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Course name</label>
              <input name="courseName" type="text" placeholder="Enter course name" class="form-control">
            </div>
          </div>
        </div>
        <!-- row 2 -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Start date</label>
              <input type="date" name="courseDate" placeholder="Enter course date" class="form-control">
            </div>
          </div>
        </div>

        <!-- row 3 -->

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Course fee</label>
              <input type="number" placeholder="Fee" name="courseFee" class="form-control" />
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Duration</label>
              <input type="number" placeholder="Duration" name="courseDuration" class="form-control" />
            </div>
          </div>

        </div>

        <!-- submit button -->
        <div class="pull-right">
          <button type="submit" class="btn btn-primary" name="btnSubmit">Save</button>
        </div>
      </div>

    </div>

  </form>
</div>



<?php
include_once('includes/footer.php');
?>