<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS file -->
</head>
<body>

  <div class="form-container">
    <!-- Form Heading -->
    <h1 class="form-heading">Registration Form For Dropout Students</h1>
    
    <form action="#" method="POST" enctype="multipart/form-data">
      
      <!-- Row 1: First Name, Last Name -->
      <div class="form-row">
        <div class="form-group">
          <label for="firstName">First Name</label>
          <input type="text" id="firstName" name="firstName" required>
        </div>
        <div class="form-group">
          <label for="lastName">Last Name</label>
          <input type="text" id="lastName" name="lastName" required>
        </div>
      </div>

      <!-- Row 2: Father's Name, Mother's Name -->
      <div class="form-row">
        <div class="form-group">
          <label for="fatherName">Father's Name</label>
          <input type="text" id="fatherName" name="fatherName" required>
        </div>
        <div class="form-group">
          <label for="motherName">Mother's Name</label>
          <input type="text" id="motherName" name="motherName" required>
        </div>
      </div>

      <!-- Row 3: Email Address, Phone Number -->
      <div class="form-row">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" required>
        </div>
      </div>

      <!-- Row 4: Dropout Year, Dropout Reason -->
      <div class="form-row">
        <div class="form-group">
          <label for="dropoutYear">Dropout Year</label>
          <input type="number" id="dropoutYear" name="dropoutYear" required>
        </div>
        <div class="form-group">
          <label for="dropoutReason">Dropout Reason</label>
          <textarea id="dropoutReason" name="dropoutReason" rows="3"></textarea>
        </div>
      </div>

      <!-- Row 5: Date, Student's Photo -->
      <div class="form-row">
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
          <label for="studentAge">Student's Age</label>
          <input type="text" id="studentAge" name="studentAge">
        </div>
      </div>

      <!-- Row 6: Permanent Address, Gender -->
      <div class="form-row">
        <div class="form-group">
          <label for="address">Permanent Address</label>
          <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
          <label>Gender</label>
          <div class="gender">
            <!-- <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label> -->
            <select name="gender">
                <option value="Not Selected">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
</select>
          </div>
        </div>
      </div>

      <!-- Row 7: Caste, Nationality -->
      <div class="form-row">
        <div class="form-group">
          <label for="caste">Caste</label>
          <select id="caste" name="caste">
            <option value="GEN">GEN</option>
            <option value="SC">SC</option>
            <option value="ST">ST</option>
            <option value="OBC">OBC</option>
          </select>
        </div>
        <div class="form-group">
          <label for="nationality">Nationality</label>
          <input type="text" id="nationality" name="nationality" required>
        </div>
      </div>

      <!-- Submit and Reset Buttons -->
      <div class="form-actions">
        <input type="submit" value="Submit" name="register">
        <input type="reset" value="Clear">
      </div>
    </form>
  </div>

</body>
</html>

<?php
if($_POST['register'])
{
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $fathername = $_POST['fatherName'];
    $mothername = $_POST['motherName']; 
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dropout_year = $_POST['dropoutYear'];
    $dropout_reason = $_POST['dropoutReason'];
    $date = $_POST['date'];
    $student_age = $_POST['studentAge'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $caste = $_POST['caste'];
    $nationality = $_POST['nationality'];

     $query = "INSERT INTO STUDENTS VALUES('$firstname','$lastname','$fathername','$mothername','$email','$phone','$dropout_year','$dropout_reason','$date','$student_age','$address','$gender','$caste','$nationality')";
     $data = mysqli_query($conn,$query);
     if($data)
     {
        echo "Data Inserted Into Database";
        
     }
     else{
        echo "Failed";
     }
}
?>
 