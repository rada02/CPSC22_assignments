<?php
session_start();
if (isset($_SESSION['username']))
 {
   $user_name = $_SESSION['username'];
   echo "<h1>You $user_name are already logged in.</h1>";
   echo '<p><a href="successful_login.php">Continue to login</a></p>'; 
}
else 
{
  function filter_input($input)
  {
    $filtered_input = preg_replace("/[^a-zA-Z0-9]/", "", $input); 
    return $filtered_input;
  }

  $user = 'admin';
  $valid_pass = 'password';

  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    $user_name = filter_input($_POST['username']);
    $password = filter_input($_POST['password']);
 
    if ($_POST['username'] === $user && $_POST['password'] === $valid_pass)
    {
      $_SESSION['username'] = $_POST['username'];
      header("Location: successful_login.php");
      exit;
    }
    else 
    {
      echo "<p>Invalid login...</p>";
    }
  }
?>

<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <h3>Login</h3> 
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Login">
</form>
<?php 
}
?> 
</body>
</html>
