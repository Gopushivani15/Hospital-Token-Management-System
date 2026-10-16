<?php

session_start();

if(!isset($_SESSION['patient_id']))
{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Book Appointment</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<header>

<div class="navbar">

<div class="logo">
MedCare Hospital
</div>


<nav>

<a href="dashboard.php">Dashboard</a>
<a href="my-bookings.php">My Bookings</a>
<a href="logout.php">Logout</a>

</nav>


</div>

</header>



<section class="register-section">


<div class="register-box">


<h1>
Book Appointment
</h1>


<p>
Select doctor and appointment time
</p>



<form action="save_token.php" method="POST">



<div class="input-group">

<label>Select Doctor</label>


<select name="doctor_name" required>


<option value="">
Choose Doctor
</option>


<option>
Dr. Rahul Sharma 
</option>


<option>
Dr. Priya Reddy
</option>


<option>
Dr. Sneha Rao
</option>





</div>




<div class="input-group">

<label>Appointment Date</label>


<input type="date" 
name="appointment_date"
required>


</div>




<div class="input-group">

<label>Appointment Time</label>


<select name="appointment_time" required>


<option value="">
Select Time
</option>


<option>
10:00 AM
</option>


<option>
11:00 AM
</option>


<option>
12:00 PM
</option>


<option>
2:00 PM
</option>


<option>
3:00 PM
</option>


</select>


</div>




<button type="submit">

Book Token

</button>


</form>


</div>


</section>



<footer>

<p>
© 2026 MedCare Hospital
</p>

</footer>



</body>

</html>