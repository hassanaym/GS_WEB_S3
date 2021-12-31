<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div id="login-card">
        <h1>login account</h1>
        <form action="validation.php" method="post" class="login-form" id="login-form">

            <div class="input-group">
                <label for="username">username</label>
                <div class="merge-input-icon">
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <i class="fas fa-envelope"></i>
                </div>
            </div>

            <div class="input-group">
                <label for="paswword">password</label>
                <div class="merge-input-icon">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <i class="pass-icon fas fa-eye"></i>
                </div>
            </div>




            <div class="error-alert">
                <?php
                if (isset($_GET['errornum'])) {
                    if ($_GET['errornum'] == 1)
                        echo "wrong username";

                    else if ($_GET['errornum'] == 2)
                        echo "wrong password";
                }
                ?>
            </div>

            <div class="login-button">
                <input type="submit" value="Login">
            </div>


        </form>
    </div>

    <script src="js/login.js"></script>
</body>

</html>