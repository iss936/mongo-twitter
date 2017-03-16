<?php

namespace Ath\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
/**
 * @MongoDB\Document
 */
class Twitter
{
    /**
     * @MongoDB\Field(type="string")
     */
    private $name;

}

