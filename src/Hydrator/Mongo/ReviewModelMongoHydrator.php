<?php
namespace Strapieno\NightClubGirlReview\Model\Hydrator\Mongo;

use Matryoshka\Model\Hydrator\Strategy\HasOneStrategy;
use Strapieno\NightClubGirl\Model\Entity\Reference\GirlReference;
use Strapieno\NightClubGirlReview\Model\Entity\Object\RatingObject;
use Strapieno\Utils\Hydrator\Mongo\DateHistoryHydrator;

/**
 * Class ReviewModelMongoHydrator
 */
class ReviewModelMongoHydrator extends DateHistoryHydrator
{
    public function __construct($underscoreSeparatedKeys = true)
    {
        parent::__construct($underscoreSeparatedKeys);

        $this->addStrategy(
            'rating',
            new HasOneStrategy(new RatingObject(), false)
        );

        $this->addStrategy(
            'girl_reference',
           new HasOneStrategy(new GirlReference(), false)
        );

    }
}