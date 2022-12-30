<?php
$conn = mysqli_connect("localhost", "root", "", "poll");
if (!$conn) {
    echo "Cant connect database" . mysqli_connect_error();
    exit;
}
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    #body {

        background-image: url(https://t3.ftcdn.net/jpg/03/89/61/88/360_F_389618887_PImTbyGB4vTQOoGKxjhOKp2w7hZmcNAs.jpg);
        background-size: cover;
    }
</style>

<body id="body">
<?php
$member = mysqli_query($conn, 'SELECT * FROM language;');
echo '<h1 align="center">Voting Results</h1>';
echo '<center><table><tr bgcolor="#FF6600">		
<td width="100px">LANGAUAGE</td>
<td width="30px">VOTE</td>
</tr>';
while ($mb = mysqli_fetch_object($member)) {

    $name = $mb->name;
    $vote = $mb->votecount;
    echo '<tr bgcolor="#BBBEFF">';
    echo '<td>' . $name . '</td>';
    echo '<td>' . $vote . '</td>';
    echo "</tr>";
}
echo '</table></center>';

?>