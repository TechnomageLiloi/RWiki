<?php

namespace Liloi\Rune\Modules;

use Liloi\API\Manager as APIManager;
use Liloi\API\Method;

/**
 * @inheritDoc
 */
class Modules
{
    public static function collect(APIManager $manager): APIManager
    {
        $manager->add(new Method('Rune.Topics.Create', '\Liloi\Rune\Modules\News\API\Topics\Create\Method::execute'));
        $manager->add(new Method('Rune.Topics.Show', '\Liloi\Rune\Modules\News\API\Topics\Show\Method::execute'));
        $manager->add(new Method('Rune.Topics.Edit', '\Liloi\Rune\Modules\News\API\Topics\Edit\Method::execute'));
        $manager->add(new Method('Rune.Topics.Save', '\Liloi\Rune\Modules\News\API\Topics\Save\Method::execute'));

        return $manager;
    }
}