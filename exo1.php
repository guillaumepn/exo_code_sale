<?php

class maclasscrado
{
    private $my_model;

    public function __construct($nom, $prenom, $classe)
    {
        $this->my_model = new model_crado();
        $this->my_model->nom = $nom;
        $this->my_model->prenom;
        $this->my_model->setClasse($classe);
    }

    public function modelFormatter_DisplayAction()
    {
        if (is_null($this->my_model->nom)) {
            return false;
        }
        else if (is_null($this->my_model->prenom)) {
            return false;
        }
        else
        {
            return $this->my_model->getFullName() . ' est dans la classe '. $this->my_model->getClasse();
        }
    }
}

class model_crado
{
    public $nom;
    public $prenom;
    private $classe;

    public function getClasse() { return $this->classe; }
    public function setClasse($classe) { $this->classe = $classe; }

    public function getFullName() {
        return $this->nom . ' ' . $this->prenom;
    }
}

$maclasse = new maclasscrado('nom', 'prenom', 'classe');

echo $maclasse->modelFormatter_DisplayAction();
