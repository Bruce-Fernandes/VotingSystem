<?php

session_start();

if (isset($_SESSION['user'])) {
    header("Location: voter.php");
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    #body {

        background-image: url(https://t3.ftcdn.net/jpg/03/89/61/88/360_F_389618887_PImTbyGB4vTQOoGKxjhOKp2w7hZmcNAs.jpg);
        background-size: cover;
    }
</style>

<body id="body">

    <br>
    <center>
        <legend>
            <h3>Login for Voting </h3>
        </legend>
        <br>
    </center>
    <br>
    <center>
        <font size="4">
            <form action="login_action.php" method="post" class="form-control">
                Username :
                <input type="text" name="username">
                <br>
                <br>
                Password :
                <input type="password" name="password" \>
                <br>
                <br>
                <input type="submit" name="login">
            </form>
        </font>
    </center>
</body>