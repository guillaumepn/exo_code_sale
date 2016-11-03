<?php

class CleanClass
{
    private $myModel;

    public function __construct($lastName, $firstName, $class)
    {
        $this->myModel = new CleanModel();
        $this->myModel->setLastName($lastName);
        $this->myModel->setFirstName($firstName);
        $this->myModel->setClass($class);
    }

    public function displayModel()
    {
        if (is_null($this->myModel->getLastName()) || is_null($this->myModel->getFirstName())) {
            return false;
        }

        return $this->myModel->getFullName() . ' est dans la classe '. $this->myModel->getClass();
    }
}

class CleanModel
{
    private $firstName;
    private $lastName;
    private $class;

    public function getFirstName() {
      return $this->firstName;
    }

    public function setFirstName($firstName) {
      $this->firstName = $firstName;
    }

    public function getLastName() {
      return $this->lastName;
    }

    public function setLastName($lastName) {
      $this->lastName = $lastName;
    }

    public function getClass() {
      return $this->class;
    }

    public function setClass($class) {
      $this->class = $class;
    }

    public function getFullName() {
        return $this->lastName . ' ' . $this->firstName;
    }
}

$myClass = new CleanClass('nom', 'prenom', 'classe');

echo $myClass->displayModel();
