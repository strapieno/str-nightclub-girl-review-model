<?php
namespace Strapieno\NightClubGirlReview\Model\Entity\Object;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\ObjectInterface;
use Strapieno\Utils\Model\Object\Rating\RatingInterface;
use Strapieno\Utils\Model\Object\Rating\RatingTrait;

/**
 * Class RatingObject
 */
class RatingObject extends AbstractObject implements RatingInterface, ObjectInterface
{
    use RatingTrait;
}