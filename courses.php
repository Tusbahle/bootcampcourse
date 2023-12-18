 <?php
  include_once("includes/head.php");
  include_once("includes/sidebar.php");
  include_once("includes/navbar.php");

  ?>


 <div class="main-content">
   <div class="card">
     <!-- card header -->
     <div class="card-header bg-success text-white">
       <div class="row">
         <div class="col-md-8">
           <h1 class="card-title">Courses list</h1>
         </div>

         <div class="col-md-4">
          <a  href="add-course.php" class="btn btn-primary" >New course</a>
         </div>
       </div>
     </div>

     <!-- card body -->
     <div class="card-body">
      <?php 
    $courses = getCourses();
      ?>
        <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Course name</th>
                <th>Course Date</th>
                <th> Actions </th>
              </tr>
            </thead>

            <tbody>
                <?php  foreach($courses as $course) { ?>

                  <tr>
                    <td><?php echo $course['id']; ?></td>
                    <td> <?php echo $course['course_name']; ?>
                    <td> <?php echo $course['course_date']; ?>

                    <td>
                      <a href="update-course.php?id=<?php echo $course['id']; ?> " class="btn btn-success btn-sm">Update</a>
                      <a href="delete-course.php?id=<?php echo $course['id']; ?>"; class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>


                  <?php } ?>

            </tbody>

        </table>
     </div>
   </div>
 </div>


 <?php
  include_once("includes/footer.php");
  ?>