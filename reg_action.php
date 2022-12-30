<?php

$conn = mysqli_connect("localhost", "root", "", "poll");
if (!$conn) {
    echo "Cant connect database" . mysqli_connect_error();
    exit;
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];



$query = "INSERT INTO users(firstname,lastname,username,password) VALUES('$firstname','$lastname','$username','$password');";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Cant connect database" . mysqli_connect_error();
} else {
    echo "<script>
    alert('Succesfully stored!');
    window.location.replace('login.php');
    </script>";
}
?>