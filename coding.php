<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <style>
            @font-face {
                font-family: HeaderFont;
                src: url('fonts/BRITANIC.TTF');
            }

            @font-face {
                font-family: BodyFont;
                src: url('fonts/verdana.ttf')
            }

            @font-face {
                font-family: TitleFont;
                src: url('fonts/LHANDW.TTF')
            }

            /*
                light red #ff5a5f
                medium red #c81D25
                dark red #8f0005
            */

            h1 {
                font-family: TitleFont;
                color:#FF5A5F;
            }

            body {
                margin:0;
                font-family: BodyFont;
                color:#8f0005;
            }

            .section-header {
                font-family: HeaderFont;
                color:#C81D25;
            }

            .header_wrapper {
                background-color: #84B2D7;
                height:50px;

                vertical-align: bottom;
            }

            .body_wrapper {
                width: 800px;
                margin: 0 auto;
                padding: 20px;
                background-color: #BFD7EA;
            }

            #page_header {
                height: 50px;
                background-color:#175072;
                position:relative;
                text-align: left;
            }

            .header_item {
                margin-right:10px;
                margin-left:10px;
                font-size:1em;
                position:relative;
                top:12px;
                float: left;
            }

            .header_item:link {
                color:#FF5A5F;
                text-decoration: none;
                font-weight:bold;
            }

            .logo {
                background-image: url(https://i.imgur.com/LtJ9XZf.png);
            }

            .divider {
                position:relative;
                float:left;
                font-size:1em;
                width:1px;
                top: 10px;
                height:30px;
                margin-right:10px;
                margin-left:10px;
                background:linear-gradient(to bottom, #ccc, #eee);
            }

            img {
                display:block;
            }

            .header_logo_symbol {
                float:left;
            }
        </style>
    </head>
    <body style="background-color: #0B3954;">
        <header id="page_header">
            <div class="header_logo">
                <img class="header_logo_symbol" src="https://i.imgur.com/LtJ9XZf.png" width="50"></img>
            </div>
            <nav class="header_links">
                <a class="header_item" href="./index.php">Homepage</a>
                <div class="divider"></div>
                <a class="header_item"  href="#about me" About Me></a>
                <a class="header_item"  href="./coding.php">Coding</a>
                <a class="header_item"  href="#music">Music</a>
                <a class="header_item"  href="./gaming.php">Games</a>
                <a class="header_item"  href="#movies">Movies</a>
                <a class="header_item"  href="#career">Career</a>
            </nav>
        </header>

        <div class="body_wrapper">
            <h2 class="section-header">Coding</h2>
            <img src="https://derpicdn.net/img/view/2015/12/31/1056350.gif" alt="Art of my purple my little pony original character: Starset" width="200">
            <body>
                I love coding! I started learning through Khan Academy when I was around 10, but stopped after a bit.
                I rediscovered my love for it during the python course for my chemistry bachelor, which is what drove me to pursue a
                minor in computer science. I know C#, Python, a little bit of C++ and HTML/CSS, which I'm practicing by making this site.
            </body>
        </div>
    </body>
</html>