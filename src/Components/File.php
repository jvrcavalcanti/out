<?php

declare(strict_types=1);

namespace Accolon\Out\Components;

use Accolon\Out\Component;

class File extends Component
{
    public function __contruct(private string $path)
    {
        $this->children([]);
    }

    public function render(): string
    {
        $content = file_get_contents($this->path);

        return <<<TEXT
        $content
        TEXT;
    }
}
