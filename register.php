<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<title>Patient Registration | MedCare Hospital</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<header>

<div class="navbar">

<div class="logo">
MedCare Hospital
</div>


<nav>

<a href="index.html">Home</a>
<a href="doctors.html">Doctors</a>
<a href="services.html">Services</a>
<a href="contact.html">Contact</a>

</nav>


</div>

</header>



<section class="register-section">


<div class="register-box">


<h1>Patient Registration</h1>

<p>
Create your account to book hospital appointments
</p>



<form action="save_patient.php" method="POST">


<div class="input-group">

<label>Full Name</label>

<input type="text" 
name="fullname"
placeholder="Enter your full name"
required>

</div>



<div class="row">


<div class="input-group">

<label>Gender</label>

<select name="gender" required>

<option value="">
Select Gender
</option>

<option>Male</option>

<option>Female</option>

<option>Other</option>

</select>

</div>



<div class="input-group">

<label>Age</label>

<input type="number"
name="age"
placeholder="Age"
required>

</div>


</div>




<div class="input-group">

<label>Phone Number</label>

<input type="text"
name="phone"
placeholder="Enter phone number"
required>

</div>




<div class="input-group">

<label>Email</label>

<input type="email"
name="email"
placeholder="Enter email address"
required>

</div>




<div class="input-group">

<label>Blood Group</label>


<select name="blood">

<option>Select Blood Group</option>

<option>A+</option>

<option>A-</option>

<option>B+</option>

<option>B-</option>

<option>O+</option>

<option>O-</option>

<option>AB+</option>

<option>AB-</option>

</select>


</div>




<div class="input-group">

<label>Address</label>


<textarea name="address"
placeholder="Enter your address"></textarea>


</div>




<div class="input-group">

<label>Password</label>


<input type="password"
name="password"
placeholder="Create password"
required>


</div>



<button type="submit">

Register Patient

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