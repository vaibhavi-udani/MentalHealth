<?php
ini_set("allow_url_fopen", 1);
$json = file_get_contents('http://quotes.rest/qod.json');
$obj = json_decode($json);
 ?>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Abel|Asap|Oxygen" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="wellness_s.css">
    </head>


    <div class="motivation">
        <h1>Food for Thought</h1>
        <hr>
        <p id="text">
           <?php
            echo $obj->contents->quotes[0]->quote; ?>
        </p>
    </div>
    <span style="z-index:50;font-size:0.9em;"><img src="https://theysaidso.com/branding/theysaidso.png" height="20" width="20" alt="theysaidso.com"/><a href="https://theysaidso.com" title="Powered by quotes from theysaidso.com" style="color: green; margin-left: 4px; vertical-align: middle;">theysaidso.com</a></span>
