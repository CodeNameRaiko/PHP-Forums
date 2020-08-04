<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="./stylesheets/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

        <title>Forums</title>
    </head>
<body id="body">
<nav>
    <ul class="ul">
            <span>
                <li class="logo li"><img src="logo.png" class="logo-a img"></li>
           </span>
             <li class="li"><a href="start.php">Home</a></li>  
            <li class="li"><a href="forum.php">Forums</a></li>
            <li class="li"><a href="profile.php">Profile</a></li>
                        </ul>
            </nav>        
            <div style="display: flex; justify-content: center; ">
        <section class="form-wrapper">
            <form id="signupForm">
                <h1>Login</h1>
                
                <label>Name</label>
                <input type="text" required id="name">
                <br>
                <label>Email</label>
                <input type="email" required id="email">
                <br>
                <label>Password</label>
                <input type="password" required id="password">
                
                <button class="signup-btn">Login</button>
            </div>
        </form>
    </section>
</div>
<?php include('./templates/footer.php');?>
</body>
</html>
