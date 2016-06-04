<?php
namespace Strapieno\NightClubGirlReview\Model\Hydrator\Mongo;

use Matryoshka\Model\Hydrator\Strategy\HasOneStrategy;
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

        /*
        $this->addStrategy(
            'night_club_reference',
        // TODO add referece
           new HasOneStrategy(new NightClubReference(), false)
        );
        */
    }
}