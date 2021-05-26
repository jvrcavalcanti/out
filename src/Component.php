<?php

declare(strict_types=1);

namespace Accolon\Out;

abstract class Component
{
    protected string|array|Component $children;

    abstract public function render(): string;

    protected function children(string|array|Component $children): void
    {
        $this->children = $children;
    }

    public function renderChildren(): string
    {
        if (is_array($this->children)) {
            $this->children = [$this->children];
        }

        $result = '';

        foreach ($this->children as $children) {
            $result .= match (is_string($children)) {
                true => $children,
                false => $children->render(),
            };
        }

        return $result;
    }
}
