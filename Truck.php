<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var string
     */
    private $energy;

    private $loadCapacity;

    private $load ;

    public function __construct(string $color, int $nbSeats, string $energy, int $loadCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->loadCapacity = $loadCapacity;
        $this->load = 0;
    }

    /**
     * @return int
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    /**
     * @param int $load
     */
    public function setLoad(int $load)
    {
        $this->load = $load;
    }

    public function isLoad(): void
    {   $tank = 'filling';
        if($this->load >= $this->loadCapacity){
            $tank = 'full';
        }
        return $tank;
    }
    public function addLoad(int $add) //can be negative to unload
    {
        $this->load += $add ;
        if($this->load > 50)
        {
            $this->load = 50 ;
        }
        if($this->load<0)
        {
            $this->load = 0 ;
        }
    }
}