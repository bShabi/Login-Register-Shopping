
<!DOCTYPE html>
<html>
    <head>
        <title>login system</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Login</h2>
        </div>
        <form method="POST" action="server.php">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>

            <div class="input-group"> </div>
               <button type="submit" name="login" class="btn"> Login  </button>
               <p>
                    Not yet a member? <a href="register.php"> Sign in </a>
               </p>

            </div>
        </form>
    </body>
</html>