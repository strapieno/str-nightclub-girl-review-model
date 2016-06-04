<?php
namespace Strapieno\NightClubGirlReview\Model;

use Strapieno\Utils\Initializer\AbstractModelServiceInitializer;

/**
 * Class ReviewModelInitializer
 */
class ReviewModelInitializer extends AbstractModelServiceInitializer
{
    const SERVICE_NAME = ReviewModelService::class;
    const INSTANCE_CLASS = ReviewModelAwareInterface::class;
    const SETTER_METHOD = 'setNightClubGirlReviewModelService';
}