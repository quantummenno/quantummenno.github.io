<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta description="homepage">
        <title>Quantum's Respectable Point of Interest</title>
        <link rel="icon" type="image/x-icon" href="https://i.imgur.com/LtJ9XZf.png">

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

                steam id 278191426
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

            li {
                list-style-type:none;
                margin-bottom:10px;
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
                <a class="header_item"  href="./coding.php">Coding</a>
                <a class="header_item"  href="#music">Music</a>
                <a class="header_item"  href="./gaming.php">Games</a>
                <a class="header_item"  href="#movies">Movies</a>
                <a class="header_item"  href="#career">Career</a>
            </nav>
        </header>

        <div class="body_wrapper">
            <h1>Quantum's Respectable Point of Interest</h1>
            <img class="header_image" src="https://derpicdn.net/img/2024/9/16/3443652/large.png" alt="Art of my purple my little pony original character: Starset" width="200">

            <h2 id="about me"   class="section-header">About Me</h2>
            <h2>
                <?php echo "Hello World!" ?>
            </h2>
            <body>
                Greetings! I'm Menno, but you can also call me Quantum.
            </body>

            <h2 class="section-header">Contact Info</h2>
            <ul>
                <li>
                    <a href="https://bsky.app/profile/quantummenace.bsky.social">
                        <img src='images\32px-Bluesky_Logo.png' alt="bluesky logo" width="30">
                    </a>
                </li>
                <li>
                    <a href="https://x.com/QuantumMare">
                        <img src="images\32px-Logo_of_Twitter.png" alt="twitter logo" width="30">
                    </a>
                </li>

            </ul>

            <h2 class="section-header">Some discord servers I'm active in</h2>
            
        </div>
    </body>
</html>