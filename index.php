<!DOCTYPE html>
<!--
TP1ej7 - 2
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href='estilo.css' rel='stylesheet' type="text/css">
    </head>
    <body>
        <div id='tab-container' class='tab-container'>
            <ul id='etabs'>
                <li id='tab-1' class='tab'><a href='#tabsl-html'>Tab 1</a></li>
                <li id='tab-2' class='tab'><a href='#tabsl-js'>Tab 2</a></li>
                <li id='tab-3' class='tab'><a href='#tabsl-css'>Tab 3</a></li>
            </ul>
            <div id='tabsl-html'>
                html
            </div>
            <div id='tabsl-js'>
                js
            </div>
            <div id='tabsl-css'>
                css
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="jquery-2.2.1.min.js"></script>
        <script src='https://github.com/JangoSteve/jQuery-EasyTabs/blob/master/lib/jquery.easytabs.js'></script>
        <script src='https://raw.githubusercontent.com/cowboy/jquery-hashchange/v1.3/jquery.ba-hashchange.js'></script>
        <script>
            $('#tab-container').easytabs();
        </script>
    </body>
</html>
