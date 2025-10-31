<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];

  if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
    $error = "First name should only contain letters.";
  } elseif (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
    $error = "Last name should only contain letters.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Invalid email format!";
  } elseif (strlen($password) < 6) {
    $error = "Password must be at least 6 characters!";
  } elseif ($password !== $confirm) {
    $error = "Passwords do not match!";
  } else {
    $success = "Registration successful!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Register - Peach Log</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:url('images/peachbg.jpg') center/cover no-repeat; text-align:center;">
<div class="auth-box mx-auto mt-5 p-4 bg-light rounded" style="max-width:400px;">
  <h3>Register</h3>
  <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
  <?php if(isset($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
  <form method="post" action="">
    <input type="text" name="fname" class="form-control mb-2" placeholder="First Name" required>
    <input type="text" name="lname" class="form-control mb-2" placeholder="Last Name" required>
    <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
    <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
    <input type="password" name="confirm" class="form-control mb-3" placeholder="Confirm Password" required>
    <button type="submit" class="btn btn-peach w-100 btn-danger">Register</button>
  </form>
</div>
</body>
</html>
