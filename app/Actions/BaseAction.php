<?php

namespace App\Actions;

abstract class BaseAction
{
    public static function make(): self
    {
        $class = get_called_class();

        return new $class(...func_get_args());
    }

    abstract public function call(): void;
}
