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
            <h2 class="section-header">Gaming</h2>
        </div>
    </body>