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

    public function __construct($lastname, $firstname, $birthdate)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
    }

    /**
     * getAllTrainees
     *
     * @return void
     */

    // **************************************************************************************************************
    // ALL METHODS HERE
    // **************************************************************************************************************
    /**
     * add a whole rank in the table
     *
     * @param  mixed $arrayToBePushed
     * @param  mixed $lastname
     * @param  mixed $firstname
     * @param  mixed $date
     * @return void
     */
    public static function addRankTable(&$arrayToBePushed, $lastname, $firstname,  $date)
    {
        array_push($arrayToBePushed, new Trainees($lastname, $firstname,  $date));
    }

    /**
     * remove a whole row in the table
     *
     * @param  mixed $arrayToBeDeleted
     * @param  mixed $index
     * @return void
     */
    public static function removeRankTable(&$arrayToBeDeleted, $index)
    {
        unset($arrayToBeDeleted[$index]);
    }

    /**
     * Change whole row in the table
     *
     * @param  mixed $arrayRankToModify
     * @param  mixed $index
     * @param  mixed $lastname
     * @param  mixed $firstname
     * @param  mixed $date
     * @return void
     */
    public static function changeRankTable(&$arrayRankToModify, $index, $lastname, $firstname,  $date)
    {
        $arrayRankToModify[$index]->setLastName($lastname);
        $arrayRankToModify[$index]->setFirstName($firstname);
        $arrayRankToModify[$index]->setBirthdate($date);
    }

    /**
     * changeFirstName
     *
     * @param  mixed $arrayRankToModify
     * @param  mixed $index
     * @param  mixed $firstname
     * @return void
     */
    public static function changeFirstName(&$arrayRankToModify, $index, $firstname)
    {

        $arrayRankToModify[$index]->setFirstName($firstname);
    }

    /**
     * changeLastName
     *
     * @param  mixed $arrayRankToModify
     * @param  mixed $index
     * @param  mixed $lastname
     * @return void
     */
    public static function changeLastName(&$arrayRankToModify, $index, $lastname)
    {

        $arrayRankToModify[$index]->setLastName($lastname);
    }

    /**
     * changeBirthDate
     *
     * @param  mixed $arrayRankToModify
     * @param  mixed $index
     * @param  mixed $birthdate
     * @return void
     */
    public static function changeBirthDate(&$arrayRankToModify, $index, $birthdate)
    {

        $arrayRankToModify[$index]->setBirthdate($birthdate);
    }

    public static function listAll(&$arrayToDisplay)
    {
        foreach ($arrayToDisplay as $key => $value) {

            echo  $arrayToDisplay[$key]->getFirstname($value);
            echo " / ";
            echo  $arrayToDisplay[$key]->getLastname($value);
            echo " / ";
            echo  $arrayToDisplay[$key]->getBirthDate($value);
            echo "<br>";
        }
    }

    // **************************************************************************************************************
    // ALL GETTERS AND SETTERS
    // **************************************************************************************************************

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
