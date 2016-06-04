<?php
namespace Strapieno\NightClubGirlReview\Model;

/**
 * Interface ReviewModelAwareInterface
 */
interface ReviewModelAwareInterface
{
    /**
     * @return null|ReviewModelInterface
     */
    public function getNightClubGIrlReviewModelService();

    /**
     * @param ReviewModelInterface $nightClubGirlReviewModelService
     * @return $this
     */
    public function setNightClubGirlReviewModelService(ReviewModelInterface $nightClubGirlReviewModelService);
}