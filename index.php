<!DOCTYPE html>
<html>

<head>
    <title>FanBoy</title>
    <link href="asset/css/bootstrap.css" rel="stylesheet">
    <link href="asset/css/mainstyle.css" rel="stylesheet">
</head>

<body>
    <div class="navbar navbar-inverse navbar-static-top navbar_main_style">
        <div class="container container-main-style">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="background-color: black;">
                    <span class="gameProduct-icon-bar"></span>
                    <span class="gameProduct-icon-bar"></span>
                    <span class="gameProduct-icon-bar"></span>
                </button>
                <a class="navbar-brand"><img src="images/nav_logo.png" class=" logo_image page-logo" width="40px"></a>
            </div>
            <div class="navbar-collapse collapse navbar-collapse-mainstyle">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav_link" href="#"><b>PLAYSTATION 3</b></a></li>
                    <li><a class="nav_link" href="#" id="focusmeplease"/><b>XBOX</b></a></li>
                    <li><a class="nav_link" href="#"><b>PC</b></a></li>
                    <li><a class="nav_link" href="#"><b>NINTENDO</b></a></li>
                    <li><a class="nav_link" href="#"><b>KONTAKT</b></a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <div class="register-container">
        <h3 class="register-head">Tilmeld dig vores nyhedsbrev i dag</h3>
        <div>
            <button type="button" class="register-button" data-toggle="modal" data-target="#myModal">Tilmeld</button>
            <div class="modal fade pop-up-box" id="myModal" role="dialog">
                <div class="modal-dialog pop-up-dialog">
                    <div class="modal-content pop-up-content">
                        <div class="modal-header cross-btn">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">

                            <h3 class="modal-title"><b>register dig vores nyhedsbrev i dag.</b></h3>
                            <form class="email-input-form" method="post" action="get_email.php">
                            	<input 	type="text" name="email" class="email-address" id="email" placeholder="Indtast e-mail">
                            	<button type="submit" class="register-button" id="email-send">Tilmeld</button>
                            </form>
                            <span class="error-message" id="error"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container gameProduct-container">
        <div class="row gameProduct-row">
            <div class="col-sm-3 produc-section">
                <img src="images/mobile-phone-572865_640.jpg" class="gameProduct-icon">
                <div class="gameProduct">
                    <p class="gameProduct-station"> Playstation 4 </p>
                    <p class="gameProduct-name"><b>Dark Souls 3 </b> <span class="price-tab"><b>299,-</b></span></p>
                </div>
                <div class="gameProduct-button-section">
                    <button class="add-cart-button" type="button">Tilføj til kurv</button>
                </div>
            </div>
            <div class="col-sm-3 produc-section">
                <img src="images/mobile-phone-2198770_640.png" class="gameProduct-icon">
                <div class="gameProduct">
                    <p class="gameProduct-station"> Playstation 4 </p>
                    <p class="gameProduct-name"><b>Dark Souls 3 </b> <span class="price-tab"><b>299,-</b></span></p>
                </div>
                <div class="gameProduct-button-section">
                    <button class="add-cart-button" type="button">Tilføj til kurv</button>
                </div>
            </div>
            <div class="col-sm-3 produc-section">
                <img src="images/lens-826310_640.jpg" class="gameProduct-icon">
                <div class="gameProduct">
                    <p class="gameProduct-station"> Playstation 4 </p>
                    <p class="gameProduct-name"><b>Dark Souls 3 </b> <span class="price-tab"><b>299,-</b></span></p>
                </div>
                <div class="gameProduct-button-section">
                    <button class="add-cart-button" type="button">Tilføj til kurv</button>
                </div>
            </div>
            <div class="col-sm-3 produc-section">
                <img src="images/apple-606761_640.jpg" class="gameProduct-icon">
                <div class="gameProduct">
                    <p class="gameProduct-station"> Playstation 4 </p>
                    <p class="gameProduct-name"><b>Dark Souls 3 </b> <span class="price-tab"><b>299,-</b></span></p>
                </div>
                <div class="gameProduct-button-section">
                    <button class="add-cart-button" type="button">Tilføj til kurv</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container videogame-container">
        <div class="row videogame-row">
            <div class="col-sm-6 videogame-image">
                <img src="images/video_game.png" style="width:100%;">
            </div>
            <div class="col-sm-6 videogame-description">
                <h3><b>Video Games Playing With Imagination</b></h3>
                <div>
                    The first is a non technical method which requires the use of adware removal software. Download free adware and spyware removal software and use advanced tools to help prevent getting infected. Spyware scan review is a free service for anyone interested in downloading spyware/adware removal software.
                </div>
                <div class="videogame-second-paragraph">
                    Our adware remover is the most trusted adware removal software in the world. Additionally, adware operations are increasingly asking that their software no longer be uninstalled by adware/spyware removal companies. Download and run an adware or spyware removal program.
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/myjavascript.js"></script>

</html>