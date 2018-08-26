<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 5/26/18
 * Time: 4:00 PM
 */

namespace FactoryExample;


use function Couchbase\defaultDecoder;

class SamsFactoryMethod extends AbstractFactoryMethod
{
    function makePHPBook($param)
    {
        switch ($param) {
            case 'Us':
                return new SamsPHPBook();
                break;
            case "other":
                return new OReillyPHPBook();
                break;
            default:
                return new SamsPHPBook();
                break;

        }

    }

}