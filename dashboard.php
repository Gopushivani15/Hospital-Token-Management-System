<?php
session_start();

if(!isset($_SESSION['patient_id']))
{
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Patient Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#eef7ff;
    font-family:Arial, Helvetica, sans-serif;
}

/* Navbar */
.navbar{
    background:#0d6efd;
}

.navbar-brand{
    color:white;
    font-weight:bold;
    font-size:24px;
}

.nav-link{
    color:white !important;
}

/* Welcome Card */

.welcome-card{
    background:white;
    border-radius:15px;
    padding:30px;
    margin-top:40px;
    box-shadow:0px 5px 15px rgba(0,0,0,0.2);
}

/* Dashboard Cards */

.card{
    border:none;
    border-radius:15px;
    transition:0.4s;
}

.card:hover{
    transform:translateY(-8px);
}

.card-body{
    text-align:center;
}

.btn{
    width:100%;
}

/* Footer */

footer{
    margin-top:60px;
    background:#0d6efd;
    color:white;
    padding:15px;
    text-align:center;
}

</style>

</head>

<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand" href="#">
🏥 MedCare Hospital
</a>

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="dashboard.php">Dashboard</a>
</li>

<li class="nav-item">
<a class="nav-link" href="logout.php">Logout</a>
</li>

</ul>

</div>

</nav>

<div class="container">

<div class="welcome-card">

<h2>
Welcome,
<?php echo $_SESSION['patient_name']; ?> 👋
</h2>

<p class="text-muted">
Welcome to MedCare Hospital Online Token Booking System.
Manage your appointments quickly and easily.
</p>

</div>

<div class="row mt-5">

<div class="col-md-4">

<div class="card shadow">

<div class="card-body">

<h1>🎫</h1>

<h4>Book Token</h4>

<p>Book your appointment online.</p>

<a href="book-token.php" class="btn btn-primary">
Book Now
</a>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card shadow">

<div class="card-body">

<h1>📋</h1>

<h4>My Bookings</h4>

<p>View your booked appointments.</p>

<a href="my-bookings.php" class="btn btn-success">
View
</a>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card shadow">

<div class="card-body">

<h1>🚪</h1>

<h4>Logout</h4>

<p>Logout from your account.</p>

<a href="logout.php" class="btn btn-danger">
Logout
</a>

</div>

</div>

</div>

</div>

</div>

<footer>

© 2026 MedCare Hospital | Online Token Booking System

</footer>

</body>
</html>