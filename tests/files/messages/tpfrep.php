<?php
return
[
    'defaults' => [
        '0065' => 'TPFREP',
        '0052' => 'D',
        '0054' => '07A',
        '0051' => 'UN',
    ],
    'segments' => [
        0 => [
            'type'       => 'segment',
            'attributes' => [
                'id'        => 'UNH',
                'maxrepeat' => '1',
                'required'  => 'true',
            ],
        ],
        1 => [
            'type'       => 'segment',
            'attributes' => [
                'id'        => 'BGM',
                'maxrepeat' => '1',
                'required'  => 'true',
            ],
        ],
        2 => [
            'type'       => 'segment',
            'attributes' => [
                'id'        => 'DTM',
                'maxrepeat' => '1',
            ],
        ],
        3 => [
            'type'       => 'group',
            'attributes' => [
                'id'        => 'SG1',
                'maxrepeat' => '1',
                'required'  => 'true',
            ],
            'details' => [
                0 => [
                    'type'       => 'segment',
                    'attributes' => [
                        'id'        => 'TDT',
                        'maxrepeat' => '1',
                        'required'  => 'true',
                    ],
                ],
                1 => [
                    'type'       => 'segment',
                    'attributes' => [
                        'id'        => 'LOC',
                        'maxrepeat' => '1',
                        'required'  => 'true',
                    ],
                ],
                2 => [
                    'type'       => 'segment',
                    'attributes' => [
                        'id'        => 'DTM',
                        'maxrepeat' => '9',
                    ],
                ],
                3 => [
                    'type'       => 'segment',
                    'attributes' => [
                        'id'        => 'RFF',
                        'maxrepeat' => '9',
                    ],
                ],
            ],
        ],
        4 => [
            'type'       => 'group',
            'attributes' => [
                'id'        => 'SG2',
                'maxrepeat' => '99',
            ],
            'details' => [
                0 => [
                    'type'       => 'segment',
                    'attributes' => [
                        'id'        => 'EQD',
                        'maxrepeat' => '1',
                        'required'  => 'true',
                    ],
                ],
                1 => [
                    'type'       => 'segment',
                    'attributes' => [
                        'id'        => 'CNT',
                        'maxrepeat' => '99',
                    ],
                ],
                2 => [
                    'type'       => 'group',
                    'attributes' => [
                        'id'        => 'SG3',
                        'maxrepeat' => '999',
                    ],
                    'details' => [
                        0 => [
                            'type'       => 'segment',
                            'attributes' => [
                                'id'        => 'DTM',
                                'maxrepeat' => '1',
                                'required'  => 'true',
                            ],
                        ],
                        1 => [
                            'type'       => 'segment',
                            'attributes' => [
                                'id'        => 'FTX',
                                'maxrepeat' => '9',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        5 => [
            'type'       => 'segment',
            'attributes' => [
                'id'        => 'UNT',
                'maxrepeat' => '1',
                'required'  => 'true',
            ],
        ],
    ],
];
