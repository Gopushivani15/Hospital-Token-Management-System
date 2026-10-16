<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#eaf4ff;
    font-family:Arial, Helvetica, sans-serif;
}

.login-box{
    width:400px;
    margin:80px auto;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0px 5px 15px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#0d6efd;
    margin-bottom:20px;
}
</style>

</head>

<body>

<div class="login-box">

<h2>🏥 Admin Login</h2>

<form action="admin-check.php" method="POST">

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary w-100">
Login
</button>

</form>

</div>

</body>
</html>