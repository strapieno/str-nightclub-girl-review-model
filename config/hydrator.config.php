<?php
return [
    'invokables' => [
        'Strapieno\NightClubGirlReview\Model\Hydrator\Mongo\ReviewModelMongoHydrator'
            => 'Strapieno\NightClubGirlReview\Model\Hydrator\Mongo\ReviewModelMongoHydrator'
    ],
    'aliases' => [
        'Strapieno\NightClubGirlReview\Model\Hydrator\ReviewModelMongoHydrator'
            => 'Strapieno\NightClubGirlReview\Model\Hydrator\Mongo\ReviewModelMongoHydrator'
    ]
];