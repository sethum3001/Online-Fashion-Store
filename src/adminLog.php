<!DOCTYPE html>
<html>
<head>


<title>Admin Log-in</title>

<link rel="stylesheet" href="src/css/adminLog.css" type="text/css"  >
<link rel="preconnect" href="https://fonts.googleapis.com">

</head>



<body>
    
    <div class="container">
        <form class="form" method="POST" action="adminValidate.php">
            <h3>ADMIN LOGIN</h3>
            <input type="text" placeholder="Admin Name" name="uname">
            <input type="password" placeholder="Password" name="pw">
            <input class="btnLogin" type="submit" value="Login" name="submit">
        </form>
        <div class="logo">
            <img src="src/img/logo_1.png">
        </div>
    </div>

</body>
</html>