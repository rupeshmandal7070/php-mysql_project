<!DOCTYPE html>
<html>
<head>
  <title>Register User</title>
</head>
<body>
  <h2>User Registration</h2>
  <form method="POST" action="register.php">
    <input type="text" name="name" placeholder="Full Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <button type="submit">Register</button>
  </form>
  <br>
  <a href="view_users.php">View Registered Users</a>
</body>
</html>
