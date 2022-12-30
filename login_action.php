<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "poll");
if (!$conn) {
    echo "Cant connect database" . mysqli_connect_error();
    exit;
}
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT username,password FROM users WHERE username='$username';";
$row = mysqli_fetch_assoc(mysqli_query($conn, $query));
// $_SESSION['user'] = $username;
if (!$row) {
    echo "<script>
    alert('User doest not exist');
    window.location.replace('register.php');
    </script>";
    exit;
}
if ($username != $row['username'] or $password != $row['password'] ) {

    echo "
    <script>
    alert('username or password not matching');
   window.location.replace('login.php');
    </script> ";

} elseif ($username == $row['username'] and $password == $row['password']) {
    $_SESSION['user'] = $username;
    echo "
    <script>
    alert('User logged in');
   
    window.location.replace('voter.php');
    </script> ";
}