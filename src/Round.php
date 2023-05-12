<?php

namespace Daniel\KataPairer;

use ArrayIterator;
use IteratorAggregate;
use Traversable;
/**
 * @implements IteratorAggregate<int,Pair>
 */
final class Round implements IteratorAggregate
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

    public function switchRoles(): Round
    {
        $pairs = [];
        foreach ($this->pairs as $pair) {
            $pairs[] = $pair->switchRoles();
        }

        return new self($pairs);
    }

    /**
     * @return string[]
     */
    public function navigators(): array
    {
        return array_map(fn(Pair $pair) => $pair->navigator, $this->pairs);
    }

    public function atOffset(int $offset): Pair
    {
        return $this->pairs[$offset % count($this->pairs)];
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->pairs);
    }
}
