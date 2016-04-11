<?php
return array(
    'defaults' => array(
            '0065' => 'TPFREP',
            '0052' => 'D',
            '0054' => '07A',
            '0051' => 'UN',
        ),
    'segments' => array(
            0 => array(
                    'type'       => 'segment',
                    'attributes' => array(
                            'id'        => 'UNH',
                            'maxrepeat' => '1',
                            'required'  => 'true',
                        ),
                ),
            1 => array(
                    'type'       => 'segment',
                    'attributes' => array(
                            'id'        => 'BGM',
                            'maxrepeat' => '1',
                            'required'  => 'true',
                        ),
                ),
            2 => array(
                    'type'       => 'segment',
                    'attributes' => array(
                            'id'        => 'DTM',
                            'maxrepeat' => '1',
                        ),
                ),
            3 => array(
                    'type'       => 'group',
                    'attributes' => array(
                            'id'        => 'SG1',
                            'maxrepeat' => '1',
                            'required'  => 'true',
                        ),
                    'details'    => array(
                            0 => array(
                                    'type'       => 'segment',
                                    'attributes' => array(
                                            'id'        => 'TDT',
                                            'maxrepeat' => '1',
                                            'required'  => 'true',
                                        ),
                                ),
                            1 => array(
                                    'type'       => 'segment',
                                    'attributes' => array(
                                            'id'        => 'LOC',
                                            'maxrepeat' => '1',
                                            'required'  => 'true',
                                        ),
                                ),
                            2 => array(
                                    'type'       => 'segment',
                                    'attributes' => array(
                                            'id'        => 'DTM',
                                            'maxrepeat' => '9',
                                        ),
                                ),
                            3 => array(
                                    'type'       => 'segment',
                                    'attributes' => array(
                                            'id'        => 'RFF',
                                            'maxrepeat' => '9',
                                        ),
                                ),
                        ),
                ),
            4 => array(
                    'type'       => 'group',
                    'attributes' => array(
                            'id'        => 'SG2',
                            'maxrepeat' => '99',
                        ),
                    'details'    => array(
                            0 => array(
                                    'type'       => 'segment',
                                    'attributes' => array(
                                            'id'        => 'EQD',
                                            'maxrepeat' => '1',
                                            'required'  => 'true',
                                        ),
                                ),
                            1 => array(
                                    'type'       => 'segment',
                                    'attributes' => array(
                                            'id'        => 'CNT',
                                            'maxrepeat' => '99',
                                        ),
                                ),
                            2 => array(
                                    'type'       => 'group',
                                    'attributes' => array(
                                            'id'        => 'SG3',
                                            'maxrepeat' => '999',
                                        ),
                                    'details'    => array(
                                            0 => array(
                                                    'type'       => 'segment',
                                                    'attributes' => array(
                                                            'id'        => 'DTM',
                                                            'maxrepeat' => '1',
                                                            'required'  => 'true',
                                                        ),
                                                ),
                                            1 => array(
                                                    'type'       => 'segment',
                                                    'attributes' => array(
                                                            'id'        => 'FTX',
                                                            'maxrepeat' => '9',
                                                        ),
                                                ),
                                        ),
                                ),
                        ),
                ),
            5 => array(
                    'type'       => 'segment',
                    'attributes' => array(
                            'id'        => 'UNT',
                            'maxrepeat' => '1',
                            'required'  => 'true',
                        ),
                ),
        ),
);