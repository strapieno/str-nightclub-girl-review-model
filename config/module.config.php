<?php
return [
    'service_manager' => [
        'invokables' => [
            'Strapieno\NightClubGirlReview\Model\Criteria\Mongo\ReviewMongoCollectionCriteria'
            => 'Strapieno\NightClubGirlReview\Model\Criteria\Mongo\ReviewMongoCollectionCriteria'
        ],
        'aliases' => [
            'Strapieno\NightClubGirlReview\Model\Criteria\ReviewCollectionCriteria'
            => 'Strapieno\NightClubGirlReview\Model\Criteria\Mongo\ReviewMongoCollectionCriteria'
        ]
    ],
    'mongodb' => [
        'Mongo\Db' => [
            'database' => 'strapieno',
        ],
    ],
    'mongocollection' => [
        'DataGateway\Mongo\Review' => [
            'database' => 'Mongo\Db',
            'collection' => 'nightclub-review',
        ],
    ],
    'matryoshka-objects' => [
        'Review' => [
            'type' => 'Strapieno\NightClubGirlReview\Model\Entity\ReviewEntity',
            'active_record_criteria' => 'Strapieno\Model\Criteria\NotIsolatedActiveRecordCriteria'
        ]
    ],
    'matryoshka-models' => [
        'Strapieno\NightClubGirlReview\Model\ReviewModelService' => [
            'datagateway' => 'DataGateway\Mongo\Review',
            'type' => 'Strapieno\NightClubGirlReview\Model\ReviewModelService',
            'object' => 'Review',
            'resultset' => 'Strapieno\Model\ResultSet\HydratingResultSet',
            'paginator_criteria' => 'Strapieno\NightClubGirlReview\Model\Criteria\ReviewCollectionCriteria',
            'hydrator' => 'Strapieno\NightClubGirlReview\Model\Hydrator\ReviewModelMongoHydrator',
            'listeners' => [
                'Strapieno\Utils\Model\Listener\DateAwareListener',
            ],
        ],
    ],
    'strapieno_input_filter_specs' => [
        'Strapieno\NightClubGirlReview\Model\InputFilter\DefaultReviewInputFilter' => [
            "rating_value" => [
                'name' => 'rating_value',
                'validators' => [
                    "digits" => [
                        'name' => 'digits',
                        'break_chain_on_failure' => true
                    ],
                    "greaterthan" => [
                        'name' => 'greaterthan',
                        'break_chain_on_failure' => true,
                        'options' => [
                            // TODO retrive from object
                            'min' => 0
                        ],
                    ],
                    "lessthan" => [
                        'name' => 'lessthan',
                        'break_chain_on_failure' => true,
                        'options' => [
                            // TODO retrive from object
                            'max' => 10
                        ],
                    ]
                ]
            ],

        ],
        'Strapieno\NightClubGirlReview\Model\InputFilter\DefaultInputFilter' => [
            "nightclub_id" => [
                'name' => 'girl_id',
                'validators' => [
                    // TODO change validator
                    'nightclubentityexist' => [
                        'name' => 'nightclubentityexist',
                        'break_chain_on_failure' => true
                    ]
                ]
            ],
            "review_body" => [
                'name' => 'review_body',
                'validators' => [
                    'stringlength' => [
                        'name' => 'stringlength',
                        'break_chain_on_failure' => true,
                        'options' => [
                            'min' => 25,
                            'max' => 250
                        ]
                    ]
                ]
            ],
            "rating" => [
                'name' => 'rating',
                'type' => 'Strapieno\NightClubGirlReview\Model\InputFilter\DefaultReviewInputFilter',
            ]
        ]
    ]
];
