<?php

namespace Liloi\Rune\API\Wiki\Show;

use Liloi\API\Response;
use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Security;
use Liloi\Rune\Modules\News\Domain\Topics\Manager as TopicsManager;
use Liloi\Rune\Domain\Wiki\Manager as WikiManager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $URL = $_SERVER['REQUEST_URI'];

        $response = new Response();

        if($URL === '/')
        {
            $topics = TopicsManager::loadCollection();
            $response->set('render', static::render(__DIR__ . '/News.tpl', [
                'topics' => $topics
            ]));
        }
        else
        {
            $wiki = WikiManager::load($URL);
            $response->set('render', static::render(__DIR__ . '/Templates/Stylo.tpl', [
                'wiki' => $wiki
            ]));
        }

        return $response;
    }
}