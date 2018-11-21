<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 30-10-2018
 * Time: 13:46
 */?>

<?php
/**
 * Created by PhpStorm.
 * User: Joey Clazing
 * Date: 17-9-2018
 * Time: 09:41
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prometheus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/indexcss.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>

<!--//////////Jumbotron//////////-->
<div class="jumbotron">
    <h1 class="display-4">-</h1>
</div>
<!--//////////Jumbotron end//////////-->

<!---->
<?php
//$image = "img/login.png";
//$width = "";
//$height = "";
//echo '<a href="/login/login.php"><img src="' . $image . '" id="loginKnop" alt="login icon" style=width:"' . $width . 'px;height:' . $height . 'px;"></a>';
//?>

<!--//////////navbar//////////-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Prometheus</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">ARK: Survival Evolved
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="ark/screenshots.php">Screenshots</a></li>
                    <li><a href="ark/video.php">Video's</a></li>
                    <li><a href="ark/details.php">Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Paladins
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="paladins/screenshots.php">Screenshots</a></li>
                    <li><a href="paladins/video.php">Video's</a></li>
                    <li><a href="paladins/details.php">Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">The Forest
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="forest/screenshots.php">Screenshots</a></li>
                    <li><a href="forest/video.php">Video's</a></li>
                    <li><a href="forest/details.php">Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">World of Warcraft
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="wow/screenshot.php">Screenshots</a></li>
                    <li><a href="wow/video.php">Video's</a></li>
                    <li><a href="wow/details.php">Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">GTA V Online
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Screenshots</a></li>
                    <li><a href="#">Video's</a></li>
                    <li><a href="#">Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Conan Exiles
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Screenshots</a></li>
                    <li><a href="#">Video's</a></li>
                    <li><a href="#">Details</a></li>
                </ul>
            </li>
            <!--//////////Discord Informatie//////////-->
            <div class="discord">
                <a href="https://discord.gg/kEWpfUx" title=""><img src="img/discord.png" class="img-responsive"></a>
            </div>
    </div>
</nav>
<!--//////////Navbar end//////////-->
<!--//////////Server Informatie//////////-->
<div class="col-md-4" id="hometext">
    <h3>Welcome to the Prometheus website.</h3>
    <p>We are a group of gamers that play videogames together, we have servers running where everyone is allowed to join
        / play in.</p>
    <p>We also have a discord server</p>
</div>

<!--//////////Server Lijst//////////-->
<div class="container-fluid">
    <div class="col-md-4" id="hometext2">
        <h1><p>Server List:</p></h1>
        <h3><p><a href="https://server.nitrado.net/toplist/view/2935620"><img
                        src="https://server.nitrado.net/banner/big/2935620/45484d-000000"></a>
                <a href="steam://connect/85.190.162.128:27016/" class="btn btn-default gr-connect" target="_blank">Connect:
                    Steam</a></p></h3>
        <iframe src="https://discordapp.com/widget?id=503632003179085834&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>

    </div>
    <!--//////////Server Lijst END//////////-->

</div>

<footer>
    <div class="col-sm-1" id="homefoto">
        <img src="img/paladins.png" alt="paladins" height="150" width="150"><br>
    </div>
    <div class="col-sm-1" id="homefoto">
        <img src="img/forest.png" alt="The Forest" height="150" width="150"><br>
    </div>
    <div class="col-sm-1" id="homefoto">
        <img src="img/arkk.png" alt="ark" height="150" width="150"><br>
    </div>
    <div class="col-sm-1" id="homefoto">
        <img src="img/warcraft.png" alt="World of Warcraft" height="150" width="150"><br>
    </div>
    <div class="col-sm-1" id="homefoto">
        <img src="img/gta.png" alt="Grand theft auto online" height="150" width="150"><br>
    </div>
    <div class="col-sm-1" id="homefoto">
        <img src="img/conan.png" alt="Conan Exiles" height="150" width="150"><br>
    </div>
    <div class="col-sm-1" id="homefoto">
        <img src="img/skyrim.jpg" alt="Elder Scrolls V : Skyrim" height="150" width="150"><br>
    </div>
</footer>

</body>
</html>

