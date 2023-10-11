<?php

class ArrayManipulator
{
    private $array;

    public function getArray(): array
    {
        return $this->array;
    }

    public function setArray(array $array): void
    {
        $this->array = $array;
    }


    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function __get(string $name)
    {

        return $this->array[$name];
    }

    public function __set(string $name, $value): void
    {

        $this->array[$name] = $value;
    }

    public function __isset(string $name): bool
    {

        return isset($this->array[$name]);
    }

    public function __unset(string $name): void
    {

        unset($this->array[$name]);
    }

    public function __toString(): string
    {

        return $formattedArray = implode(' : ', $this->array);
    }

    public function __clone(): void
    {
        $this->array = array_reverse($this->getArray());
    }

}

