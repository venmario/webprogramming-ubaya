<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<style>
    div {
        padding: 10px;
    }
</style>

<body>
    <?php 
    session_start();
    ?>
    <form action="register_server.php" method="post">
        <?php 
        if (isset($_SESSION['success'])) {
            echo $_SESSION['success'];
        }
        ?>
        <div>
            <label>Username</label> <input type="text" name="username"
                value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>">
        </div>
        <div>
            <?php 
                if (isset($_SESSION['errorpass'])) {
                    echo "<p>".$_SESSION['errorpass']."</p>"; 
                }
                ?>
            <label>Password</label> <input type="password" name="pass" minlength="8">
        </div>
        <div>
            <label>Ulangi Password</label> <input type="password" name="repass">
            <?php 
                if (isset($_SESSION['errorrepass'])) {
                    echo "<p>".$_SESSION['errorrepass']."</p>"; 
                }
                ?>
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
    </form>
</body>

</html>
<?php session_destroy(); ?>