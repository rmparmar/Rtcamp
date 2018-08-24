<?php
    
    require_once "config.php";
    
    $redirectURL = "https://rakeshparmar10449.000webhostapp.com/Rtcamp/fb-callback.php";
    $permissions = ['email'];
    $loginURL = $Helper->getLoginURL($redirectURL,$permissions);
?>
<!DOCTYPE html>
<html>
  <head>
  	<title>Log In</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <div class="login">
            <form>
                <div class="header">
                    <h1>Login With Facebook</h1>
                </div>
                <div class="form1">
                    <div>
                        <input name="email" placeholder="Email" class="form-control" maxlength="100px"><br>
                    </div>
                    <div>
                        <input name="password" type="password" placeholder="Password" class="form-control" maxlength="100px"><br>
                    </div>
                    <div>
                        <input type="submit" value="Log In" class="btn btn-primary">
                        <input type="button" onclick="window.location = '<?php echo $loginURL?>'" value="Login with Facebook" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>