<?php

namespace Daniel\KataPairer;

final class Pair
{
    public function __construct(public string $driver, public string $navigator)
    {
    }

    public static function create(string $driver, string $navigator): self
    {
        return new Pair($driver, $navigator);
    }
}
