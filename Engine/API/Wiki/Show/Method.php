<?php

namespace Liloi\Rune\API\Wiki\Show;

use Liloi\API\Response;
use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Security;
use Liloi\Rune\Modules\News\Domain\Topics\Manager as TopicsManager;
use Liloi\Rune\Exceptions\NotImplementedException;
use Liloi\Rune\Domain\Wiki\Manager as WikiManager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $URL = $_SERVER['REQUEST_URI'];

        if($URL === '/')
        {
            $topics = TopicsManager::loadCollection();

            $response = new Response();
            $response->set('render', static::render(__DIR__ . '/News.tpl', [
                'topics' => $topics
            ]));
            return $response;
        }

        $wiki = WikiManager::load($URL);

        throw new NotImplementedException();
    }
}