<?php


// Class of all products
class Teachers
{

    private $firstname = null; // Await a string
    private $lastname = null; // Await a string
    private $business = null; // Await a string 

    public function __construct($firstname, $lastname, $business)
    {

        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->business = $business;
    }

    // All getters

    public function getfirstname()
    {
        return $this->firstname;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getbusiness()
    {
        return $this->business;
    }



    // All setters 
    public function setfirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setBusiness($business)
    {
        $this->business = $business;
    }
}
