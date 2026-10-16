<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#e8f4ff;
        }

        .container{
            width:350px;
            margin:80px auto;
            background:#fff;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }

        h2{
            text-align:center;
            color:#0077cc;
        }

        label{
            font-weight:bold;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:10px;
            background:#0077cc;
            color:white;
            border:none;
            border-radius:5px;
            font-size:16px;
            cursor:pointer;
        }

        button:hover{
            background:#005fa3;
        }

        p{
            text-align:center;
        }

        a{
            text-decoration:none;
            color:#0077cc;
        }
    </style>

</head>

<body>

<div class="container">

<h2>Patient Login</h2>

<form action="login_check.php" method="POST">

<label>Email</label>

<input type="email"
name="email"
placeholder="Enter Email"
required>

<label>Password</label>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<button type="submit">Login</button>

</form>

<p>
Don't have an account?
<a href="register.php">Register</a>
</p>

</div>

</body>
</html>