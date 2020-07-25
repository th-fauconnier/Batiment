<?php


class Maison extends Batiment
{
    private $nbPieces;

    /**
     * Maison constructor.
     * @param $nbPieces
     */
    public function __construct($adresse, $superficie, $nbPieces)
    {
        Batiment::__construct($adresse, $superficie);
        $this->nbPieces = $nbPieces;
    }

    public function __toString()
    {
        $adresse = $this->getAdresse();
        $adresse = $adresse->__toString();
        $sup = $this->getSuperficie();
        return "La maison à l'adresse $adresse possède une superficie de $sup et $this->nbPieces pièces";
    }

    /**
     * @return mixed
     */
    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    /**
     * @param mixed $nbPieces
     */
    public function setNbPieces($nbPieces)
    {
        $this->nbPieces = $nbPieces;
    }
}

