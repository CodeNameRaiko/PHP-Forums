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
<body class="forum">
    <nav>
            <ul class="ul">
                <span>
                    <li class="logo li"><img src="logo.png" class="logo-a img"></li>
                </span>
                
                <li class="li"><a href="start.php">Home</a></li>
                <li class="li"><a href="forum.php">Forums</a></li>
                    <li class="li"><a href="profile.php">Profile</a></li>
                    <li class="li"><a href="login.php">Login</a></li>

                </ul>
    </nav>  
 <!-- Content--->
  <div style="display: flex; justify-content: center; max-height: 50%;">
        <div class="section left">
                <h1>Shout it out!</h1>
               <div>
                   <form action=""></form>
                   <div class="flex">
                     <input type="text" class="inp">
                    <i class="material-icons" id="add">add_circle</i>
                   </div>
               </div>
        </div>
            
         <div class="main-section">
                    <h1>Main</h1>
                </div>
    
        <div class="section right">
                <h1>  Newest Threads</h1>
                  <br>

                </div>


</div>

<!--/Content/--->
</div>
<?php include('./templates/footer.php');?>
</body>
</html>









 
