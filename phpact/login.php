<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Invalid email format!";
  } elseif (strlen($password) < 6) {
    $error = "Password must be at least 6 characters!";
  } else {
    $success = "Login successful!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login - Peach Log</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:url('images/peachbg.jpg') center/cover no-repeat; text-align:center;">
<div class="auth-box mx-auto mt-5 p-4 bg-light rounded" style="max-width:400px;">
  <h3>Login</h3>
  <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
  <?php if(isset($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
  <form method="post" action="">
    <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
    <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
    <button type="submit" class="btn btn-peach w-100 btn-danger">Login</button>
  </form>
</div>
</body>
</html>
