<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Bookings</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f8fc;
    font-family:Arial, sans-serif;
}

.container{
    margin-top:40px;
}

h2{
    text-align:center;
    color:#0d6efd;
    margin-bottom:30px;
}

table{
    background:white;
}

.btn-home{
    margin-top:20px;
}
</style>

</head>
<body>

<div class="container">

<h2>📋 My Bookings</h2>

<table class="table table-bordered table-striped table-hover">

<thead class="table-primary">

<tr>
<th>Token</th>
<th>Patient Name</th>
<th>Doctor</th>

<th>Date</th>
<th>Time</th>
</tr>

</thead>

<tbody>

<?php

$sql="SELECT * FROM bookings ORDER BY token_number ASC";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['token_number']; ?></td>
<td><?php echo $row['patient_name']; ?></td>
<td><?php echo $row['doctor_name']; ?></td>



<td><?php echo $row['appointment_date']; ?></td>
<td><?php echo $row['appointment_time']; ?></td>
</tr>
<?php
}
?>

</tbody>

</table>

<div class="text-center">
<a href="dashboard.php" class="btn btn-primary btn-home">
⬅ Back to Dashboard
</a>
</div>

</div>

</body>
</html>