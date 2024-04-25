<?php

class stack
{
    const int MAXSIZE = 10;
    private readonly SplFixedArray $items;
    private int $top = -1;

    public function __construct()
    {
        $this->items = new SplFixedArray(stack::MAXSIZE);
    }

    public function isFull(): bool
    {

    }

    public function isEmpty(): bool
    {

    }

    public function push(mixed $value): void
    {

    }

    public function pop(): mixed
    {

    }
}