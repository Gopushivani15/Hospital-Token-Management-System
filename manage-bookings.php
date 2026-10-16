<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: admin-login.php");
    exit();
}

include "db.php";


// Delete Booking
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];

    mysqli_query($conn, "DELETE FROM bookings WHERE id='$id'");

    header("Location: manage-bookings.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Manage Bookings</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<style>

body{
    background:#eef5ff;
    font-family:Arial;
}

.container{
    margin-top:40px;
}

h2{
    color:#0d6efd;
    text-align:center;
    margin-bottom:30px;
}

.card{
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0px 5px 15px rgba(0,0,0,0.2);
}

</style>

</head>


<body>


<nav class="navbar navbar-dark bg-primary">

<div class="container-fluid">

<a class="navbar-brand">
🏥 MedCare Hospital Admin
</a>

<a href="admin-dashboard.php" class="btn btn-light">
Dashboard
</a>

</div>

</nav>



<div class="container">


<div class="card">


<h2>
📋 Manage Patient Bookings
</h2>


<table class="table table-bordered table-striped">


<tr class="table-primary">

<th>Token</th>
<th>Patient Name</th>
<th>Doctor</th>

<th>Date</th>
<th>Time</th>
<th>Action</th>

</tr>


<?php


$result = mysqli_query($conn,"SELECT * FROM bookings ORDER BY token_number ASC");


while($row=mysqli_fetch_assoc($result))
{


?>


<tr>

<td>
<?php echo $row['token_number']; ?>
</td>


<td>
<?php echo $row['patient_name']; ?>
</td>


<td>
<?php echo $row['doctor_name']; ?>
</td>




<td>
<?php echo $row['appointment_date']; ?>
</td>


<td>
<?php echo $row['appointment_time']; ?>
</td>


<td>

<a href="manage-bookings.php?delete=<?php echo $row['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this booking?')">

Delete

</a>

</td>


</tr>


<?php

}

?>


</table>


</div>


</div>


</body>
</html>