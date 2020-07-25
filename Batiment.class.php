<?php


class Batiment
{
    private $adresse;
    private $superficie;

    /**
     * Batiment constructor.
     * @param $adresse
     * @param $superficie
     */
    public function __construct(Adresse $adresse, int $superficie)
    {
        $this->adresse = $adresse;
        $this->superficie = $superficie;
    }

    public function __toString()
    {
        //TODO
        $ad = $this->adresse->__toString();
        return "Batiment de $this->superficie m² à l'adresse $ad";
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * @param mixed $superficie
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;
    }

}