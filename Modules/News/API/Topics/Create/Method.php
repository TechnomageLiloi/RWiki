<?php

namespace Liloi\Rune\Modules\News\API\Topics\Create;

use Liloi\API\Response;
use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domain\Atoms\Manager as AtomsManager;
use Liloi\Rune\Modules\News\Domain\Topics\Manager as TopicsManager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        self::accessCheck();
        TopicsManager::create();
        return new Response();
    }
}