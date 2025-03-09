<?php

namespace Liloi\Rune\Domain\Wiki;

/**
 * Wiki's manager.
 *
 * @package Liloi\Exams\Engine\Domain\Questions
 */
class Manager
{
    public static function load(string $URL): Entity
    {
        $link = self::URLToLink($URL);

        return Entity::create([
            'link' => $link,
            'path' => ROOT_DIR . $link
        ]);
    }

    public static function URLToLink(string $URL): string
    {
        $link = '/' . trim($URL, '/');
        return $link;
    }
}