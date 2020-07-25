<?php


class Adresse
{
    private $nbStreet;
    private $street;
    private $code;
    private $cityName;

    /**
     * Adresse constructor.
     * @param $nbStreet
     * @param $street
     * @param $code
     * @param $cityName
     */
    public function __construct(String $nbStreet, String $street, String $code, String $cityName)
    {
        $this->nbStreet = $nbStreet;
        $this->street = $street;
        $this->code = $code;
        $this->cityName = $cityName;
    }

    public function __toString()
    {
        return "Adresse : $this->nbStreet $this->street\n $this->code $this->cityName";
    }

    /**
     * @return mixed
     */
    public function getNbStreet()
    {
        return $this->nbStreet;
    }

    /**
     * @param mixed $nbStreet
     */
    public function setNbStreet($nbStreet)
    {
        $this->nbStreet = $nbStreet;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param mixed $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }


}