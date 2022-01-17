<?php include('connections.php');
error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Health Metrics | Create Dependents</title>
</head>
<body>
<div class="container">
    <div class="title">Create Dependents</div>
    <div class="content">
    <form action="" method="post">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Employee ID</span>
            <input type="number" name="dempid" placeholder="Enter your respective Employee Id" value="<?php echo $data['EMPID'] ?>"  required />
          </div>
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
        <div class="input-box">
            <span class="details">CNIC Number</span>
            <input type="number" name="cnic" placeholder="Enter your CNIC" required> XXXXXXXXXXXXX
          </div>
          <div class="input-box">
            <span class="details">Date Of Birth</span>
            <input type="text" placeholder="YYYY-MM-DD" name="dob" required> e.g. 2001-02-25 
          </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit" style="margin: -4px">>
          <input type="button" value="Go back!" onclick="history.back()">
        </div>
      </form>
    </div>
  </div>
    <!--<form action="" method="post">
        <div class="form-group"> <label for=""> Employee ID </label> <input type="number" name="dempid" value="<?php echo $eid ?>" disabled /></div>
        <div class="form-group"> <label for=""> First Name </label> <input type="text" name="fname" /> e.g. Muhammad </div>
        <div class="form-group"> <label for=""> Last Name </label><input type="text" name="lname" /> e.g. Jan </div>
       <div class="form-group"> <label class="form-label" for="">Gender:</label>  
        <div class="form-check"><label class="form-check-label" for=""> Male</label>
        <input class="form-check-input" type="radio" name="gender" value="Male" /></div>
        <div class="form-check"><label class="form-check-label" for=""> Female </label> 
        <input class="form-check-input" type="radio" name="gender" value="Female"/></div>
        </div>
        <div class="form-group"> <label for=""> CNIC </label> <input type="number" name="cnic" /> XXXXXXXXXXXXX </div>
        <div class="form-group"> <label for=""> DOB </label> <input type=text placeholder="YYYY-MM-DD" name="dob"/> e.g. 2001-02-25 </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit"/>
    </form>-->
    <?php 
    $eid=$_GET['id'];
    ?>
    <?php
    $dempid=$_POST['dempid'];
    $dfname = $_POST['fname'];
    $dlname = $_POST['lname'];
    $dgender = $_POST['gender'];
    $dcnic = $_POST['cnic'];
    $ddob = $_POST['dob'];
    $sql="insert into dependents (EMPID,DEP_FNAME,DEP_LNAME,GENDER,DEP_CNIC,DOB) values ('{$eid}','{$dfname}','{$dlname}','{$dgender}','{$dcnic}','{$ddob}')";
    if($dfname!='' && $dlname!='' && $dgender!='' && $dcnic!='' && $ddob!='')
    {
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo 'Data Inserted Successfully :)';
        #header("Location: http://localhost/testpro/read_dependents.php");
        
        echo "<script>window.top.location='http://localhost/testpro/read_dependents.php'</script>";
    }
    else{
        echo 'Data not Inserted :(';
    }
    }
    ?>
</body>
</html>
