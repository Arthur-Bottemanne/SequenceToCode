<?php

class Vehicle {
    public int $chassisNumber;

    public function __construct(int $chassisNumber) {
        $this->chassisNumber = $chassisNumber;
    }
}
