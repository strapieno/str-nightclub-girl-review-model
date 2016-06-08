<?php
namespace Strapieno\NightClubGirlReview\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\NightClub\Model\Entity\Reference\NightClubReferenceAwareInterface;
use Strapieno\NightClub\Model\Entity\Reference\NightClubReferenceAwareTrait;
use Strapieno\NightClubGirl\Model\Entity\Reference\GirlReferenceAwareInterface;
use Strapieno\NightClubGirl\Model\Entity\Reference\GirlReferenceAwareTrait;
use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\EntityInterface;
use Strapieno\Utils\Model\Object\Review\ReviewInterface;
use Strapieno\Utils\Model\Object\Review\ReviewTrait;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;

/**
 * Class ReviewEntity
 */
class ReviewEntity extends AbstractActiveRecord implements ReviewInterface,
    EntityInterface,
    DateHistoryAwareInterface,
    HydratorAwareInterface,
    GirlReferenceAwareInterface
{
    use ReviewTrait;
    use DateHistoryAwareTrait;
    use GirlReferenceAwareTrait;
}