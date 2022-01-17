<?php include('connections.php');

error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <title>Health Metrics | Create Doctor</title>
</head>
<body>
<div class="container">
    <div class="title">Create Doctor</div>
    <div class="content">
    <form action="" method="post">
        <div class="user-details">
       
          <div class="input-box">
            <span class="details">First Name </span>
            <input type="text" placeholder="Enter your first name" name="fname" required> e.g. Muhammad
          </div>
          <div class="input-box">
            <span class="details">Last Name </span>
            <input type="text" placeholder="Enter your last name" name="lname" required> e.g. Jan
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
         
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
         
          </div>
        </div>
        <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required> e.g. abc_123@xyz.com 
          </div>
          <div class="input-box">
            <span class="details">Qualification</span>
            <input type="text" name="specialization" placeholder="Enter your Qualification/Specialization" required> e.g. Neurologist
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="number" name="contact" placeholder="Enter your number" required>  03XXXXXXXXX 
          </div>

        <div class="input-box">
            <span class="details">CNIC Number</span>
            <input type="number" name="cnic" placeholder="Enter your CNIC" required> XXXXXXXXXXXXX
          </div>
          <div class="input-box">
            <span class="details">Date Of Birth</span>
            <input type="text" placeholder="YYYY-MM-DD" name="dob" required> e.g. 2001-02-25 
          </div>

        <div class="button">
        <input type="submit" value="Submit" name="submit" style="margin: -1px">>
          <input type="button" value="Go back!" onclick="history.back()">
        </div>
      </form>
    </div>
  </div>

    <!--<form action="" method="post">
    <div class="form-group">  <label for=""> First Name </label> <input class="form-control" type="text" name="fname" /> e.g. Muhammad </div>
        <div class="form-group">  <label for=""> Last Name </label> <input class="form-control" type="text" name="lname" /> e.g. Jan </div>
        <div class="form-group"> <label class="form-label" for="">Gender:</label>   
        <div class="form-check"><label class="form-check-label" for=""> Male</label> <input class="form-check-input" type="radio" name="gender" value="Male" /></div> 
        <div class="form-check"><label class="form-check-label" for=""> Female</label> <input class="form-check-input" type="radio" name="gender" value="Female"/></div> 
</div>
        <div class="form-group"> <label for="">Email</label> <input class="form-control" type="email" name="email"/> e.g. abc_123@xyz.com </div>
        <div class="form-group"> <label for="">Qualification</label> <input class="form-control" type="text" name="specialization" /> e.g. Director </div>
        <div class="form-group"> <label for="">Contact</label> <input class="form-control" type="number" name="contact" /> e.g. 03XXXXXXXXX </div>
        <div class="form-group"> <label for="">CNIC</label> <input class="form-control" type="number" name="cnic" /> XXXXXXXXXXXXX 
        <div class="form-group"> <label for="">DOB</label> <input class="form-control" type=text placeholder="YYYY-MM-DD" name="dob"/> e.g. 2001-02-25 </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit"/>
    </form>-->

    <?php
    $dofname = $_POST['fname'];
    $dolname = $_POST['lname'];
    $dogender = $_POST['gender'];
    $doemail = $_POST['email'];
    $dospecialization = $_POST['specialization'];
    $docontact = $_POST['contact'];
    $docnic = $_POST['cnic'];
    $dodob = $_POST['dob'];
    $sql="insert into doctor (DOC_FNAME,DOC_LNAME,GENDER,DOC_EMAIL,SPECIALIZATION,DOC_CONTACT,DOC_CNIC,DOB) values
     ('{$dofname}','{$dolname}','{$dogender}','{$doemail}','{$dospecialization}','{$docontact}','{$docnic}','{$dodob}')";
    if($dofname!='' && $dolname!='' && $dogender!='' && $doemail!='' && $dospecialization!='' && $docontact!='' && $docnic!='' && $dodob!='')
    {
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo 'Data Inserted Successfully :)';
        #header("Location: http://localhost/testpro/read_doctor.php");
        
        echo "<script>window.top.location='http://localhost/testpro/read_doctor.php'</script>";
    }
    else{
        echo 'Data not Inserted :(';
    }
    }
    ?>
</body>
</html>
