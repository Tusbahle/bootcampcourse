!<?php
include_once('includes/head.php');
include_once('includes/sidebar.php');
include_once('includes/navbar.php');

?>

<div class="main-content">
 <?php 

if (isset($_POST['btnSave'])){
  if (addStudent($_POST)){
    header('location:students.php');
  }

}



?>
  <form action="add-student.php" method="post">
    <div class="card w-50">
      <!-- card header -->
      <div class="card-header bg-primary text-white">
        <h2 class="card-title">Student registration</h2>
      </div>
      <!-- card body -->
        <div class="card-body">
          <!-- row 1 -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Student name</label>
                <input type="text" name="studentName" class="form-control" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Mobile</label>
                <input type="number" name="studentMobile"  class="form-control" />
              </div>
            </div>
          </div>

          <!-- row  2 -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Sex </label> <br>
                <input type="radio" name="sex" value="Male" /> Male
                <input type="radio" name="sex" value="Female"/> Female
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="">...</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
              </div>
            </div>
          </div>


          <div class="pull-right">
            <button type="submit" name="btnSave" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>

  </form>
</div>



<?php
include_once('includes/footer.php');
?>