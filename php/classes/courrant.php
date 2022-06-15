<?php

class compteCourrant extends compte
{
    private $decouvert;

    public function __construct(float $solde,float $decouvert,string $nom,string $prenom)
    {
        $this->decouvert = $decouvert;
        parent::__construct($solde,$nom,$prenom);
    }


    /**
     * Dépot d'argent 
     * @param float $montant | montant du dépot 
     * @return void 
     */
    public function depot(float $montant)
    {
        if ($montant > 0) {
            $this->solde = $this->solde + $montant;
        } else {
            echo 'Le montant du dépot doit etre supérieur à 0 <br>';
        }
        return $this;
    }


    /**
     * Retrait d'argent dans la limite du découvert autorisé
     * @param float $montant | montant du retrait
     * @return void 
     */
    public function retrait(float $montant)
    {
        $solde = ($this->solde + $this->decouvert - $montant);
        if ($solde < 0) {
            $solde = $solde * -1;
        }
        if ($solde > $this->decouvert) {
            echo 'Vous ne pouvez pas retirer ' . $solde . '<br>';
        } else {
            $this->solde = $this->solde - $montant;
        }
        return $this;
    }




    public function __toString()
    {
        return 'Bonjour ' . $this->nom . ' ' . $this->prenom . ' ' . ' , voici votre compte courrant<br>Votre solde est de : ' . $this->solde . ' € <br>Votre autorisation de découvert : ' . $this->decouvert . ' € <br>';
    }
}
