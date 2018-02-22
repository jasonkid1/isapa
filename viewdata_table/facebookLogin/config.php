<?php
    session_start();
    require_once "Facebook/autoload.php";


    $FB = new \Facebook\Facebook([
        'app_id' => '989875327845600',
        'app_secret' => 'eb68cae584e70bdfa59faf3a5b896168',
        'default_graph_version' => 'v2.10'
    ]);

    $helper = $FB->getRedirectLoginHelper();


