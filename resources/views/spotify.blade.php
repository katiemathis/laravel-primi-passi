<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,800;1,300&family=Open+Sans:wght@300;400;500;600;800&family=Outfit:wght@600&family=Rubik+Mono+One&display=swap" rel="stylesheet">    
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: white;
            font-family: 'Montserrat', sans-serif;
            }


    /* MAIN */

            main {
                position: relative;
                height: calc(100vh - 80px);
            }

            /* HEADER */

            header {
                min-height: 60px;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                position: fixed;
                display: flex;
                justify-content: flex-end;
                z-index: 999;
            }

            .call-to-action {
                align-self: center;
                transform: translate(-90%);
                margin: 5px 20px;
                padding: 5px 20px;
                text-decoration: none;
                border: solid 1px white;
                border-radius: 15px;
                background-color: rgba(0, 0, 0, 0.5);
                font-size: 12px;
            }

            .call-to-action:hover {
                transform: translate(-60%);
                border-radius: 22px;
                font-size: 18px;
            }

            /* SIDEBAR */

            #sidebar {
                float: left;
                width: 150px;
                height: 100%;
                background-color: black;
                font-size: 14px;
            }



            #sidebar-top {
                width: 150px;
                height: calc(100vh - 180px);
                overflow: hidden;
                display: flex;
                flex-direction: column;
            }

            #logo {
                height: 40px;
                opacity: 1;
                margin: 10px;
            }

            .logo-mobile, .icons-mobile {
                display: none;
            }

            .logo-mobile {
                width: 40px;
            }

            .icons-mobile {
                width: 30px;
                opacity: 0.6;
            }

            .sidebar-menu {
                border-left: black solid 2px;
            }

            .sidebar-menu .active {
                border-left: rgb(148, 221, 37, 0.9) solid 2px;

            }

            .sidebar-menu a {
                opacity: 0.6;
                margin: 2.5px;
                font-size: 12px;
                line-height: 14px;
            }

            #sidebar-top h4 {
                margin-left: 2px;
            }

            #lists li a {
                font-size: 12px;
                margin-top: 10px; 
                opacity: 0.6;
            }

            .sidebar-menu a:hover, #lists li a:hover, .sidebar-menu a h4:hover, .icons-mobile a:hover {
                opacity: 0.9;
            }

            #sidebar-top #lists {
                display: flex;
                flex-direction: column;
                overflow-y: scroll;
            }

            #sidebar-top #lists li {
                margin: 5px;
            }

            #playlist-plus {
                line-height: 30px;
            }

            #plus {
                background-color: white;
                color: black;
                display: inline-block;
                float: left;
                padding: 0 8px;
                margin: 5px;
                font-size: 30px;
                font-weight: 300;
            }

            #crea {
                float: left;
                vertical-align: middle;
                margin: 5px;
            }

            #user-info {
                position: absolute;
                bottom: 0;
                left: 0;
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                align-content: flex-start;
                width: 150px;
                height: 100px;
                background-color: black;
            }

            #user-info #install {
                margin: 10px 0 0 10px;
                opacity: 0.6;
                font-size: 12px;  
            }

            #user-info #user {
                opacity: 1;
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 10px;
                padding-bottom: 10px;
                line-height: 20px;
            }

            #user-info:hover #install {
                opacity: 1;
                cursor: pointer;
            }

            hr {
                height: 2px;
                width: 80%;
                margin: auto;
                opacity: 0.6;
            }

            #user-info span img {
                height: 20px;
                background-color: grey;
                border-radius: 40%;
                margin: 10px 5px 0 10px;
            }

            #user-info span:hover {
                opacity: 0.9;
            }

            .sidebar-menu {
                display: flex;
                justify-content: flex-start;
                align-items: flex-end;
                flex-wrap: wrap;
                margin-bottom: 5px;
            }


            #sidebar-top .sidebar-menu .sidebar-menu-item img  {
                height: 25px;
                margin: 5px 5px 0 5px;
            }

            /* MAIN CONTENT */

            #main-content {
                position: absolute;
                float: left;
                left: 150px;
                top: 0;
                width: calc(100vw - 150px);
                height: 100%;
                background-color: #141923;
                overflow-y: scroll;
            }

            #main-content p {
                font-size: 12px;
                margin-left: 5px;
                color: grey;
            }

            /* TOP MENU */


            .top-menu {
                position: absolute;
                top: 60px;
                width: 100%;
                float: top;
                font-size: 12px;
            }

            .menu-items {
                width: 60%;
                margin: auto;
                display: flex;
                justify-content: space-between;
                align-content: center;
                align-items: center;
                flex-wrap: wrap;

            }

            a {
                text-decoration: none;

            }

            ul {
                list-style-type: none;
                position: relative;
            }

            .menu-items li a {
                color: grey;
            }

            .menu-items li a:hover {
                color: white;
                opacity: 1;
            }

            .menu-items li a.active::after {
                content: "";
                height: 2px;
                width: 40px;
                background-color: #94dd25;
                position: absolute;
                bottom: -3px;
                left: 0;
                transform: translateX(50%);

            }

            /* MAIN CONTENT GALLERY */

            .categories {
                padding-top: 100px;
            }

            .categories h2 {
                font-weight: 700;
                margin: 5px;
            }

            .thumbnails {
                display: flex;
                justify-content: flex-start;
                flex-wrap: wrap;
                margin: 1% 0% 3% 0%;
            }

            .song-card {
                width: calc(100% / 6);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: center;
                align-items: center;
                padding: 5px;
            }
            .song-card > * {
                flex: 1;
            }

            .text {
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                align-content: center;
                flex-wrap: wrap;
            }

            .text p {
                color: grey;
                font-size: 12px;
                align-self: center;
            }

            .tile, .artist-round {
                position: relative;
            }

            .tile img, .tile .tile-overlay, .artist-round img {
                width: 100%;
                margin: 10px 10px 10px 0;
            }

            .artist-round img {   
                border-radius: 50%;
                margin: 10px 10px 10px 0;
            }

            .caption, .subtitle {
                margin: 5px;
                text-align: center;
            }

            .tile-overlay {
                position: absolute;
                left: 0;
                top: 0;
                bottom: 0;
                right: 0;
                background-color: rgba(0, 0, 0, 0.5);
                display: none;
                align-items: center;
                justify-content: center;
                overflow: hidden; 

            }

            .tile-overlay i {
                font-size: 50px;
                color: white;
            }

            .tile:hover .tile-overlay {
                display: flex;
                cursor: pointer;
                z-index: 99;
            }

            .artist-round:hover .tile-overlay {
                display: flex;
                cursor: pointer;
                border-radius: 50%;
            }



            main::after {
                content: "";
                clear: both;
                display: table;
            }

            /* FOOTER */

            footer {
                position: fixed;
                bottom: 0;
                left: 0;
                min-height: 80px;
                width: 100%;
                background-color: #282828;
                display: flex;
                justify-content: space-between;
            
            }

            .left-footer-items, .right-footer-items {
                display: flex;
                align-items: center;
                justify-content: flex-start;
                width: 20vw;
            }

            .small-thumbnail {
                width: 5vw;
                height: 5vw;
                margin: 10px;
            }

            .small-thumbnail img {
                width: 100%;
                height: 100%;
            }

            .small-caption {
                display: flex;
                flex-direction: column;
                margin-right: 5px;
            }

            .small-caption p {
                opacity: 0.6;
                font-size: 10px;
            }

            .options i {
                opacity: 0.6;
            }

            .small-caption p:hover, .options i:hover {
                opacity: 1;
                cursor: pointer;
            }

            .small-caption p:hover {
                text-decoration: underline;
            }


            .center-footer-items {
                display: flex;
                flex-direction: column;
                justify-content: center;
                width: 50vw;
            }

            .horizontal-menu, .song-time {
                display: flex;
                flex-direction: row;
                justify-content: center;
            }

            .playback-bar {
                height: 3px;
                width: 100%;
                border-radius: 20px;
                background-color: grey;
                align-self: center;
            }

            .song-time {
                font-size: 12px;
            }

            .volume {
                height: 3px;
                width: 50%;
                margin-right: 10px;
                border-radius: 20px;
                background-color: grey;
                align-self: center;
            }

            #volume-current {
                height: 100%;
                width: 20%;
                background-color: white;
                position: relative;
                border-radius: 20px;
            }

            #progress {
                height: 100%;
                width: 40%;
                background-color: white;
                position: relative;
                border-radius: 20px;
            }

            .cursor {
                min-height: 10px;
                min-width: 10px;
                background-color: #fff;
                position: absolute;
                right: 0;
                top: 0;
                transform: translate(0, -40%);
                border-radius: 50%;
                display: none;

            }

            i, .playback-bar, .volume {
                margin: 5px;
            }

            .song-time:hover #progress, .right-footer-items:hover #volume-current {
                background-color: rgb(148, 221, 37);
                cursor: pointer;
            }

            .song-time:hover #progress .cursor, .right-footer-items:hover #volume-current .cursor {
                display: block;
            }

            .horizontal-menu:hover .fa-play-circle {
                transform: scale(1.5);
                cursor: pointer;
                
            }

            /* MEDIA QUERIES */

            @media screen and (min-width: 901px) and (max-width: 1000px) {
                .song-card {
                    width: calc(100% / 5)
                }
            }

            @media screen and (min-width: 701px) and (max-width: 900px) {
                .song-card {
                    width: calc(100% / 4)
                }
            }

            @media screen and (min-width: 601px) and (max-width: 700px) {
                .song-card {
                    width: calc(100% / 3)
                }
            }

            @media screen and (max-width: 600px) {
                #sidebar {
                    width: 50px;
                }

                #sidebar-top {
                    display: none;
                }

                #user-info {
                    display: none;
                }

                #main-content {
                    left: 50px;
                    width: calc(100vw - 50px);
                }

                .top-menu {
                    display: none;
                }

                .song-card {
                    width: calc(100% / 2)
                }

                .logo-mobile, .icons-mobile {
                    display: block;
                    z-index: 999;
                }

                #logo {
                    display: none;
                }


                #list-icon, #desktop-icon {
                    display: none;
                }

                .volume {
                    width: 80%;
                }
            }

            @media screen and (max-height: 150px){
                .call-to-action {
                    display: none;
                }

                #logo {
                    display: none;
                }


            }
            </style>
    
    <title>Spotify</title>
</head>
<body>


    <!-- BEGIN MAIN -->
    
    <main>

        <!-- BEGIN SIDEBAR -->
        <div id="sidebar">
            <div class="logo">
                <img id="logo" src="img/logo.svg" alt="Logo">
            </div>
            <div class="logo-mobile">
                <img id="logo-small" src="img/logo-small.svg" alt="Logo">
            </div>
            <div class="icons-mobile">
                <a href="#"><img src="img/home.svg" alt="Home"></a>
                <a href="#"><img src="img/search.svg" alt="Search"></a>
                <a href="#"><img src="img/libreria.svg" alt="Library"></a>
            </div>
            <div id="sidebar-top">

                <div class="sidebar-menu">
                    <a class="active" href="#"><span class="sidebar-menu-item"><img src="img/home.svg" alt="Home">Home</span></a>
                    <a href="#"><span class="sidebar-menu-item"><img src="img/search.svg" alt="Search">Search</span></a>
                    <a href="#"><span class="sidebar-menu-item"><img src="img/libreria.svg" alt="Libreria">La tua libreria</span></a>
                </div>
                <h4>PLAYLIST</h4>
                <div class="sidebar-menu">
                    <a href="#" id="playlist-plus"><p id="plus">+</p><p id="crea">Crea Playlist</p></a>
                </div>
                <ul id="lists">
                        <li><a href="#">Nome Playlist</a></li>
                        <li><a href="#">Nome Playlist</a></li>
                        <li><a href="#">Nome Playlist</a></li>
                        <li><a href="#">Nome Playlist</a></li>
                        <li><a href="#">Nome Playlist</a></li>
                        <li><a href="#">Nome Playlist</a></li>
                        <li><a href="#">Nome Playlist</a></li>
                        <li><a href="#">Nome Playlist</a></li>
                        <li><a href="#">Nome Playlist</a></li>
                        <li><a href="#">Nome Playlist</a></li>
                        <li><a href="#">Nome Playlist</a></li>
                        <li><a href="#">Nome Playlist</a></li>
                     </ul>

                

            </div>

            <div id="user-info">
                <span id="install"><i class="fas fa-arrow-circle-down"></i>Installa app</span>
                <hr>
                <span id="user"><img src="img/profile.svg" alt="Install">John Doe</span>
            </div>
        </div>

        <!-- END SIDEBAR -->

        <!-- BEGIN MAIN CONTENT -->

        <div id="main-content">
            <!-- BEGIN HEADER -->
            <header>
                <div class="call-to-action">
                    <a href="#">EFFETTUA L'UPGRADE</a>
                </div>


            </header>
            <!-- END HEADER -->

            <!-- BEGIN NAVIGATION MENU -->
            <div class="top-menu">
                <nav>
                    <ul class="menu-items">
                        <li><a class="active" href="#">IN EVIDENZA</a></li>
                        <li><a href="#">PODCAST</a></li>
                        <li><a href="#">CLASSIFICHE</a></li>
                        <li><a href="#">GENERI E MOOD</a></li>
                        <li><a href="#">NUOVE USCITE</a></li>
                        <li><a href="#">SCOPRI</a></li>
                    </ul>
                </nav>
            </div>
            <!-- END NAVIGATION MENU-->

            <!-- BEGIN MAIN GALLERY -->

            <!-- RECENTLY PLAYED TILES -->
            <div class="categories">
                <h2>Recently Played</h2>
                <div class="thumbnails">
                    <div class="song-card">
                        <div class="tile">
                            <img src="img/metal_lifting.jpg" alt="Heavy Metal">
                            <div class="tile-overlay">
                                <i class="far fa-play-circle"></i>
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="caption">Heavy Metal</h5>
                            <p class="subtitle">Subtitle</p>
                        </div>
                    </div>
                    <div class="song-card">
                        <div class="tile">
                            <img src="img/stranger.jpeg" alt="Stranger Things">
                            <div class="tile-overlay">
                                <i class="far fa-play-circle"></i>
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="caption">Stranger Things Vol. 1 (a Netflix Original Soundtrack)</h5>
                            <p class="subtitle">Kyle Dixon & Michael Stein</p>
                        </div>

                    </div>
                    <div class="song-card">
                        <div class="tile">
                            <img src="img/aquietplace.jpeg" alt="Quiet Place">
                            <div class="tile-overlay">
                                <i class="far fa-play-circle"></i>
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="caption">A Quiet Place</h5>
                            <p class="subtitle">Subtitle</p>
                        </div>
                    </div>
                    <div class="song-card">
                        <div class="tile">
                            <img src="img/split.jpeg" alt="Split">
                            <div class="tile-overlay">
                                <i class="far fa-play-circle"></i>
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="caption">Split</h5>
                            <p class="subtitle">Subtitle</p>
                        </div>
                    </div>
                    <div class="song-card">
                        <div class="tile">
                            <img src="img/cure.jpeg" alt="A Cure for Wellness">
                            <div class="tile-overlay">
                                <i class="far fa-play-circle"></i>
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="caption">A Cure for Wellness</h5>
                            <p class="subtitle">Subtitle</p>
                        </div>  
                    </div>
                    <div class="song-card">
                        <div class="tile">
                            <img src="img/sinister.jpeg" alt="Sinister">
                            <div class="tile-overlay">
                                <i class="far fa-play-circle"></i>
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="caption">Sinister</h5>
                            <p class="subtitle">Subtitle</p>
                        </div>  
                    </div>
                </div>

                <!-- CREATO PER TILES -->
                <h2>Creato Per</h2>
                <p>Più ascolti, più accurati saranno i suggerimenti</p>
                <div class="thumbnails">
                    <div class="song-card">
                        <div class="tile">
                            <img src="img/radar.jpeg" alt="Release Radar">
                            <div class="tile-overlay">
                                <i class="far fa-play-circle"></i>
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="caption">Release Radar</h5>
                        </div>
                    </div>           
                    <div class="song-card">
                        <div class="tile">
                            <img src="img/mixdaily.jpeg" alt="Daily Mix">
                            <div class="tile-overlay">
                                <i class="far fa-play-circle"></i>
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="caption">Daily Mix 1</h5>
                        </div>
                    </div>  

                </div>

                <!-- ARTISTI POPOLARI ROUND -->
                <h2>Artisti più popolari</h2>
                <p>Più ascolti, più accurati saranno i suggerimenti</p>
                <div class="thumbnails">
                    <div class="song-card">
                        <div class="artist-round">
                            <img src="img/youg.jpeg" alt="Lana del Rey">
                            <div class="tile-overlay">
                                <i class="far fa-play-circle"></i>
                            </div>
                        </div>
                        <h5 class="caption">Lana del Rey</h5>


                    </div>
                    <div class="song-card">
                        <div class="artist-round">
                            <img src="img/einaudi.jpeg" alt="Ludovico Einaudi">
                            <div class="tile-overlay">
                                <i class="far fa-play-circle"></i>
                            </div>

                        </div>
                        <h5 class="caption">Ludovico Einaudi</h5>




                    </div>

    

                </div>
            </div>


            

            
        </div>
        <!-- END MAIN GALLERY -->

    </main>
    <!-- END MAIN CONTENT -->

    <!-- BEGIN FOOTER -->

   

    <footer>

         <!-- LEFT COLUMN FOOTER -->

        <div class="left-footer-items">
            <div class="small-thumbnail">
                <img src="img/sinister.jpeg" alt="Sinister">

            </div>
            <div class="small-caption">
                <h5>Sinister</h5>
                <p>Brano Nome</p>

            </div>
            <div class="options">
                <i class="far fa-heart"></i>
                <i class="far fa-folder"></i>
            </div>

        </div>

        <!-- CENTER COLUMN FOOTER -->

        <div class="center-footer-items">
            <div class="horizontal-menu">
                <i class="fas fa-random"></i>                
                <i class="fas fa-step-backward"></i>
                <i class="far fa-play-circle"></i>
                <i class="fas fa-step-forward"></i>
                <i class="fas fa-redo"></i>
            </div>
            <div class="song-time">
                <p>0:25</p>
                <div class="playback-bar">
                    <div id="progress">
                        <div class="cursor">
                        </div>

                    </div>
                </div>
                <p>4:35</p>
            </div>

        </div>

        <!-- RIGHT COLUMN FOOTER -->
        <div class="right-footer-items">
            <i id="list-icon" class="fas fa-list-ul"></i>
            <i id="desktop-icon" class="fas fa-desktop"></i>
            <i class="fas fa-volume-up"></i>
            <div class="volume">
                <div id="volume-current">
                    <div class="cursor">

                    </div>

                </div>

            </div>


        </div>


    </footer>

    <!-- END FOOTER -->
    
</body>
</html>