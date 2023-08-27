<html>
    <head>
        <title>Online voting system - Admin</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>Admin</h1>  
            </div>
            <hr>

            <div id="loginSection">
                <h2>Admin Login</h2>
                <form action="../api/adminLogin.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>                  
                    <select name="role" style="width: 0%;">
                        <option value="3"></option>
                        
                        </select><br><br>
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    Voter? <a href="../">Login here</a>
                </form>
                
            </div>
            </center>
    </body>
</html>