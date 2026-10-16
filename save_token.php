<?php

session_start();

include "db.php";


// Get patient details from session

$patient_name = $_SESSION['patient_name'];


// Get booking details from form

$doctor_name = $_POST['doctor_name'];

$appointment_date = $_POST['appointment_date'];

$appointment_time = $_POST['appointment_time'];




// Generate next token number

$query = "SELECT MAX(token_number) AS last_token FROM bookings";

$result = $conn->query($query);

$row = $result->fetch_assoc();


if($row['last_token'] == NULL)
{
    $token_number = 1;
}
else
{
    $token_number = $row['last_token'] + 1;
}



// Insert booking

$sql = "INSERT INTO bookings
(patient_name, doctor_name, appointment_date, appointment_time, token_number, status)

VALUES

('$patient_name',
'$doctor_name',
'$appointment_date',
'$appointment_time',
'$token_number',
'Waiting')";



if($conn->query($sql) == TRUE)
{

?>

<!DOCTYPE html>
<html>

<head>

<title>Token Confirmed</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<div class="success-box">


<h1>
Appointment Confirmed
</h1>


<h2>
Your Token Number:
<?php echo $token_number; ?>
</h2>


<p>
Doctor:
<?php echo $doctor_name; ?>
</p>


<p>
Appointment Date:
<?php echo $appointment_date; ?>
</p>


<p>
Appointment Time:
<?php echo $appointment_time; ?>
</p>


<a href="my-bookings.php" class="btn">
View Booking Status
</a>


</div>


</body>

</html>


<?php

}

else
{

echo "Error: ".$conn->error;

}


$conn->close();


?>