<?php

    session_start();

    require_once "Facebook/autoload.php";

    $fb = new Facebook\Facebook([

        'app_id' => '519652128504803',
        'app_secret' => 'bb2e496371eb8ea76a9613cdee8741fc',
        'default_graph_version' => 'v3.1'
    ]);

    $Helper = $fb->getRedirectLoginHelper();

?>