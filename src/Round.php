<?php

namespace Daniel\KataPairer;

final class Round
{
    /**
     * @param Pair[] $pairs
     */
    public function __construct(public array $pairs)
    {
    }

    public static function create(Pair ...$pairs): self
    {
        return new self($pairs);
    }
}
