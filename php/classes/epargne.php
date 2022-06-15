<?php

class compteEpargne extends compte
{
    private $taux;


    public function __construct(float $solde,float $taux,string $nom,string $prenom)
    {
        $this->taux = $taux;
        parent::__construct($solde,$nom,$prenom);
    }

    public function getNom()
    {
        return $this->nom;
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
        $solde = ($this->solde - $montant);
        if ($solde < 0) {
            echo "Vous n'avez pas le droit de retirer car vous serez à " . $solde . " €<br>";
        } else {
            $this->solde = $this->solde - $montant;
        }
        return $this;
    }


    public function __toString()
    {
        return 'Bonjour '.$this->nom.' '.$this->prenom.' '.' , voici votre compte epargne'. '<br>Votre solde est de : ' . $this->solde . ' € <br>Votre autorisation de découvert : Aucun <br>';
    }
}
