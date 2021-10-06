<?php


// Class of all promos
/**
 * Promotions
 */
class Promotions
{

    private $name = null; // Await a string
    private $debutDate = null; // Await an int
    private $endDate = null; // Await an int

    public function __construct($name, $debutDate, $endDate)
    {

        $this->name = $name;
        $this->debutDate = $debutDate;
        $this->endDate = $endDate;
    }


    /**
     * Get the value of endDate
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set the value of endDate
     *
     * @return  self
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get the value of debutDate
     */
    public function getDebutDate()
    {
        return $this->debutDate;
    }

    /**
     * Set the value of debutDate
     *
     * @return  self
     */
    public function setDebutDate($debutDate)
    {
        $this->debutDate = $debutDate;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
