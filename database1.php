<!DOCTYPE html>
<html lang = "en" >
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta charset = "utf-8">
<meta name ="viewport" content = "width=device-width, initial-scale = 1">
<title>Details Page</title>
</head>
<body>
<?php
$plant = $_POST['plant'];
$equipment = $_POST['equipment'];
$equipmentno = $_POST['equipmentno'];
$equipmentdsc = $_POST['equipmentdsc'];
$section = $_POST['section'];
$calibrationdate = $_POST['calibrationdate'];
$duedate = $_POST['duedate'];
$attachment = $_POST['attachment'];
$user = $_POST['user'];
$remarks = $_POST['remarks'];

$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="calibration_db";  //database name which you created
$con=mysqli_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysqli_error());
}

mysqli_select_db($con,$database);
{
    mysqli_query($con,"insert into calibration_db values('$plant','$equipment','$equipmentno','$equipmentdsc','$section','$calibrationdate','$duedate','$attachment','$user','$remarks');");
}

?>
<h3 align="center"><font color = "orange" size = "4" face = "Arial Black">
<img src="img.png" alt ="thanku" style="width:800px;height:400px;" ><br>

<A href="history.html" target ="_blank"><b><u>   "Click here to go to Homepage"    </u></b></A>

</h3>
</body>
</head>