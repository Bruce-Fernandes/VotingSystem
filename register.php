<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['user']) != "") {
    header("Location: voter.php");
}
?>
<style>
    #body {
 
  background-image: url(https://t3.ftcdn.net/jpg/03/89/61/88/360_F_389618887_PImTbyGB4vTQOoGKxjhOKp2w7hZmcNAs.jpg);
  background-size: cover;
}
</style>
<body id="body">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<br>
<br>
<center>
    <legend>
        <h3> Register </h3>
    </legend>
</center>
<center>
    <font size="4">
        <form action="reg_action.php" method="post" class="form-control">
            Firstname:
            <input type="text" name="firstname" required/>
            <br>
            <br>
            Lastname:
            <input type="text" name="lastname"  required/>
            <br>
            <br>
            Username:
            <input type="text" name="username" required/>
            <br>
            <br>
            Password:
            <input type="password" name="password" required/>
            <br>
            <br>

            <br>
            <br>
            <input type="submit" name="submit" />
        </form>
    </font>
</center>
</body>
