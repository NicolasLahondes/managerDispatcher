<?php


// Class of all products
/**
 * Trainees
 */
class Trainees
{
    private $lastname = null; // Await a string
    private $firstname = null; // Await a string
    private $birthdate = null; // Await a float 

    public function __construct($name, $firstname, $birthdate)
    {
        $this->lastname = $name;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
    }

    /**
     * getAllTrainees
     *
     * @return void
     */

    public static function addRankTable(&$arrayToBePushed, $name, $lastname, $date)
    {
        array_push($arrayToBePushed, new Trainees($name, $lastname, $date));
    }

    /**
     * Get the value of birthdate
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }
}
