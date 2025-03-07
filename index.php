<?php

try {
    error_reporting(0);
    define('ROOT_DIR', __DIR__);

    session_start();
    include_once __DIR__ . '/vendor/autoload.php';

    $config = include __DIR__ . '/Config/Block.php';
    echo (new Liloi\Rune\Application($config))->compile();
}
catch(Throwable $e)
{
    die(var_dump($e));
    echo 'Sorry, the site is deeply down!';
}