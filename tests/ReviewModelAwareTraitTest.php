<?php
namespace Strapieno\NightClubGirlReview\ModelTest;

use Strapieno\NightClubGirlReview\Model\ReviewModelAwareTrait;

/**
 * Class ReviewModelAwareTraitTest
 */
class ReviewModelAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ReviewModelAwareTrait
     */
    protected $trait;

    public function setUp()
    {
        $this->trait = $this->getMockForTrait('Strapieno\NightClubGirlReview\Model\ReviewModelAwareTrait');
    }

    public function testGetSetNightClubGirlReviewModelService()
    {
        $input = $this->getMockBuilder('Strapieno\NightClubGirlReview\Model\ReviewModelInterface')->getMock();
        $this->trait->setNightClubGirlReviewModelService($input);
        $this->assertSame($input, $this->trait->getNightClubGIrlReviewModelService());
    }
}