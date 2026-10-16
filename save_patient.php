<?php

include "db.php";


$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$blood = $_POST['blood'];
$address = $_POST['address'];
$password = $_POST['password'];


// Check existing patient

$check = "SELECT * FROM patients WHERE email='$email' OR phone='$phone'";

$result = $conn->query($check);


if($result->num_rows > 0)
{

    echo "
    <script>
    alert('Patient already registered with this Email or Phone Number!');
    window.location.href='register.php';
    </script>
    ";

}
else
{

    $sql = "INSERT INTO patients
    (fullname, gender, age, phone, email, blood, address, password)

    VALUES

    ('$fullname',
    '$gender',
    '$age',
    '$phone',
    '$email',
    '$blood',
    '$address',
    '$password')";


    if($conn->query($sql)==TRUE)
    {

        header("Location: registration-success.php");

    }
    else
    {

        echo "Error: ".$conn->error;

    }

}


$conn->close();

?>