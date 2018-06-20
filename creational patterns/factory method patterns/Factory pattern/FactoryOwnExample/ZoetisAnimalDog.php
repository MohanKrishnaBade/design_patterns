<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 5/26/18
 * Time: 4:27 PM
 */

namespace FactoryOwnExample;


class ZoetisAnimalDog extends AnimalFactory
{
    private $type;

    private $lifeTime;

    public function __construct()
    {
        $this->lifeTime = "30 years";
        $this->type = "Poodle";
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getLifeTime()
    {
        return $this->lifeTime;
    }

    /**
     * @param mixed $lifeTime
     */
    public function setLifeTime($lifeTime)
    {
        $this->lifeTime = $lifeTime;
    }


}