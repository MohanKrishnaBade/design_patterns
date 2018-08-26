<?php

class Policy
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * Policy constructor.
     */
    public function __construct()
    {
        $this->setId(1);
        $this->setName("mohan");
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     * @return Policy
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Policy
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}