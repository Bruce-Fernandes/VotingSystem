<?php

$conn = mysqli_connect("localhost", "root", "", "poll");
if (!$conn) {
    echo "Cant connect database" . mysqli_connect_error();
    exit;
}
session_start();
if (empty($_POST['lan'])) {
    $error = "<center><h4><font color='#FF0000'>Please select a language to vote!</h4></center></font>";
    include "voter.php";
    exit();
}
$lan = $_POST['lan'];
$user = $_SESSION['user'];


$query = "SELECT vote from users where username='$user';";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if ($row['vote'] == 'VOTED') {
    echo "
    <script>
    alert('You have already voted');
    window.location.replace('voter.php');
    
    </script>";

} else {

    mysqli_query($conn, "UPDATE users set vote='VOTED' where username='$user';");
    mysqli_query($conn, "UPDATE language set votecount=votecount+1 where name='$lan';");
    echo "
    <script>
    alert('You have Successfully voted');
    window.location.replace('voter.php');
    
    </script>";

}