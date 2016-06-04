<?php
namespace Strapieno\NightClubGirlReview\ModelTest\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\NightClub\Model\Entity\Reference\NightClubReferenceAwareInterface;
use Strapieno\NightClub\Model\Entity\Reference\NightClubReferenceAwareTrait;
use Strapieno\NightClubGirlReview\Model\Entity\ReviewEntity;
use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\EntityInterface;
use Strapieno\Utils\Model\Object\Review\ReviewInterface;
use Strapieno\Utils\Model\Object\Review\ReviewTrait;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;

/**
 * Class ReviewEntityTest
 */
class ReviewEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ReviewEntity
     */
    protected $entity;

    public function setUp()
    {
        $this->entity = new ReviewEntity();
    }

    public function testGetSetReviewBody()
    {
        $input = 'test';
        $this->entity->setReviewBody($input);
        $this->assertSame($input, $this->entity->getReviewBody());
    }
}