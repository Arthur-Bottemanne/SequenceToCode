<?php

class Driver extends Person {
    private Vehicle $vehicle;

    public function __construct(string $email) {
        parent::__construct($email);
    }

    public function takeAVehicle(Vehicle $vehicle): void {
        throw new Exception('Not implemented');
    }
}
