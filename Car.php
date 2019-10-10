<?php
class Car
{
    private $currentSpeed;
    private $nbSeats = 5;
    private $nbWheels = 4;
    private $color;
    private $energy;
    private $energyLevel;
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start()
    {
        $letStart='Tut tut pouet pouet vroum vroum';
        return $letStart;
    }
    public function forward()
    {
        $this->currentSpeed = 80;

        return "POUSSEZ VOUS !!!!!! J'ARRIVE !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }
    public function getEnergy():int
    {
        return $this->energy;
    }
    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}