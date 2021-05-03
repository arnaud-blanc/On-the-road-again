<?php

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Bicycle) {
            $this->setCurrentVehicles[] = $vehicle;
        }
    }
}