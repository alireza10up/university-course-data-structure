<?php

class Stack
{
    private int $maxsize;
    private int $top;
    private SplFixedArray $items;

    public function __construct(int $maxsize)
    {
        $this->items = new SplFixedArray($maxsize);
        $this->maxsize = $maxsize;
        $this->top = -1;
    }

    /**
     * check stack is full
     *
     * @return bool
     */
    public function isFull(): bool
    {
        return !!($this->top === ($this->maxsize - 1));
    }

    /**
     * check stack is empty
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return !!($this->top === -1);
    }

    /**
     * push new value on stack
     *
     * @param mixed $value
     * @return string
     */
    public function push(mixed $value): void
    {
        if (!$this->isFull()) {
            echo 'Overflow!';
        } else {
            $this->top++;
            $this->items[$this->top] = $value;
        }
    }

    /**
     * remove last value on stack
     *
     * @return string
     */
    public function pop(): mixed
    {
        if ($this->isEmpty()) {
            echo 'Underflow!';
        } else {
            $removed = $this[$this->top];
            $this->top--;
            return $removed;
        }
    }
}