<?php


// Class of all products
class Subjects
{

    public $name = null; // Await a string
    public $teacher = null; // Await a string
    public $duration = null; // Await a string 

    public function __construct($name, $teacher, $duration)
    {

        $this->name = $name;
        $this->teacher = $teacher;
        $this->duration = $duration;
    }

    public function getAllSubjects()
    {

        $aSubjects = array(
            array('name' => "English", 'teacher' => "Delphine", 'duree' => 20),
            array('name' => "Angular", 'teacher' => "Thomas", 'duree' => 32)
        );
        return $aSubjects;
    }


    /**
     * Get the value of duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of teacher
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * Set the value of teacher
     *
     * @return  self
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;

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
