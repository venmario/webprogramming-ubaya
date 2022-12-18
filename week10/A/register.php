<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>

<body>
    <?php 
    session_start();
    ?>
    <form action="register_server.php" method="post">
        <p>
            <label>Username</label><input type="text" name="username" value="<?php 
                if (isset($_SESSION['username'])) {
                    echo $_SESSION['username'];
                }
                ?>">
        </p>
        <p>
            <p>
                <?php 
                if (isset($_SESSION['passkurang'])) {
                    echo $_SESSION['passkurang'];
                }
                ?>
            </p>
            <label>Password</label><input type="password" name="pass">
        </p>
        <p>
            <label>Re-Password</label><input type="password" name="repass">
            <p>
                <?php 
                if (isset($_SESSION['passgakcocok'])) {
                    echo $_SESSION['passgakcocok'];
                }
                ?>
            </p>
        </p>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
    <?php 
    session_destroy();
    ?>
</body>

</html>