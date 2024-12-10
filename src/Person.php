<?php

abstract class Person
{
    public string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }
}
