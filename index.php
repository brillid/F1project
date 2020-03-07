<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>My First Page</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<body>

<!-- Header -->
<div class="header" id="myHeader">
    <div class="menu">
        <a href="index.html" class="logo">COMPANY LOGO</a>
        <a href="#">NOVOSTI</a>
        <div class="dropdown">
            <button class="dropbtn" onclick="dropdown()">DROPDOWN
            <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content" id="myDropdown">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="social">
            <div class="login">
                <button class="loginbtn" onclick="document.getElementById('id01').style.display='block'">
                    <i class="fa fa-user"></i></button>
            </div>
            <a href="https://www.instagram.com" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com" title="Facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
        </div>
    </div>

    <!-- Scale header -->
    <a href="javascript:void(0);" class="icon" onclick="scaleheader()">&#9776;</a>
</div>

<!-- Login popup -->
<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="loginheader">
            <p class="logintitle">PRIJAVA</p>
        </div>
        <div class="loginwelcome">
            <p class="we">Dobrodošli!</p>
            <p class="pr">Prijavi se na svoj račun</p>
        </div>

        <div class="logincontainer">
            <p class="loginusername">
                <label class="loginuser" for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" id="uname" required>
            </p>

            <p class="loginpassword">
                <label class="loginpass" for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="psw" required>
            </p>

            <p class="loginremember">
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </p>
            <button class="loginbtn">Login</button>

        </div>

        <div class="loginfooter" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>



<!-- Move on top button -->
<button onclick="ontopFunction()" id="ontopbtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true">Top</i>
</button>

<!-- izdvojene vijesti -->
<div class="izdvojenevijesti">
    <div class="prvaizdvojena"><img src="images/190022-bra.jpg" alt="slikaprvevijesti" style="width: 100%;"><div class="meta_prveizdvojene">
        <div class="naslovprveizdvojene">
        <h2>
            <a href="news/Brilli Voziti za Ferarri je fenomenalno.html">Brilli: Voziti za Ferarri je fenomenalno
            </a>
        </h2>
            <h4><a href="news/Brilli Voziti za Ferarri je fenomenalno.html">15 komentara</a></h4>
        </div>
    </div>
</div></div>


<script type='text/javascript' src="js/main.js"></script>

</body>
</html>