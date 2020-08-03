
<!DOCTYPE html>
<html>
    <head>
        <title>registration system</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Register</h2>
        </div>
        <form method="POST" action="server.php">
            <!-- Display validation errors here -->
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group"> </div>        
               <button type="submit" name="register" class="btn"> Register  </button>
               <p>
                    Already a member? <a href="login.php"> Sign in </a>
               </p>

            </div>
        </form>
    </body>
</html>