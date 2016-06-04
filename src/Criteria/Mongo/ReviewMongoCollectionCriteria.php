<?php
namespace Strapieno\NightClubGirlReview\Model\Criteria\Mongo;

use Matryoshka\Model\Wrapper\Mongo\Criteria\FindAllCriteria;

/**
 * Class ReviewMongoCollectionCriteria
 */
class ReviewMongoCollectionCriteria extends FindAllCriteria
{
    /**
     * @param $girlId
     * @return $this
     */
    public function setGirlId($girlId)
    {
        $this->selectionCriteria['girl_reference.id'] = $girlId;

        return $this;
    }
}