
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
session_start();
if(!isset($_SESSION['user']))
{
    echo "
    <script>
    alert('Login to proceed further');
   window.location.replace('login.php');
    </script>
    ";
    
}
 else
{
    ?>
    <style>
    #body {

        background-image: url(https://t3.ftcdn.net/jpg/03/89/61/88/360_F_389618887_PImTbyGB4vTQOoGKxjhOKp2w7hZmcNAs.jpg);
        background-size: cover;
    }
</style>
<body id="body">
<div>

    <center>
        <font size='4'>
           <a href="lan_view.php">Vote
                Results</a>&nbsp;&nbsp;|&nbsp;&nbsp;|&nbsp;&nbsp;<a
                href="logout.php">Logout</a>
            
        </font>
    </center>
</div>
<h4 align="center"> Welcome <?php echo $_SESSION['user']; ?></h4>
<h3 align="center">Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform">
    <center>
        <font size='6'> Which is your favorite language ? <BR>
            <input type="radio" name="lan" value="cpp"> C++<BR>
            <input type="radio" name="lan" value="java">JAVA<BR>
            <input type="radio" name="lan" value="python"> PYTHON<BR>
            <input type="radio" name="lan" value="c"> C<BR>
        </font>
    </center><br>
    <center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h4 align="center">Developed by Bruce Fernandes SY-IT</h6>
</body>

</html>
<?php 
}