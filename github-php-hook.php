<?php
    error_reporting(1);

    $target = dirname(__FILE__);
    $token = 'ismurray';
    $wwwUser = 'www';
    $wwwGroup = 'www';

    $json = json_decode(file_get_contents('php://input'), true);

    //debug token
    //if (empty($json['token']) || $json['token'] !== $token) {
    //    exit('error request');
    //}

    $repo = $json['repository']['name'];

    $cmd = "cd $target && git pull";

    echo shell_exec($cmd);
    
    //debug shell_exec
    echo $target;
    echo $cmd;
    var_dump(preg_last_error());
