<?php

// Bicycle.php

/**
 * Class Bicycle
 */

class Bicycle
{
    private $color;

    /**
     * @var integer
     */
    public $currentSpeed;
    /**
     * @var integer
     */
    private $nbSeats = 1;
    /**
     * @var integer
     */
    private $nbWheels = 2;

public function forward()
{
    $this->currentSpeed = 15;

    return "Go !";
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
    public function dump()
{
    var_dump($this);

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
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }}

    /**
     * Bicycle constructor.
     * @param string $color
     */

    public function __construct($color)
    {
        $this->color = $color;
    }

}