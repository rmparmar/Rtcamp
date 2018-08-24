<?php

    require_once "config.php";

    try{

        $accessToken = $Helper->getAccessToken();
    }
    catch(\Facebook\Exception\FacebookResponseException $e){

        echo "Response Exception: ".$e->getMessage();
        exit();
    }
    catch(\Facebook\Exception\FacebookSDKException $e){

        echo "SDK Exception: ".$e->getMessage();
        exit();
    }
    
    if(!$accessToken){

        header('Location: login.php');
        exit();
    }

    $oAuth2Client = $fb->getOAuth2Client();
    if (!$accessToken->isLongLived())
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

        $Response = $fb->get('/me?fields=id,first_name,last_name,email,picture.type(large)',$accessToken);
        $userData = $Response->getGraphNode()->asArray();
        $_SESSION['userData'] = $userData;
        $_SESSION['access_token'] = (string) $accessToken;
        header('Location: index.php');
        exit();
?>

