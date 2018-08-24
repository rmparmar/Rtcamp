<?php
    
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  	<title>User Profile</title>
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
        <div class="icon-bar">
            <a href="Home.php">HOME</a>
            <a href="About-us.php">ABOUT US</a>
            <a href="Gallary.php">GALLARY</a>
            <a href="index.php" class="active">PROFILE</a>
        </div> 
        <div class="img">
            <div class="container">
                <div class="picture">
                    <img src="<?php echo $_SESSION['userData']['picture']['url']?>" width="350px" height="350px">
                </div>
                <div class="info">
                    <table class="space">
                    <tr>
                        <th>ID</th>
                        <td>:</td>
                        <td><?php echo $_SESSION['userData']['id']?></td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td>:</td>
                        <td><?php echo $_SESSION['userData']['first_name']?></td>
                    </tr>
                    <tr>
                        <th>last name</th>
                        <td>:</td>
                        <td><?php echo $_SESSION['userData']['last_name']?></td>
                    </tr>
                    <tr>
                        <th>email</th>
                        <td>:</td>
                        <td><?php echo $_SESSION['userData']['email']?></td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </body>
</html>