<?php

class Enterprise {
    private array $drivers = [];
    private array $vehicles = [];

    public function assignVehicleToDriver(string $chassisNumber, string $driverEmailAddress): void {
        throw new Exception('Not implemented');
    }

    private function getDriverByEmailAddress(string $driverEmailAddress): Driver {
        throw new Exception('Not implemented');
    }

    private function getVehicleByChassisNumber(string $chassisNumber): Vehicle {
        throw new Exception('Not implemented');
    }
}
