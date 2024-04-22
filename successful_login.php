<html>
<head>PHP Ch 13</head>
<body>
<?php
session_start();
if (isset($_SESSION['username'])) 
{
  $user_name = $_SESSION['username'];
  echo "<h1>Hello there $user_name</h1>";
  echo '<p><a href="logged_out.php">Logout</a></p>';
}
else 
{
  echo "<p>The user is not logged in.</p>";
}
?>
</body>
</html>
