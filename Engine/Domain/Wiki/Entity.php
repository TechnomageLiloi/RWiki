<?php

namespace Liloi\Rune\Domain\Wiki;

use Liloi\Tools\Entity as AbstractEntity;
use Liloi\Stylo\Parser;

/**
 * Wiki's entity.
 *
 * @method string getPath()
 * @method void setPath(string $value)
 */
class Entity extends AbstractEntity
{
    public function getStyloParse(string $fil = 'Index.md'): string
    {
        return Parser::parseString(file_get_contents($this->getPath() . '/' . $fil));
    }
}