<?php

function getConnection()
{
  try {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbName = 'bootcamp_db';
    return new mysqli($host, $user, $password, $dbName);
  } catch (Exception $e) {
    echo $e->getMessage();
    echo 'Cillad ayaa jirta fadlan markale soo laabo';
    exit();
  }
}


function addCourse($data){
  $conn = getConnection();
  try{
    $courseName = $data['courseName'];
    $courseDate = $data['courseDate'];
    if (empty($courseName) == true) throw new Exception("Fadlan course name ka soo qor.");
    if (empty($courseDate) == true) throw new Exception("Fadlan course date ka soo qor.");
    return $conn->query("INSERT INTO courses (course_name, course_date) VALUES ('$courseName', '$courseDate')");
  }catch(Exception $e){
    echo "<div class='alert alert-danger'>". $e->getMessage() . "</div>";
    return false;
  }

}

function getCourses(){
  try {
    $conn = getConnection();
    $result = $conn->query("SELECT course_name, id,course_date FROM courses");
  return $result->fetch_all(MYSQLI_ASSOC);
  } catch (Exception $e) {
    echo "<div class='alert alert-danger'>". $e->getMessage() . "</div>";
  }
}

function getCourseById($id){
  try {
    if (empty($id) == true) throw new Exception("Faldan course id soo dirso");
    
    $conn = getConnection();
    $result = $conn->query("SELECT * FROM courses WHERE id = $id");
      if ($result->num_rows < 1) throw new Exception("ID $id xogtiisa lama hayo");
    return $result->fetch_assoc();
  } catch (Exception $e) {
    echo "<div class='alert alert-danger'>". $e->getMessage() . "</div>";
    return false;
  }
}



function updateCourse($data){
  try {
    $conn = getConnection();
    $id = $data['id'];
    $courseName = $data['courseName'];
    $courseDate = $data['courseDate'];
    if (empty($id)) throw new Exception("ID is required");
    
    $conn->query("UPDATE courses SET course_name = '$courseName', course_date = '$courseDate' WHERE id = $id ");
    return true;
  } catch (Exception $e) {
    echo "<div class='alert alert-danger'>". $e->getMessage() . "</div>";
    return false;

  }

}


function deleteCourseById($id){
  try {
    $conn = getConnection();
    $conn->query("DELETE  FROM courses WHERE id = $id");

    return true;
  } catch (Exception $e) {
    echo $e->getMessage();
    return false;
  }
}



function addStudent($data){
  try{
    $studentName =$data['studentName'];
    $studentMobile =$data['studentMobile'];
    $studentSex =$data['sex'];
    $studentStatus =$data['status'];

    if (empty($studentName)) throw new Exception("Student name is required");


    $conn = getConnection();
    $conn->query("INSERT INTO students (fullname, mobile, sex, student_status) VALUES ('$studentName', '$studentMobile', '$studentSex', $studentStatus)");
    return true;
  }catch(Exception $e){
    echo '<div class="alert alert-danger">' . $e->getMessage() . '</div>';
    return false;
  }
    
}