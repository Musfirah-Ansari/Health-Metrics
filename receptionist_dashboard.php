<?php 
include('connections.php');
include('header.php');
error_reporting(0);
if($_SESSION["username"]=="admin")
{
    header("Location: http://localhost/testpro/admin_dashboard.php");
}
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<style>
a{
    text-decoration: inherit;
    color:  inherit;
    
}
div{
    margin: 15px;
    border-style: solid;
    padding: 20px;
    text-align: center;
    background-color:#c4e0e5;
    font-size: 30px
}
h3{
    margin: 5px;
    padding: 10px;
    text-align: center;
    font-size: 40px
}
}
</style>
<title>
Doctor Appointment System
</title>
</head>
<body>
<div class="back-rec">
    <center>
        <h1>Receptionist Dashboard</h1>
    </center> 
    <a href='employee_token.php'><div><h3>EMPLOYEE TOKEN</h3></div></a>
    <a href='dependent_token.php'><div><h3>DEPENDENT TOKEN</h3></div></a>
    <?php
include("header.php");
?></div>
</body>
</html>
