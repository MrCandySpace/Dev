<?php

abstract class compte
{
    protected $solde;
    protected $nom;
    protected $prenom;


    /**
     * Constructeur 
     * 
     * @param float $solde
     * @param string $nom
     * @param string $prenom
     */

    protected function __construct(float $solde,string $nom,string $prenom)
    {
        $this->solde = $solde;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function __toString()
    {
        return $this->nom . ' ' . $this->prenom . ' ' . '<br>Votre solde est de : ' . $this->solde . ' €';
    }
}
