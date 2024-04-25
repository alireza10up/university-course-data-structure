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
    private function isFull(): bool
    {
        return !!($this->top === ($this->maxsize - 1));
    }

    /**
     * check stack is empty
     *
     * @return bool
     */
    private function isEmpty(): bool
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
        if ($this->isFull()) {
            echo PHP_EOL . 'Overflow!' . PHP_EOL;
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
            echo PHP_EOL . 'Underflow!' . PHP_EOL;
        } else {
            $removed = $this->items[$this->top];
            $this->top--;
            return $removed;
        }
    }

    /**
     * return all items
     *
     * @return array
     */
    public function getItems(): ?array
    {
        $items = [];
        if($this->isEmpty()) {
            echo PHP_EOL . 'Underflow!' . PHP_EOL;
        }else {
            for($top = $this->top;$top >= 0;$top--){
                $items[$top] = $this->items[$top];
            }
        }
        return array_reverse($items);
    }
}