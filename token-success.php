<?php

include "db.php";


$token = $_GET['token'];


// Get current running token

$current = "SELECT MIN(token_number) as current_token 
FROM bookings 
WHERE status='Waiting'";

$result = $conn->query($current);

$row = $result->fetch_assoc();


$current_token = $row['current_token'];


// Calculate waiting patients

$waiting = $token - $current_token;


if($waiting < 0)
{
    $waiting = 0;
}


// Each patient takes 10 minutes

$waiting_time = $waiting * 10;


?>


<!DOCTYPE html>
<html>

<head>

<title>Token Confirmation</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<div class="success-box">


<h1>
Token Booked Successfully!
</h1>


<h2>
Your Token Number:
<?php echo $token; ?>
</h2>



<div class="token-info">


<p>
Current Running Token:
<b>
<?php echo $current_token; ?>
</b>
</p>



<p>
Patients Before You:
<b>
<?php echo $waiting; ?>
</b>
</p>



<p>
Estimated Waiting Time:
<b>
<?php echo $waiting_time; ?> minutes
</b>
</p>


</div>



<a href="dashboard.php" class="btn">
Go To Dashboard
</a>



</div>



</body>

</html>