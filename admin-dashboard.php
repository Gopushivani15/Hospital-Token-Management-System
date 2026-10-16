<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: admin-login.php");
    exit();
}

include "db.php";

// Count Patients
$patients = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patients"));

// Count Bookings
$bookings = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM bookings"));
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#eef5ff;
    font-family:Arial, Helvetica, sans-serif;
}

.navbar{
    background:#0d6efd;
}

.navbar-brand{
    color:white !important;
    font-weight:bold;
    font-size:24px;
}

.card{
    border:none;
    border-radius:15px;
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
}

footer{
    margin-top:50px;
    background:#0d6efd;
    color:white;
    text-align:center;
    padding:15px;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand" href="#">
🏥 MedCare Hospital - Admin
</a>

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link text-white" href="logout.php">Logout</a>
</li>

</ul>

</div>

</nav>

<div class="container mt-5">

<h2 class="text-center text-primary mb-4">
Welcome Admin 👋
</h2>

<div class="row">

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h1>👥</h1>

<h4>Total Patients</h4>

<h2><?php echo $patients; ?></h2>

</div>

</div>

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h1>🎫</h1>

<h4>Total Bookings</h4>

<h2><?php echo $bookings; ?></h2>

</div>

</div>

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h1>📋</h1>

<h4>Manage Bookings</h4>

<a href="manage-bookings.php" class="btn btn-primary mt-3">
Open
</a>

</div>

</div>

</div>

</div>

<footer>

© 2026 MedCare Hospital | Admin Panel

</footer>

</body>
</html>