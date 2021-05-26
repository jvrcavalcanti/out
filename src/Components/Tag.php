<?php

declare(strict_types=1);

namespace Accolon\Out\Components;

use Accolon\Out\Component;

class Tag extends Component
{
    private string $name;

    public function __contruct(string $name, string|array|Component $children = [])
    {
        var_dump($children);
        exit;
        $this->children($children);
        $this->name = $name;
    }

    public function render(): string
    {
        $children = $this->renderChildren();
        $name = $this->name;

        return <<<TEXT
        <$name>$children</$name>
        TEXT;
    }
}
