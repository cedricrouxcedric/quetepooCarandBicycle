<?php
//Car.php


/**
 * Class Car
 */

class Car
{
    /**
     * @var integer
     */
    private $nbWheels;
    /**
     * @var integer
     */
    private $currentSpeed;
    private $color;
    /**
     * @var integer
     */
    private $nbSeats;
    private $energy;
    /**
     * @var integer
     */
    private $energyLevel;

    public function start(){
        return "GO!";
    }

    public function forward()
    {
        $this->currentSpeed = 15;
        return "The car is moving forward!";
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

    /**
     * @return mixed
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }
    /**
     * @return mixed
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @return mixed
     */
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function __construct(string $color,int $nbSeats,string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }}
