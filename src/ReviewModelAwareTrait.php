<?php
namespace Strapieno\NightClubGirlReview\Model;

/**
 * Class ReviewModelAwareTrait
 */
trait ReviewModelAwareTrait
{
    /**
     * @var null|ReviewModelInterface
     */
    protected $nightClubGirlReviewModelService;

    /**
     * @return null|ReviewModelInterface
     */
    public function getNightClubGIrlReviewModelService()
    {
        return $this->nightClubGirlReviewModelService;
    }

    /**
     * @param ReviewModelInterface $nightClubGirlReviewModelService
     * @return $this
     */
    public function setNightClubGirlReviewModelService(ReviewModelInterface $nightClubGirlReviewModelService)
    {
        $this->nightClubGirlReviewModelService = $nightClubGirlReviewModelService;
        return $this;
    }
}