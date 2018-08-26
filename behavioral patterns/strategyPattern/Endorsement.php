<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 7/14/18
 * Time: 5:33 PM
 */

class Endorsement
{
    /**
     * @var int
     */
    private $id;
    /** @var string */
    private $lastName;
    /** @var int */
    private $productVersion;

    /**
     * Endorsement constructor.
     */
    public function __construct()
    {
        $this->setId(123234);
        $this->setLastName("Bade");
        $this->setProductVersion(1568);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Endorsement
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return  Endorsement
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductVersion()
    {
        return $this->productVersion;
    }

    /**
     * @param mixed $productVersion
     * @return  Endorsement
     */
    public function setProductVersion($productVersion)
    {
        $this->productVersion = $productVersion;
        return $this;
    }

}