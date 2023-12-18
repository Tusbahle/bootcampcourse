<?php
include_once('includes/head.php');
include_once('includes/sidebar.php');
include_once('includes/navbar.php');

?>

<div class="main-content">
  <?php

  if (isset($_POST['btnSubmit'])) {
    if (updateCourse($_POST)) {
      echo "<div class='alert alert-success'>Course has been updated <a class='btn btn-primary' href='courses.php' >Back</a> </div>";
    } else {
      echo "<div class='alert alert-danger'>No course updated </div>";

    }
  }



  ?>
  <form action="update-course.php" method="post">
    <div class="card w-50">
      <!-- card header -->
      <div class="card-header bg-primary text-white">
        <h2 class="card-title">Course update</h2>
      </div>
      <!-- card body -->
      <div class="card-body">
        <?php
        if (isset($_GET['id'])) {
          $course = getCourseById($_GET['id']);
          if ($course != false) {
        ?>

            <input type="hidden" name="id" value="<?php echo $course['id']; ?>">
            <!-- row 1 -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Course name</label>
                  <input name="courseName" value="<?php echo $course['course_name']; ?>" type="text" placeholder="Enter course name" class="form-control">
                </div>
              </div>
            </div>
            <!-- row 2 -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Start date</label>
                  <input type="date" name="courseDate" value="<?php echo $course['course_date']; ?>" placeholder="Enter course date" class="form-control">
                </div>
              </div>
            </div>

            <!-- submit button -->
            <div class="pull-right">
              <button type="submit" class="btn btn-primary" name="btnSubmit">Update</button>
            </div>
      </div>
  <?php }
        } ?>
    </div>

  </form>
</div>



<?php
include_once('includes/footer.php');
?>