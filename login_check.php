<?php
session_start();
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM patients WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1)
{
    $row = mysqli_fetch_assoc($result);

    $_SESSION['patient_id'] = $row['id'];
    $_SESSION['patient_name'] = $row['fullname'];

    header("Location: dashboard.php");
}
else
{
    echo "<script>
            alert('Invalid Email or Password');
            window.location='login.php';
          </script>";
}
?>