<?php 
return array (
  'ADR' => 
  array (
    'attributes' => 
    array (
      'id' => 'ADR',
      'name' => 'address',
      'desc' => 'To specify an address.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C817',
          'name' => 'addressUsage',
          'desc' => 'To describe the usage of an address.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3299',
              'name' => 'addressPurposeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the purpose of an address.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3131',
              'name' => 'addressTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the type of an address.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3475',
              'name' => 'addressStatusCode',
              'usage' => 'C',
              'desc' => 'Code specifying the status of an address.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C090',
          'name' => 'addressDetails',
          'desc' => 'To specify the details of an address.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3477',
              'required' => 'true',
              'name' => 'addressFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the format of an address.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3286',
              'required' => 'true',
              'name' => 'addressComponentDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the component of an address.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3286',
              'name' => 'addressComponentDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the component of an address.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3286',
              'name' => 'addressComponentDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the component of an address.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3286',
              'name' => 'addressComponentDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the component of an address.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3286',
              'name' => 'addressComponentDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the component of an address.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3164',
          'name' => 'cityName',
          'usage' => 'C',
          'desc' => 'Name of a city.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3251',
          'name' => 'postalIdentificationCode',
          'usage' => 'C',
          'desc' => 'Code specifying the postal zone or address.',
          'type' => 'an',
          'maxlength' => '17',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3207',
          'name' => 'countryIdentifier',
          'usage' => 'C',
          'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C819',
          'name' => 'countrySubdivisionDetails',
          'desc' => 'To specify a country subdivision, such as state, canton, county, prefecture.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3229',
              'name' => 'countrySubdivisionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a country subdivision, such as state, canton, county, prefecture.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3228',
              'name' => 'countrySubdivisionName',
              'usage' => 'C',
              'desc' => 'Name of a country subdivision, such as state, canton, county, prefecture.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C517',
          'name' => 'locationIdentification',
          'desc' => 'Identification of a location by code or name.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3224',
              'name' => 'locationName',
              'usage' => 'C',
              'desc' => 'Name of the location.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
    ),
  ),
  'AGR' => 
  array (
    'attributes' => 
    array (
      'id' => 'AGR',
      'name' => 'agreementIdentification',
      'desc' => 'To specify the agreement details.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C543',
          'name' => 'agreementTypeIdentification',
          'desc' => 'Identification of specific agreement type by code or name.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7431',
              'required' => 'true',
              'name' => 'agreementTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the type of agreement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7433',
              'name' => 'agreementTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of agreement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7434',
              'name' => 'agreementTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the type of agreement.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9419',
          'name' => 'serviceLayerCode',
          'usage' => 'B',
          'desc' => 'Code specifying a service layer.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'AJT' => 
  array (
    'attributes' => 
    array (
      'id' => 'AJT',
      'name' => 'adjustmentDetails',
      'desc' => 'To identify the reason for an adjustment.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4465',
          'required' => 'true',
          'name' => 'adjustmentReasonDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the adjustment reason.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1082',
          'name' => 'lineItemIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a line item.',
          'type' => 'an',
          'maxlength' => '6',
        ),
      ),
    ),
  ),
  'ALC' => 
  array (
    'attributes' => 
    array (
      'id' => 'ALC',
      'name' => 'allowanceOrCharge',
      'desc' => 'To identify allowance or charge details.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5463',
          'required' => 'true',
          'name' => 'allowanceOrChargeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying an allowance or charge.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C552',
          'name' => 'allowancechargeInformation',
          'desc' => 'Identification of allowance/charge information by number and/or code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1230',
              'name' => 'allowanceOrChargeIdentifier',
              'usage' => 'B',
              'desc' => 'To identify an allowance or charge.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5189',
              'name' => 'allowanceOrChargeIdentificationCode',
              'usage' => 'B',
              'desc' => 'Code specifying the identification of an allowance or charge.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4471',
          'name' => 'settlementMeansCode',
          'usage' => 'B',
          'desc' => 'Code specifying the means of settlement.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1227',
          'name' => 'calculationSequenceCode',
          'usage' => 'B',
          'desc' => 'Code specifying a calculation sequence.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C214',
          'name' => 'specialServicesIdentification',
          'desc' => 'Identification of a special service by a code from a specified source or by description.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7161',
              'name' => 'specialServiceDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a special service.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7160',
              'name' => 'specialServiceDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a special service.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7160',
              'name' => 'specialServiceDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a special service.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'ALI' => 
  array (
    'attributes' => 
    array (
      'id' => 'ALI',
      'name' => 'additionalInformation',
      'desc' => 'To indicate that special conditions due to the origin, customs preference, fiscal or commercial factors are applicable.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3239',
          'name' => 'countryOfOriginIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the country in which the goods have been produced or manufactured, according to criteria laid down for the application of the Customs tariff or quantitative restrictions, or any measure related to trade.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9213',
          'name' => 'dutyRegimeTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying a type of duty regime.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4183',
          'name' => 'specialConditionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a special condition.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4183',
          'name' => 'specialConditionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a special condition.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4183',
          'name' => 'specialConditionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a special condition.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4183',
          'name' => 'specialConditionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a special condition.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4183',
          'name' => 'specialConditionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a special condition.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'APP' => 
  array (
    'attributes' => 
    array (
      'id' => 'APP',
      'name' => 'applicability',
      'desc' => 'To specify the applicability.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9051',
          'name' => 'applicabilityCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the applicability.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C973',
          'name' => 'applicabilityType',
          'desc' => 'Specification of the applicability type in coded or clear form.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9049',
              'name' => 'applicabilityTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of applicability.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9048',
              'name' => 'applicabilityTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the type of applicability.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'APR' => 
  array (
    'attributes' => 
    array (
      'id' => 'APR',
      'name' => 'additionalPriceInformation',
      'desc' => 'To provide information concerning pricing related to class of trade, price multiplier, and reason for change.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4043',
          'name' => 'tradeClassCode',
          'usage' => 'B',
          'desc' => 'Code identifying the class of trade.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C138',
          'name' => 'priceMultiplierInformation',
          'desc' => 'Price multiplier and its identification.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5394',
              'required' => 'true',
              'name' => 'priceMultiplierRate',
              'usage' => 'B',
              'desc' => 'To specify the rate of a price multiplier.',
              'type' => 'n',
              'maxlength' => '12',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5393',
              'name' => 'priceMultiplierTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the type of price multiplier.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C960',
          'name' => 'reasonForChange',
          'desc' => 'Code and/or description of the reason for a change.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4295',
              'name' => 'changeReasonDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the reason for a change.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4294',
              'name' => 'changeReasonDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the reason for change.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'ARD' => 
  array (
    'attributes' => 
    array (
      'id' => 'ARD',
      'name' => 'monetaryAmountFunction',
      'desc' => 'To provide details of the function of a monetary amount.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C549',
          'name' => 'monetaryAmountFunction',
          'desc' => 'To identify the function of a monetary amount.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5007',
              'name' => 'monetaryAmountFunctionDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the monetary amount function.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5006',
              'name' => 'monetaryAmountFunctionDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the monetary amount function.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C008',
          'name' => 'monetaryAmountFunctionDetail',
          'desc' => 'To provide the detail of a monetary amount function.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5105',
              'name' => 'monetaryAmountFunctionDetailDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the detail of a monetary amount function.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5104',
              'name' => 'monetaryAmountFunctionDetailDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the detail of a monetary amount function.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
    ),
  ),
  'ARR' => 
  array (
    'attributes' => 
    array (
      'id' => 'ARR',
      'name' => 'arrayInformation',
      'desc' => 'To contain the data in an array.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C778',
          'name' => 'positionIdentification',
          'desc' => 'To identify the position of an object in a structure containing the object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7164',
              'name' => 'hierarchicalStructureLevelIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a level within a hierarchical structure.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C770',
          'name' => 'arrayCellDetails',
          'desc' => 'To contain the data for a contiguous set of cells in an array.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9424',
              'name' => 'arrayCellDataDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the content of an array cell.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
    ),
  ),
  'ASI' => 
  array (
    'attributes' => 
    array (
      'id' => 'ASI',
      'name' => 'arrayStructureIdentification',
      'desc' => 'To identify the structure of an array.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C779',
          'required' => 'true',
          'name' => 'arrayStructureIdentification',
          'desc' => 'The identification of an array structure.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9428',
              'required' => 'true',
              'name' => 'arrayCellStructureIdentifier',
              'usage' => 'B',
              'desc' => 'To identify an array cell structure.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C082',
          'name' => 'partyIdentificationDetails',
          'desc' => 'Identification of a transaction party by code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'required' => 'true',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'ATT' => 
  array (
    'attributes' => 
    array (
      'id' => 'ATT',
      'name' => 'attribute',
      'desc' => 'To identify a specific attribute.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9017',
          'required' => 'true',
          'name' => 'attributeFunctionCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code qualifying an attribute function.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C955',
          'name' => 'attributeType',
          'desc' => 'Identification of the type of attribute.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9021',
              'name' => 'attributeTypeDescriptionCode',
              'usage' => 'C',
              'desc' => 'Coded specifying an attribute type.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9020',
              'name' => 'attributeTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of an attribute type.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C956',
          'name' => 'attributeDetail',
          'desc' => 'Identification of the attribute related to an entity.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9019',
              'name' => 'attributeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying an attribute.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9018',
              'name' => 'attributeDescription',
              'usage' => 'C',
              'desc' => 'Free form description of an attribute.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
    ),
  ),
  'AUT' => 
  array (
    'attributes' => 
    array (
      'id' => 'AUT',
      'name' => 'authenticationResult',
      'desc' => 'To specify results of the application of an authentication procedure.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9280',
          'required' => 'true',
          'name' => 'validationResultText',
          'usage' => 'B',
          'desc' => 'To specify the value of a validation result.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9282',
          'name' => 'validationKeyIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the cryptographic key used for the calculation of the validation.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
    ),
  ),
  'BAS' => 
  array (
    'attributes' => 
    array (
      'id' => 'BAS',
      'name' => 'basis',
      'desc' => 'To describe the foundation or starting point.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9045',
          'required' => 'true',
          'name' => 'basisCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the basis.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C974',
          'required' => 'true',
          'name' => 'basisType',
          'desc' => 'Specification of the basis in coded or clear form.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9047',
              'name' => 'basisTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of basis.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9046',
              'name' => 'basisTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the basis type.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'BGM' => 
  array (
    'attributes' => 
    array (
      'id' => 'BGM',
      'name' => 'beginningOfMessage',
      'desc' => 'To indicate the type and function of a message and to transmit the identifying number.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C002',
          'name' => 'documentmessageName',
          'desc' => 'Identification of a type of document/message by code or name. Code preferred.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1001',
              'name' => 'documentNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the document name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1000',
              'name' => 'documentName',
              'usage' => 'B',
              'desc' => 'Name of a document.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C106',
          'name' => 'documentmessageIdentification',
          'desc' => 'Identification of a document/message by its number and eventually its version or revision.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1004',
              'name' => 'documentIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a document.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1056',
              'name' => 'versionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a version.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1060',
              'name' => 'revisionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a revision.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1225',
          'name' => 'messageFunctionCode',
          'usage' => 'C',
          'desc' => 'Code indicating the function of the message.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4343',
          'name' => 'responseTypeCode',
          'usage' => 'C',
          'desc' => 'Code specifying the type of acknowledgment required or transmitted.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'BII' => 
  array (
    'attributes' => 
    array (
      'id' => 'BII',
      'name' => 'structureIdentification',
      'desc' => 'A segment used to convey an indexing structure mechanism which identifies the positioning of a group or item.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7429',
          'required' => 'true',
          'name' => 'indexingStructureCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying an indexing structure.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C045',
          'required' => 'true',
          'name' => 'billLevelIdentification',
          'desc' => 'A sequenced collection of facetted codes used for multiple indexing purposes.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7436',
              'name' => 'levelOneIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the first facet of a sequencing mechanism used to position an item within an indexing structure.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7438',
              'name' => 'levelTwoIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the second facet of a sequencing mechanism used to position an item within an indexing structure.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7440',
              'name' => 'levelThreeIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the third facet of a sequencing mechanism used to position an item within an indexing structure.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7442',
              'name' => 'levelFourIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the fourth facet of a sequencing mechanism used to position an item within an indexing structure.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7444',
              'name' => 'levelFiveIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the fifth facet of a sequencing mechanism used to position an item within an indexing structure.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7446',
              'name' => 'levelSixIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the sixth facet of a sequencing mechanism used to position an item within an indexing structure.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7140',
          'name' => 'itemIdentifier',
          'usage' => 'C',
          'desc' => 'To identify an item.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
    ),
  ),
  'BUS' => 
  array (
    'attributes' => 
    array (
      'id' => 'BUS',
      'name' => 'businessFunction',
      'desc' => 'To provide information related to the processing and purpose of a financial message.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C521',
          'name' => 'businessFunction',
          'desc' => 'To specify a business reason.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4027',
              'required' => 'true',
              'name' => 'businessFunctionTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the type of business function.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4025',
              'required' => 'true',
              'name' => 'businessFunctionCode',
              'usage' => 'C',
              'desc' => 'Code describing the specific business function.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4022',
              'name' => 'businessDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a business.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3279',
          'name' => 'geographicAreaCode',
          'usage' => 'B',
          'desc' => 'Code specifying a geographical area.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4487',
          'name' => 'financialTransactionTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying a type of financial transaction.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C551',
          'name' => 'bankOperation',
          'desc' => 'Identification of a bank operation by code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4383',
              'required' => 'true',
              'name' => 'bankOperationCode',
              'usage' => 'B',
              'desc' => 'Code specifying a bank operation.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4463',
          'name' => 'intracompanyPaymentIndicatorCode',
          'usage' => 'B',
          'desc' => 'Code indicating an intra-company payment.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'CAV' => 
  array (
    'attributes' => 
    array (
      'id' => 'CAV',
      'name' => 'characteristicValue',
      'desc' => 'To provide the value of a characteristic.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C889',
          'required' => 'true',
          'name' => 'characteristicValue',
          'desc' => 'To provide the value of a characteristic.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7111',
              'name' => 'characteristicValueDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the value of a characteristic.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7110',
              'name' => 'characteristicValueDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the value of a characteristic.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7110',
              'name' => 'characteristicValueDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the value of a characteristic.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'CCD' => 
  array (
    'attributes' => 
    array (
      'id' => 'CCD',
      'name' => 'creditCoverDetails',
      'desc' => 'To request a credit cover, reply to that request and disclose the reason for the reply.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4505',
          'name' => 'creditCoverRequestTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying the type of request for credit cover.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4507',
          'name' => 'creditCoverResponseTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying the type of response to a request for credit cover.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4509',
          'name' => 'creditCoverResponseReasonCode',
          'usage' => 'B',
          'desc' => 'Code specifying the reason for a response to a request for credit cover.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'CCI' => 
  array (
    'attributes' => 
    array (
      'id' => 'CCI',
      'name' => 'characteristicclassId',
      'desc' => 'To identify and describe a specific characteristic and its relevance for subsequent business processes.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7059',
          'name' => 'classTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying the type of class.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C502',
          'name' => 'measurementDetails',
          'desc' => 'Identification of measurement type.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6313',
              'name' => 'measuredAttributeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the attribute measured.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6321',
              'name' => 'measurementSignificanceCode',
              'usage' => 'C',
              'desc' => 'Code specifying the significance of a measurement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6155',
              'name' => 'nondiscreteMeasurementNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying the name of a non-discrete measurement.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6154',
              'name' => 'nondiscreteMeasurementName',
              'usage' => 'B',
              'desc' => 'Name of a non-discrete measurement.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C240',
          'name' => 'characteristicDescription',
          'desc' => 'To provide a description of a characteristic.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7037',
              'required' => 'true',
              'name' => 'characteristicDescriptionCode',
              'usage' => 'C',
              'desc' => 'A code specifying a characteristic.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7036',
              'name' => 'characteristicDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a characteristic.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7036',
              'name' => 'characteristicDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a characteristic.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4051',
          'name' => 'characteristicRelevanceCode',
          'usage' => 'B',
          'desc' => 'Code specifying the relevance of a characteristic.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'CDI' => 
  array (
    'attributes' => 
    array (
      'id' => 'CDI',
      'name' => 'physicalOrLogicalState',
      'desc' => 'To describe a physical or logical state. QUALIFIER                                  M    1 an..3',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C564',
          'required' => 'true',
          'name' => 'physicalOrLogicalStateInformation',
          'desc' => 'To give information in coded or clear text form on the physical or logical state.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7007',
              'name' => 'physicalOrLogicalStateDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a physical or logical state.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7006',
              'name' => 'physicalOrLogicalStateDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a physical or logical state.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
    ),
  ),
  'CDS' => 
  array (
    'attributes' => 
    array (
      'id' => 'CDS',
      'name' => 'codeSetIdentification',
      'desc' => 'To identify a code set and to give its class and maintenance operation.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C702',
          'required' => 'true',
          'name' => 'codeSetIdentification',
          'desc' => 'To identify a code set.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9150',
              'name' => 'simpleDataElementTagIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the tag of a simple data element.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1507',
          'name' => 'designatedClassCode',
          'usage' => 'B',
          'desc' => 'Code specifying a designated class.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'CDV' => 
  array (
    'attributes' => 
    array (
      'id' => 'CDV',
      'name' => 'codeValueDefinition',
      'desc' => 'To provide information related to a code value.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9426',
          'required' => 'true',
          'name' => 'codeValueText',
          'usage' => 'B',
          'desc' => 'To specify a code value.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9434',
          'name' => 'codeName',
          'usage' => 'B',
          'desc' => 'Name of a code.',
          'type' => 'an',
          'maxlength' => '70',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9453',
          'name' => 'codeValueSourceCode',
          'usage' => 'B',
          'desc' => 'Code specifying the source of a code value.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7299',
          'name' => 'requirementDesignatorCode',
          'usage' => 'C',
          'desc' => 'Code specifying the requirement designator.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'CED' => 
  array (
    'attributes' => 
    array (
      'id' => 'CED',
      'name' => 'computerEnvironmentDetails',
      'desc' => 'To give a precise definition of all necessary elements belonging to the configuration of a computer system like hardware, firmware, operating system, communication (VANS, network type, protocol, format) and application software. QUALIFIER                                  M    1 an..3',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C079',
          'required' => 'true',
          'name' => 'computerEnvironmentIdentification',
          'desc' => 'To identify parts of a computer environment.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1511',
              'name' => 'computerEnvironmentNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying a computer environment.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1510',
              'name' => 'computerEnvironmentName',
              'usage' => 'B',
              'desc' => 'Name of a computer environment.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1056',
              'name' => 'versionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a version.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1058',
              'name' => 'releaseIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a release.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9448',
          'name' => 'fileGenerationCommandName',
          'usage' => 'B',
          'desc' => 'Name of a file generation command.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
    ),
  ),
  'CIN' => 
  array (
    'attributes' => 
    array (
      'id' => 'CIN',
      'name' => 'clinicalInformation',
      'desc' => 'To describe an item of clinical information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6415',
          'required' => 'true',
          'name' => 'clinicalInformationTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the type of clinical information.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C836',
          'name' => 'clinicalInformationDetails',
          'desc' => 'To specify an item of clinical information.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6413',
              'name' => 'clinicalInformationDescriptionIdentifier',
              'usage' => 'B',
              'desc' => 'Code identifying an item of clinical information.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6412',
              'name' => 'clinicalInformationDescription',
              'usage' => 'B',
              'desc' => 'Free form description of an item of clinical information.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C837',
          'name' => 'certaintyDetails',
          'desc' => 'To specify the certainty.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4049',
              'name' => 'certaintyDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a certainty.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4048',
              'name' => 'certaintyDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a certainty.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'CLA' => 
  array (
    'attributes' => 
    array (
      'id' => 'CLA',
      'name' => 'clauseIdentification',
      'desc' => 'To identify a clause in a treaty, law and/or contract.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4059',
          'required' => 'true',
          'name' => 'clauseCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the nature of the clause.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C970',
          'name' => 'clauseName',
          'desc' => 'Identification of a clause in coded or clear form.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4069',
              'name' => 'clauseNameCode',
              'usage' => 'B',
              'desc' => 'Code identification of the clause.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4068',
              'name' => 'clauseName',
              'usage' => 'B',
              'desc' => 'Name of the clause.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
    ),
  ),
  'CLI' => 
  array (
    'attributes' => 
    array (
      'id' => 'CLI',
      'name' => 'clinicalIntervention',
      'desc' => 'To specify a clinical intervention such as treatments and investigations.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9441',
          'required' => 'true',
          'name' => 'clinicalInterventionTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying a type of clinical intervention.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C828',
          'name' => 'clinicalInterventionDetails',
          'desc' => 'To specify a clinical intervention.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9437',
              'name' => 'clinicalInterventionDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a clinical intervention.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9436',
              'name' => 'clinicalInterventionDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a clinical intervention.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
    ),
  ),
  'CMP' => 
  array (
    'attributes' => 
    array (
      'id' => 'CMP',
      'name' => 'compositeDataElementIdentification',
      'desc' => 'To identify a composite data element and to give its class and maintenance operation.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9146',
          'required' => 'true',
          'name' => 'compositeDataElementTagIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the tag of a composite data element.',
          'type' => 'an',
          'maxlength' => '4',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1507',
          'name' => 'designatedClassCode',
          'usage' => 'B',
          'desc' => 'Code specifying a designated class.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'CNI' => 
  array (
    'attributes' => 
    array (
      'id' => 'CNI',
      'name' => 'consignmentInformation',
      'desc' => 'To identify one consignment.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1490',
          'name' => 'consolidationItemNumber',
          'usage' => 'B',
          'desc' => 'To specify a consignment within a consolidation.',
          'type' => 'n',
          'maxlength' => '5',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C503',
          'name' => 'documentmessageDetails',
          'desc' => 'Identification of document/message by number, status, source and/or language.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1004',
              'name' => 'documentIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a document.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1373',
              'name' => 'documentStatusCode',
              'usage' => 'B',
              'desc' => 'Code specifying the status of a document.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1366',
              'name' => 'documentSourceDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the source of a document.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3453',
              'name' => 'languageNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the language name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1056',
              'name' => 'versionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a version.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1060',
              'name' => 'revisionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a revision.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1312',
          'name' => 'consignmentLoadSequenceIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the loading sequence of a consignment or consignments.',
          'type' => 'n',
          'maxlength' => '4',
        ),
      ),
    ),
  ),
  'CNT' => 
  array (
    'attributes' => 
    array (
      'id' => 'CNT',
      'name' => 'controlTotal',
      'desc' => 'To provide control total.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C270',
          'required' => 'true',
          'name' => 'control',
          'desc' => 'Control total for checking integrity of a message or part of a message.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6069',
              'required' => 'true',
              'name' => 'controlTotalTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the type of control of hash total.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6066',
              'required' => 'true',
              'name' => 'controlTotalQuantity',
              'usage' => 'B',
              'desc' => 'To specify the value of a control quantity.',
              'type' => 'n',
              'maxlength' => '18',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
        ),
      ),
    ),
  ),
  'COD' => 
  array (
    'attributes' => 
    array (
      'id' => 'COD',
      'name' => 'componentDetails',
      'desc' => 'To provide component details of an object (e.g. product, container) such as its type and the material of which it is composed.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C823',
          'name' => 'typeOfUnitcomponent',
          'desc' => 'To identify the type of unit/component of an object (e.g. lock, door, tyre).',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7505',
              'name' => 'unitOrComponentTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a type of unit or component.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7504',
              'name' => 'unitOrComponentTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a type of unit or component.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C824',
          'name' => 'componentMaterial',
          'desc' => 'To identify the material of which a component is composed (e.g. steel, plastics).',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7507',
              'name' => 'componentMaterialDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a component material.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7506',
              'name' => 'componentMaterialDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a component material.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'COM' => 
  array (
    'attributes' => 
    array (
      'id' => 'COM',
      'name' => 'communicationContact',
      'desc' => 'To identify a communication number of a department or a person to whom communication should be directed.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C076',
          'required' => 'true',
          'name' => 'communicationContact',
          'desc' => 'Communication number of a department or employee in a specified channel.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3148',
              'required' => 'true',
              'name' => 'communicationAddressIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a communication address.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3155',
              'required' => 'true',
              'name' => 'communicationMeansTypeCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of communication address.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'COT' => 
  array (
    'attributes' => 
    array (
      'id' => 'COT',
      'name' => 'contributionDetails',
      'desc' => 'To specify details about membership contributions.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5047',
          'required' => 'true',
          'name' => 'contributionCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying a contribution.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C953',
          'name' => 'contributionType',
          'desc' => 'Identification of the type of a contribution to a scheme or group.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5049',
              'required' => 'true',
              'name' => 'contributionTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a type of contribution scheme.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5048',
              'name' => 'contributionTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a type of contribution scheme.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C522',
          'name' => 'instruction',
          'desc' => 'To specify an instruction.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4403',
              'required' => 'true',
              'name' => 'instructionTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of instruction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4401',
              'name' => 'instructionDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an instruction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4400',
              'name' => 'instructionDescription',
              'usage' => 'B',
              'desc' => 'Free form description of an instruction.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C203',
          'name' => 'ratetariffClass',
          'desc' => 'Identification of the applicable rate/tariff class.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5243',
              'required' => 'true',
              'name' => 'rateOrTariffClassDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an applicable rate or tariff class.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5242',
              'name' => 'rateOrTariffClassDescription',
              'usage' => 'B',
              'desc' => 'Free form description of an applicable rate or tariff class.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5275',
              'name' => 'supplementaryRateOrTariffCode',
              'usage' => 'B',
              'desc' => 'Code specifying a supplementary rate or tariff.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5275',
              'name' => 'supplementaryRateOrTariffCode',
              'usage' => 'B',
              'desc' => 'Code specifying a supplementary rate or tariff.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          9 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C960',
          'name' => 'reasonForChange',
          'desc' => 'Code and/or description of the reason for a change.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4295',
              'name' => 'changeReasonDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the reason for a change.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4294',
              'name' => 'changeReasonDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the reason for change.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'CPI' => 
  array (
    'attributes' => 
    array (
      'id' => 'CPI',
      'name' => 'chargePaymentInstructions',
      'desc' => 'To identify a charge.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C229',
          'name' => 'chargeCategory',
          'desc' => 'Identification of a category or a zone of charges.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5237',
              'required' => 'true',
              'name' => 'chargeCategoryCode',
              'usage' => 'B',
              'desc' => 'Code specifying the category of charges.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C231',
          'name' => 'methodOfPayment',
          'desc' => 'Code identifying the method of payment.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4215',
              'required' => 'true',
              'name' => 'transportChargesPaymentMethodCode',
              'usage' => 'B',
              'desc' => 'Code specifying the payment method for transport charges.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4237',
          'name' => 'paymentArrangementCode',
          'usage' => 'B',
          'desc' => 'Code specifying the arrangements for a payment.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'CPS' => 
  array (
    'attributes' => 
    array (
      'id' => 'CPS',
      'name' => 'consignmentPackingSequence',
      'desc' => 'To identify the sequence in which physical packing is presented in the consignment, and optionally to identify the hierarchical relationship between packing layers.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7164',
          'required' => 'true',
          'name' => 'hierarchicalStructureLevelIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a level within a hierarchical structure.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7166',
          'name' => 'hierarchicalStructureParentIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the next higher level in a hierarchical structure.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7075',
          'name' => 'packagingLevelCode',
          'usage' => 'B',
          'desc' => 'Code specifying a level of packaging.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'CPT' => 
  array (
    'attributes' => 
    array (
      'id' => 'CPT',
      'name' => 'accountIdentification',
      'desc' => 'To provide account identification information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4437',
          'required' => 'true',
          'name' => 'accountTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the type of account.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C593',
          'required' => 'true',
          'name' => 'accountIdentification',
          'desc' => 'Identification of an account.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1147',
              'required' => 'true',
              'name' => 'accountIdentifier',
              'usage' => 'B',
              'desc' => 'To identify an account.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1148',
              'name' => 'accountAbbreviatedName',
              'usage' => 'B',
              'desc' => 'Abbreviated name of an account.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1146',
              'name' => 'accountName',
              'usage' => 'B',
              'desc' => 'Name of an account.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1146',
              'name' => 'accountName',
              'usage' => 'B',
              'desc' => 'Name of an account.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'CST' => 
  array (
    'attributes' => 
    array (
      'id' => 'CST',
      'name' => 'customsStatusOfGoods',
      'desc' => 'To specify goods in terms of customs identities, status and intended use.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1496',
          'name' => 'goodsItemNumber',
          'usage' => 'B',
          'desc' => 'To specify a goods item within a consignment.',
          'type' => 'n',
          'maxlength' => '5',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C246',
          'name' => 'customsIdentityCodes',
          'desc' => 'Specification of goods in terms of customs identity.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7361',
              'required' => 'true',
              'name' => 'customsGoodsIdentifier',
              'usage' => 'B',
              'desc' => 'Code identifying the goods for customs.',
              'type' => 'an',
              'maxlength' => '18',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C246',
          'name' => 'customsIdentityCodes',
          'desc' => 'Specification of goods in terms of customs identity.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7361',
              'required' => 'true',
              'name' => 'customsGoodsIdentifier',
              'usage' => 'B',
              'desc' => 'Code identifying the goods for customs.',
              'type' => 'an',
              'maxlength' => '18',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C246',
          'name' => 'customsIdentityCodes',
          'desc' => 'Specification of goods in terms of customs identity.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7361',
              'required' => 'true',
              'name' => 'customsGoodsIdentifier',
              'usage' => 'B',
              'desc' => 'Code identifying the goods for customs.',
              'type' => 'an',
              'maxlength' => '18',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C246',
          'name' => 'customsIdentityCodes',
          'desc' => 'Specification of goods in terms of customs identity.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7361',
              'required' => 'true',
              'name' => 'customsGoodsIdentifier',
              'usage' => 'B',
              'desc' => 'Code identifying the goods for customs.',
              'type' => 'an',
              'maxlength' => '18',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C246',
          'name' => 'customsIdentityCodes',
          'desc' => 'Specification of goods in terms of customs identity.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7361',
              'required' => 'true',
              'name' => 'customsGoodsIdentifier',
              'usage' => 'B',
              'desc' => 'Code identifying the goods for customs.',
              'type' => 'an',
              'maxlength' => '18',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'CTA' => 
  array (
    'attributes' => 
    array (
      'id' => 'CTA',
      'name' => 'contactInformation',
      'desc' => 'To identify a person or a department to whom communication should be directed.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3139',
          'name' => 'contactFunctionCode',
          'usage' => 'B',
          'desc' => 'Code specifying the function of a contact (e.g. department or person).',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C056',
          'name' => 'contactDetails',
          'desc' => 'Code and/or name of a contact such as a department or employee. Code preferred.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3413',
              'name' => 'contactIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a contact, such as a department or employee.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3412',
              'name' => 'contactName',
              'usage' => 'B',
              'desc' => 'Name of a contact, such as a department or employee.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
    ),
  ),
  'CUX' => 
  array (
    'attributes' => 
    array (
      'id' => 'CUX',
      'name' => 'currencies',
      'desc' => 'To specify currencies used in the transaction and relevant details for the rate of exchange.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C504',
          'name' => 'currencyDetails',
          'desc' => 'The usage to which a currency relates.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6347',
              'required' => 'true',
              'name' => 'currencyUsageCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the usage of a currency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6343',
              'name' => 'currencyTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of currency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6348',
              'name' => 'currencyRate',
              'usage' => 'C',
              'desc' => 'To specify the value of the multiplication factor used in expressing currency units.',
              'type' => 'n',
              'maxlength' => '4',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C504',
          'name' => 'currencyDetails',
          'desc' => 'The usage to which a currency relates.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6347',
              'required' => 'true',
              'name' => 'currencyUsageCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the usage of a currency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6343',
              'name' => 'currencyTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of currency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6348',
              'name' => 'currencyRate',
              'usage' => 'C',
              'desc' => 'To specify the value of the multiplication factor used in expressing currency units.',
              'type' => 'n',
              'maxlength' => '4',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5402',
          'name' => 'currencyExchangeRate',
          'usage' => 'C',
          'desc' => 'To specify the rate at which one specified currency is expressed in another specified currency.',
          'type' => 'n',
          'maxlength' => '12',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6341',
          'name' => 'exchangeRateCurrencyMarketIdentifier',
          'usage' => 'C',
          'desc' => 'To identify an exchange rate currency market.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'DAM' => 
  array (
    'attributes' => 
    array (
      'id' => 'DAM',
      'name' => 'damage',
      'desc' => 'To specify damage including action taken.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7493',
          'required' => 'true',
          'name' => 'damageDetailsCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the damage details.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C821',
          'name' => 'typeOfDamage',
          'desc' => 'To specify the type of damage to an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7501',
              'name' => 'damageTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of damage to an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7500',
              'name' => 'damageTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the type of damage to an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C822',
          'name' => 'damageArea',
          'desc' => 'To specify where the damage is on an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7503',
              'name' => 'damageAreaDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying where the damage is on an object.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7502',
              'name' => 'damageAreaDescription',
              'usage' => 'B',
              'desc' => 'Free form description of where the damage is on an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C825',
          'name' => 'damageSeverity',
          'desc' => 'To specify the severity of damage to an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7509',
              'name' => 'damageSeverityDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the severity of damage.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7508',
              'name' => 'damageSeverityDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the severity of damage.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C826',
          'name' => 'action',
          'desc' => 'To indicate an action which has been taken or is to be taken (e.g. in relation to a certain object).',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1229',
              'name' => 'actionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the action to be taken or already taken.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1228',
              'name' => 'actionDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the action to be taken or already taken.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'DFN' => 
  array (
    'attributes' => 
    array (
      'id' => 'DFN',
      'name' => 'definitionFunction',
      'desc' => 'To specify a definition function.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9023',
          'required' => 'true',
          'name' => 'definitionFunctionCode',
          'usage' => 'B',
          'desc' => 'Code specifying the function of a definition.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9025',
          'name' => 'definitionExtentCode',
          'usage' => 'B',
          'desc' => 'Code specifying the extent of a definition.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4519',
          'name' => 'definitionIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a definition.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
    ),
  ),
  'DGS' => 
  array (
    'attributes' => 
    array (
      'id' => 'DGS',
      'name' => 'dangerousGoods',
      'desc' => 'To identify dangerous goods.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8273',
          'name' => 'dangerousGoodsRegulationsCode',
          'usage' => 'B',
          'desc' => 'Code specifying a dangerous goods regulation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C205',
          'name' => 'hazardCode',
          'desc' => 'The identification of the dangerous goods in code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8351',
              'required' => 'true',
              'name' => 'hazardIdentificationCode',
              'usage' => 'B',
              'desc' => 'Code identifying a hazard.',
              'type' => 'an',
              'maxlength' => '7',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8078',
              'name' => 'additionalHazardClassificationIdentifier',
              'usage' => 'B',
              'desc' => 'To identify an additional hazard classification.',
              'type' => 'an',
              'maxlength' => '7',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8092',
              'name' => 'hazardCodeVersionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the version number of a hazard code.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C234',
          'name' => 'undgInformation',
          'desc' => 'Information on dangerous goods, taken from the United Nations Dangerous Goods classification.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7124',
              'name' => 'unitedNationsDangerousGoodsUndgIdentifier',
              'usage' => 'B',
              'desc' => 'The unique serial number assigned within the United Nations to substances and articles contained in a list of the dangerous goods most commonly carried.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7088',
              'name' => 'dangerousGoodsFlashpointDescription',
              'usage' => 'B',
              'desc' => 'To describe the flahspoint of dangerous goods.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C223',
          'name' => 'dangerousGoodsShipmentFlashpoint',
          'desc' => 'Temperature at which a vapor can be ignited as per ISO 1523/73.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7106',
              'name' => 'shipmentFlashpointDegree',
              'usage' => 'B',
              'desc' => 'To specify the value of the flashpoint of a shipment.',
              'type' => 'n',
              'length' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8339',
          'name' => 'packagingDangerLevelCode',
          'usage' => 'B',
          'desc' => 'Code specifying the level of danger for which the packaging must cater.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8364',
          'name' => 'emergencyProcedureForShipsIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the emergency procedure number for ships transporting dangerous goods. Synonym: EMS Number.',
          'type' => 'an',
          'maxlength' => '6',
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8410',
          'name' => 'hazardMedicalFirstAidGuideIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a Medical First Aid Guide (MFAG) for hazardous goods.',
          'type' => 'an',
          'maxlength' => '4',
        ),
      ),
      7 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8126',
          'name' => 'transportEmergencyCardIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a transport emergency (TREM) card.',
          'type' => 'an',
          'maxlength' => '10',
        ),
      ),
      8 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C235',
          'name' => 'hazardIdentificationPlacardDetails',
          'desc' => 'These numbers appear on the hazard identification placard required on the means of transport.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8158',
              'name' => 'orangeHazardPlacardUpperPartIdentifier',
              'usage' => 'B',
              'desc' => 'To specify the identity number for the upper part of the orange hazard placard required on the means of transport.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8186',
              'name' => 'orangeHazardPlacardLowerPartIdentifier',
              'usage' => 'B',
              'desc' => 'To specify the identity number for the lower part of the orange hazard placard required on the means of transport.',
              'type' => 'an',
              'length' => '4',
            ),
          ),
        ),
      ),
      9 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C236',
          'name' => 'dangerousGoodsLabel',
          'desc' => 'Markings identifying the type of hazardous goods and similar information.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8246',
              'name' => 'dangerousGoodsMarkingIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the marking of dangerous goods.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8246',
              'name' => 'dangerousGoodsMarkingIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the marking of dangerous goods.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8246',
              'name' => 'dangerousGoodsMarkingIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the marking of dangerous goods.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
        ),
      ),
      10 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8255',
          'name' => 'packingInstructionTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying a type of packing instruction.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      11 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8179',
          'name' => 'transportMeansDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the means of transport.',
          'type' => 'an',
          'maxlength' => '8',
        ),
      ),
    ),
  ),
  'DII' => 
  array (
    'attributes' => 
    array (
      'id' => 'DII',
      'name' => 'directoryIdentification',
      'desc' => 'To identify a directory and to give its release, status, controlling agency, language and maintenance operation.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1056',
          'required' => 'true',
          'name' => 'versionIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a version.',
          'type' => 'an',
          'maxlength' => '9',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1058',
          'required' => 'true',
          'name' => 'releaseIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a release.',
          'type' => 'an',
          'maxlength' => '9',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9148',
          'name' => 'directoryStatusIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the status of a directory set.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1476',
          'name' => 'controllingAgencyIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a controlling agency.',
          'type' => 'an',
          'maxlength' => '2',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3453',
          'name' => 'languageNameCode',
          'usage' => 'C',
          'desc' => 'Code specifying the language name.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'DIM' => 
  array (
    'attributes' => 
    array (
      'id' => 'DIM',
      'name' => 'dimensions',
      'desc' => 'To specify dimensions.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6145',
          'required' => 'true',
          'name' => 'dimensionTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the type of the dimension.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C211',
          'required' => 'true',
          'name' => 'dimensions',
          'desc' => 'Specification of the dimensions of a transportable unit.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'required' => 'true',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6168',
              'name' => 'lengthMeasure',
              'usage' => 'C',
              'desc' => 'To specify the value of a length dimension.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6140',
              'name' => 'widthMeasure',
              'usage' => 'C',
              'desc' => 'To specify the value of a width dimension.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6008',
              'name' => 'heightMeasure',
              'usage' => 'C',
              'desc' => 'To specify the value of a height dimension.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
        ),
      ),
    ),
  ),
  'DLI' => 
  array (
    'attributes' => 
    array (
      'id' => 'DLI',
      'name' => 'documentLineIdentification',
      'desc' => 'To specify the processing mode of a specific line within a referenced document.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1073',
          'required' => 'true',
          'name' => 'documentLineActionCode',
          'usage' => 'B',
          'desc' => 'Code indicating an action associated with a line of a document.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1082',
          'required' => 'true',
          'name' => 'lineItemIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a line item.',
          'type' => 'an',
          'maxlength' => '6',
        ),
      ),
    ),
  ),
  'DLM' => 
  array (
    'attributes' => 
    array (
      'id' => 'DLM',
      'name' => 'deliveryLimitations',
      'desc' => 'To specify limitations on deliveries.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4455',
          'name' => 'backOrderArrangementTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying a type of back order arrangement.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C522',
          'name' => 'instruction',
          'desc' => 'To specify an instruction.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4403',
              'required' => 'true',
              'name' => 'instructionTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of instruction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4401',
              'name' => 'instructionDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an instruction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4400',
              'name' => 'instructionDescription',
              'usage' => 'B',
              'desc' => 'Free form description of an instruction.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C214',
          'name' => 'specialServicesIdentification',
          'desc' => 'Identification of a special service by a code from a specified source or by description.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7161',
              'name' => 'specialServiceDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a special service.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7160',
              'name' => 'specialServiceDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a special service.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7160',
              'name' => 'specialServiceDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a special service.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4457',
          'name' => 'substitutionConditionCode',
          'usage' => 'B',
          'desc' => 'Code specifying the conditions under which substitution may take place.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'DMS' => 
  array (
    'attributes' => 
    array (
      'id' => 'DMS',
      'name' => 'documentmessageSummary',
      'desc' => 'To specify summary information relating to the document/message.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C106',
          'name' => 'documentmessageIdentification',
          'desc' => 'Identification of a document/message by its number and eventually its version or revision.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1004',
              'name' => 'documentIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a document.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1056',
              'name' => 'versionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a version.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1060',
              'name' => 'revisionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a revision.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C002',
          'name' => 'documentmessageName',
          'desc' => 'Identification of a type of document/message by code or name. Code preferred.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1001',
              'name' => 'documentNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the document name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1000',
              'name' => 'documentName',
              'usage' => 'B',
              'desc' => 'Name of a document.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7240',
          'name' => 'itemTotalQuantity',
          'usage' => 'B',
          'desc' => 'Count of the total number of items.',
          'type' => 'n',
          'maxlength' => '15',
        ),
      ),
    ),
  ),
  'DOC' => 
  array (
    'attributes' => 
    array (
      'id' => 'DOC',
      'name' => 'documentmessageDetails',
      'desc' => 'To identify documents and details directly related to it.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C002',
          'required' => 'true',
          'name' => 'documentmessageName',
          'desc' => 'Identification of a type of document/message by code or name. Code preferred.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1001',
              'name' => 'documentNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the document name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1000',
              'name' => 'documentName',
              'usage' => 'B',
              'desc' => 'Name of a document.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C503',
          'name' => 'documentmessageDetails',
          'desc' => 'Identification of document/message by number, status, source and/or language.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1004',
              'name' => 'documentIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a document.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1373',
              'name' => 'documentStatusCode',
              'usage' => 'B',
              'desc' => 'Code specifying the status of a document.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1366',
              'name' => 'documentSourceDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the source of a document.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3453',
              'name' => 'languageNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the language name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1056',
              'name' => 'versionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a version.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1060',
              'name' => 'revisionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a revision.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3153',
          'name' => 'communicationMediumTypeCode',
          'usage' => 'C',
          'desc' => 'Code specifying the type of communication medium.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1220',
          'name' => 'documentCopiesRequiredQuantity',
          'usage' => 'B',
          'desc' => 'Quantity of document copies required.',
          'type' => 'n',
          'maxlength' => '2',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1218',
          'name' => 'documentOriginalsRequiredQuantity',
          'usage' => 'B',
          'desc' => 'Quantity of document originals required.',
          'type' => 'n',
          'maxlength' => '2',
        ),
      ),
    ),
  ),
  'DRD' => 
  array (
    'attributes' => 
    array (
      'id' => 'DRD',
      'name' => 'dataRepresentationDetails',
      'desc' => 'To specify the details of the data representation.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7512',
          'name' => 'structureComponentIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a component of a structure.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7515',
          'name' => 'structureTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying a type of structure.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9169',
          'name' => 'dataRepresentationTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying a type of data representation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6174',
          'name' => 'sizeMeasure',
          'usage' => 'B',
          'desc' => 'To specify a magnitude.',
          'type' => 'n',
          'maxlength' => '15',
        ),
      ),
    ),
  ),
  'DSG' => 
  array (
    'attributes' => 
    array (
      'id' => 'DSG',
      'name' => 'dosageAdministration',
      'desc' => 'To communicate how dose(s) are administered.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6085',
          'required' => 'true',
          'name' => 'dosageAdministrationCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the administration of a dosage.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C838',
          'name' => 'dosageDetails',
          'desc' => 'To specify a dosage.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6083',
              'name' => 'dosageDescriptionIdentifier',
              'usage' => 'B',
              'desc' => 'Code identifying a dosage.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6082',
              'name' => 'dosageDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a dosage.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
    ),
  ),
  'DSI' => 
  array (
    'attributes' => 
    array (
      'id' => 'DSI',
      'name' => 'dataSetIdentification',
      'desc' => 'To identify a data set.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C782',
          'required' => 'true',
          'name' => 'dataSetIdentification',
          'desc' => 'The identification of a data set.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1520',
              'required' => 'true',
              'name' => 'dataSetIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a data set.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C082',
          'name' => 'partyIdentificationDetails',
          'desc' => 'Identification of a transaction party by code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'required' => 'true',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C286',
          'name' => 'sequenceInformation',
          'desc' => 'Identification of a sequence and source for sequencing.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'required' => 'true',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1159',
              'name' => 'sequenceIdentifierSourceCode',
              'usage' => 'B',
              'desc' => 'Code specifying the source of a sequence identifier.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1060',
          'name' => 'revisionIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a revision.',
          'type' => 'an',
          'maxlength' => '6',
        ),
      ),
    ),
  ),
  'DTM' => 
  array (
    'attributes' => 
    array (
      'id' => 'DTM',
      'name' => 'datetimeperiod',
      'desc' => 'To specify date, and/or time, or period.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C507',
          'required' => 'true',
          'name' => 'datetimeperiod',
          'desc' => 'Date and/or time, or period relevant to the specified date/time/period type.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2005',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the function of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'EDT' => 
  array (
    'attributes' => 
    array (
      'id' => 'EDT',
      'name' => 'editingDetails',
      'desc' => 'To specify editing details.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6178',
          'name' => 'editFieldLengthMeasure',
          'usage' => 'B',
          'desc' => 'To specify the length of a field for editing.',
          'type' => 'n',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9026',
          'name' => 'editMaskFormatIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the format of an edit mask.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9031',
          'name' => 'editMaskRepresentationCode',
          'usage' => 'B',
          'desc' => 'Code specifying the representation of the edit mask.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4447',
          'name' => 'freeTextFormatCode',
          'usage' => 'B',
          'desc' => 'Code specifying the format of free text.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'EFI' => 
  array (
    'attributes' => 
    array (
      'id' => 'EFI',
      'name' => 'externalFileLinkIdentification',
      'desc' => 'To specify the link of one non-EDIFACT external file to an EDIFACT message.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C077',
          'required' => 'true',
          'name' => 'fileIdentification',
          'desc' => 'To identify a file.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1508',
              'name' => 'fileName',
              'usage' => 'B',
              'desc' => 'Name of a file.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7008',
              'name' => 'itemDescription',
              'usage' => 'C',
              'desc' => 'Free form description of an item.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C099',
          'name' => 'fileDetails',
          'desc' => 'To define details relevant to a file.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1516',
              'required' => 'true',
              'name' => 'fileFormatName',
              'usage' => 'B',
              'desc' => 'Name of a file format.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1056',
              'name' => 'versionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a version.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1503',
              'name' => 'dataFormatDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the data format.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1502',
              'name' => 'dataFormatDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the data format.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1050',
          'name' => 'sequencePositionIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a position in a sequence.',
          'type' => 'an',
          'maxlength' => '10',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9450',
          'name' => 'fileCompressionTechniqueName',
          'usage' => 'B',
          'desc' => 'Name of a file compression technique.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
    ),
  ),
  'ELM' => 
  array (
    'attributes' => 
    array (
      'id' => 'ELM',
      'name' => 'simpleDataElementDetails',
      'desc' => 'To identify a simple data element and give related details.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9150',
          'required' => 'true',
          'name' => 'simpleDataElementTagIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the tag of a simple data element.',
          'type' => 'an',
          'maxlength' => '4',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9155',
          'name' => 'lengthTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying the type of length.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9156',
          'name' => 'simpleDataElementMaximumLengthMeasure',
          'usage' => 'B',
          'desc' => 'To specify the value of the maximum length of a simple data element.',
          'type' => 'n',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9158',
          'name' => 'simpleDataElementMinimumLengthMeasure',
          'usage' => 'B',
          'desc' => 'To specify the value of the minimum length of a simple data element.',
          'type' => 'n',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9161',
          'name' => 'codeSetIndicatorCode',
          'usage' => 'B',
          'desc' => 'Code indicating whether a data element has an associated code set.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1507',
          'name' => 'designatedClassCode',
          'usage' => 'B',
          'desc' => 'Code specifying a designated class.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      7 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6432',
          'name' => 'significantDigitsQuantity',
          'usage' => 'B',
          'desc' => 'Count of the number of significant digits.',
          'type' => 'n',
          'maxlength' => '2',
        ),
      ),
    ),
  ),
  'ELU' => 
  array (
    'attributes' => 
    array (
      'id' => 'ELU',
      'name' => 'dataElementUsageDetails',
      'desc' => 'To specify the usage of a data element.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9162',
          'required' => 'true',
          'name' => 'dataElementTagIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the tag of a data element.',
          'type' => 'an',
          'maxlength' => '4',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7299',
          'name' => 'requirementDesignatorCode',
          'usage' => 'C',
          'desc' => 'Code specifying the requirement designator.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1050',
          'name' => 'sequencePositionIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a position in a sequence.',
          'type' => 'an',
          'maxlength' => '10',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6176',
          'name' => 'occurrencesMaximumNumber',
          'usage' => 'B',
          'desc' => 'To specify the maximum number of occurrences.',
          'type' => 'n',
          'maxlength' => '7',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9453',
          'name' => 'codeValueSourceCode',
          'usage' => 'B',
          'desc' => 'Code specifying the source of a code value.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9285',
          'name' => 'validationCriteriaCode',
          'usage' => 'B',
          'desc' => 'Code specifying the validation criteria to be applied.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      7 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9175',
          'name' => 'dataElementUsageTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying the usage type of a data element.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'ELV' => 
  array (
    'attributes' => 
    array (
      'id' => 'ELV',
      'name' => 'elementValueDefinition',
      'desc' => 'To define an element value.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9029',
          'required' => 'true',
          'name' => 'valueDefinitionCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying a value definition.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9422',
          'name' => 'valueText',
          'usage' => 'B',
          'desc' => 'To specify a value.',
          'type' => 'an',
          'maxlength' => '512',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7299',
          'name' => 'requirementDesignatorCode',
          'usage' => 'C',
          'desc' => 'Code specifying the requirement designator.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'EMP' => 
  array (
    'attributes' => 
    array (
      'id' => 'EMP',
      'name' => 'employmentDetails',
      'desc' => 'To specify employment details.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9003',
          'required' => 'true',
          'name' => 'employmentDetailsCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the employment details.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C948',
          'name' => 'employmentCategory',
          'desc' => 'Code and/or description of an employment category.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9005',
              'name' => 'employmentCategoryDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the employment category.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9004',
              'name' => 'employmentCategoryDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the employment category.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C951',
          'name' => 'occupation',
          'desc' => 'Description of an occupation.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9009',
              'name' => 'occupationDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying an occupation.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9008',
              'name' => 'occupationDescription',
              'usage' => 'B',
              'desc' => 'Free form description of an occupation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9008',
              'name' => 'occupationDescription',
              'usage' => 'B',
              'desc' => 'Free form description of an occupation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C950',
          'name' => 'qualificationClassification',
          'desc' => 'Qualification classification description and/or code. This specifies the trade, skill, professional or similar qualification category.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9007',
              'name' => 'qualificationClassificationDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a qualification classification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9006',
              'name' => 'qualificationClassificationDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a qualification classification.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9006',
              'name' => 'qualificationClassificationDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a qualification classification.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3480',
          'name' => 'personJobTitle',
          'usage' => 'B',
          'desc' => 'Name of a job title such as rank or rating of crew member.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9035',
          'name' => 'qualificationApplicationAreaCode',
          'usage' => 'B',
          'desc' => 'Code specifying the application area of a qualification.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'EQA' => 
  array (
    'attributes' => 
    array (
      'id' => 'EQA',
      'name' => 'attachedEquipment',
      'desc' => 'To specify attached or related equipment.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8053',
          'required' => 'true',
          'name' => 'equipmentTypeCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code qualifying a type of equipment.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C237',
          'name' => 'equipmentIdentification',
          'desc' => 'Marks (letters/numbers) identifying equipment.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8260',
              'name' => 'equipmentIdentifier',
              'usage' => 'B',
              'desc' => 'To identify equipment.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3207',
              'name' => 'countryIdentifier',
              'usage' => 'C',
              'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'EQD' => 
  array (
    'attributes' => 
    array (
      'id' => 'EQD',
      'name' => 'equipmentDetails',
      'desc' => 'To identify a unit of equipment.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8053',
          'required' => 'true',
          'name' => 'equipmentTypeCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code qualifying a type of equipment.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C237',
          'name' => 'equipmentIdentification',
          'desc' => 'Marks (letters/numbers) identifying equipment.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8260',
              'name' => 'equipmentIdentifier',
              'usage' => 'B',
              'desc' => 'To identify equipment.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3207',
              'name' => 'countryIdentifier',
              'usage' => 'C',
              'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C224',
          'name' => 'equipmentSizeAndType',
          'desc' => 'Code and or name identifying size and type of equipment. Code preferred.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8155',
              'name' => 'equipmentSizeAndTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the size and type of equipment.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8154',
              'name' => 'equipmentSizeAndTypeDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the size and type of equipment.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8077',
          'name' => 'equipmentSupplierCode',
          'usage' => 'B',
          'desc' => 'Code specifying the party that is the supplier of the equipment.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8249',
          'name' => 'equipmentStatusCode',
          'usage' => 'B',
          'desc' => 'Code specifying the status of equipment.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8169',
          'name' => 'fullOrEmptyIndicatorCode',
          'usage' => 'B',
          'desc' => 'Code indicating whether an object is full or empty.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4233',
          'name' => 'markingInstructionsCode',
          'usage' => 'B',
          'desc' => 'Code specifying instructions for marking.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'EQN' => 
  array (
    'attributes' => 
    array (
      'id' => 'EQN',
      'name' => 'numberOfUnits',
      'desc' => 'To specify the number of units.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C523',
          'required' => 'true',
          'name' => 'numberOfUnitDetails',
          'desc' => 'Identification of number of units and its purpose.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6350',
              'name' => 'unitsQuantity',
              'usage' => 'C',
              'desc' => 'To specify the number of units.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6353',
              'name' => 'unitTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'ERC' => 
  array (
    'attributes' => 
    array (
      'id' => 'ERC',
      'name' => 'applicationErrorInformation',
      'desc' => 'To identify the type of application error within a message.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C901',
          'required' => 'true',
          'name' => 'applicationErrorDetail',
          'desc' => 'Code assigned by the recipient of a message to indicate a data validation error condition.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9321',
              'required' => 'true',
              'name' => 'applicationErrorCode',
              'usage' => 'C',
              'desc' => 'Code specifying an application error.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'ERP' => 
  array (
    'attributes' => 
    array (
      'id' => 'ERP',
      'name' => 'errorPointDetails',
      'desc' => 'A segment to identify the location of an application error within a message.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C701',
          'name' => 'errorPointDetails',
          'desc' => 'Indication of the point of error in a message.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1049',
              'name' => 'messageSectionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a section of a message.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1052',
              'name' => 'messageItemIdentifier',
              'usage' => 'B',
              'desc' => 'To identify an item within a message.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1054',
              'name' => 'messageSubitemIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a sub-item within a message.',
              'type' => 'n',
              'maxlength' => '6',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C853',
          'name' => 'errorSegmentPointDetails',
          'desc' => 'To indicate the exact segment location of an application error within a message.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9166',
              'name' => 'segmentTagIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the tag of a segment.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1159',
              'name' => 'sequenceIdentifierSourceCode',
              'usage' => 'B',
              'desc' => 'Code specifying the source of a sequence identifier.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'EVE' => 
  array (
    'attributes' => 
    array (
      'id' => 'EVE',
      'name' => 'event',
      'desc' => 'To specify details about events.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9635',
          'name' => 'eventDetailsCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the event details.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C004',
          'name' => 'eventCategory',
          'desc' => 'To specify the event category.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9637',
              'name' => 'eventCategoryDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the event category.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9636',
              'name' => 'eventCategoryDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the event category.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C030',
          'name' => 'eventType',
          'desc' => 'To specify the type of event.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9171',
              'name' => 'eventTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying an event type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9170',
              'name' => 'eventTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the event type.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C063',
          'name' => 'eventIdentification',
          'desc' => 'To identify an event.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9173',
              'name' => 'eventDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying an event.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9172',
              'name' => 'event',
              'usage' => 'B',
              'desc' => 'Free form description of the event.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1229',
          'name' => 'actionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the action to be taken or already taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'FCA' => 
  array (
    'attributes' => 
    array (
      'id' => 'FCA',
      'name' => 'financialChargesAllocation',
      'desc' => 'Description of allocation of charges.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4471',
          'required' => 'true',
          'name' => 'settlementMeansCode',
          'usage' => 'B',
          'desc' => 'Code specifying the means of settlement.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C878',
          'name' => 'chargeallowanceAccount',
          'desc' => 'Identification of the account for charge or allowance.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3434',
              'required' => 'true',
              'name' => 'institutionBranchIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a branch of an institution.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3194',
              'name' => 'accountHolderIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the holder of an account.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'FII' => 
  array (
    'attributes' => 
    array (
      'id' => 'FII',
      'name' => 'financialInstitutionInformation',
      'desc' => 'To identify an account and a related financial institution.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3035',
          'required' => 'true',
          'name' => 'partyFunctionCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code giving specific meaning to a party.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C078',
          'name' => 'accountHolderIdentification',
          'desc' => 'Identification of an account holder by account number and/or account holder name in one or two lines. Number preferred.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3194',
              'name' => 'accountHolderIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the holder of an account.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3192',
              'name' => 'accountHolderName',
              'usage' => 'B',
              'desc' => 'Name of the holder of an account.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3192',
              'name' => 'accountHolderName',
              'usage' => 'B',
              'desc' => 'Name of the holder of an account.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C088',
          'name' => 'institutionIdentification',
          'desc' => 'Identification of a financial institution by code branch number, or name and name of place. Code or branch number preferred.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3433',
              'name' => 'institutionNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying the name of an institution.',
              'type' => 'an',
              'maxlength' => '11',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3434',
              'name' => 'institutionBranchIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a branch of an institution.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3432',
              'name' => 'institutionName',
              'usage' => 'B',
              'desc' => 'Name of an institution.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3436',
              'name' => 'institutionBranchLocationName',
              'usage' => 'B',
              'desc' => 'Name of the location of a branch of an institution.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3207',
          'name' => 'countryIdentifier',
          'usage' => 'C',
          'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'FNS' => 
  array (
    'attributes' => 
    array (
      'id' => 'FNS',
      'name' => 'footnoteSet',
      'desc' => 'To identify a set of footnotes.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C783',
          'required' => 'true',
          'name' => 'footnoteSetIdentification',
          'desc' => 'The identification of a set of footnotes.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9430',
              'required' => 'true',
              'name' => 'footnoteSetIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a footnote set.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C082',
          'name' => 'partyIdentificationDetails',
          'desc' => 'Identification of a transaction party by code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'required' => 'true',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'FNT' => 
  array (
    'attributes' => 
    array (
      'id' => 'FNT',
      'name' => 'footnote',
      'desc' => 'To identify a footnote.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C784',
          'required' => 'true',
          'name' => 'footnoteIdentification',
          'desc' => 'The identification of a footnote.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9432',
              'required' => 'true',
              'name' => 'footnoteIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a footnote.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C082',
          'name' => 'partyIdentificationDetails',
          'desc' => 'Identification of a transaction party by code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'required' => 'true',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'FOR' => 
  array (
    'attributes' => 
    array (
      'id' => 'FOR',
      'name' => 'formula',
      'desc' => 'To identify a formula.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9501',
          'required' => 'true',
          'name' => 'formulaTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the type of formula.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7402',
          'name' => 'objectIdentifier',
          'usage' => 'C',
          'desc' => 'Code specifying the unique identity of an object.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9502',
          'name' => 'formulaName',
          'usage' => 'B',
          'desc' => 'Name identifying a formula.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4440',
          'name' => 'freeText',
          'usage' => 'C',
          'desc' => 'Free form text.',
          'type' => 'an',
          'maxlength' => '512',
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C961',
          'name' => 'formulaComplexity',
          'desc' => 'Identification of the complexity of a formula.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9505',
              'name' => 'formulaComplexityCode',
              'usage' => 'B',
              'desc' => 'Code specifying the complexity of a formula.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'FSQ' => 
  array (
    'attributes' => 
    array (
      'id' => 'FSQ',
      'name' => 'formulaSequence',
      'desc' => 'To provide a single operation within the sequence of operations of a formula.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9507',
          'required' => 'true',
          'name' => 'formulaSequenceCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code giving specific meaning to a formula sequence.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9509',
          'name' => 'formulaSequenceOperandCode',
          'usage' => 'B',
          'desc' => 'Code specifying a specific type of operand within a formula sequence.',
          'type' => 'an',
          'maxlength' => '17',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1050',
          'name' => 'sequencePositionIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a position in a sequence.',
          'type' => 'an',
          'maxlength' => '10',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9510',
          'name' => 'formulaSequenceName',
          'usage' => 'B',
          'desc' => 'Name identifying a formula sequence.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4440',
          'name' => 'freeText',
          'usage' => 'C',
          'desc' => 'Free form text.',
          'type' => 'an',
          'maxlength' => '512',
        ),
      ),
    ),
  ),
  'FTX' => 
  array (
    'attributes' => 
    array (
      'id' => 'FTX',
      'name' => 'freeText',
      'desc' => 'To provide free form or coded text information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4451',
          'required' => 'true',
          'name' => 'textSubjectCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code qualifying the subject of the text.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4453',
          'name' => 'freeTextFunctionCode',
          'usage' => 'B',
          'desc' => 'Code specifying the function of free text.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C107',
          'name' => 'textReference',
          'desc' => 'Coded reference to a standard text and its source.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4441',
              'required' => 'true',
              'name' => 'freeTextDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying free form text.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C108',
          'name' => 'textLiteral',
          'desc' => 'Free text; one to five lines.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'required' => 'true',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3453',
          'name' => 'languageNameCode',
          'usage' => 'C',
          'desc' => 'Code specifying the language name.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4447',
          'name' => 'freeTextFormatCode',
          'usage' => 'B',
          'desc' => 'Code specifying the format of free text.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'GDS' => 
  array (
    'attributes' => 
    array (
      'id' => 'GDS',
      'name' => 'natureOfCargo',
      'desc' => 'To indicate the type of cargo as a general classification.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C703',
          'name' => 'natureOfCargo',
          'desc' => 'Rough classification of a type of cargo.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7085',
              'required' => 'true',
              'name' => 'cargoTypeClassificationCode',
              'usage' => 'B',
              'desc' => 'Code specifying the classification of a type of cargo.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'GEI' => 
  array (
    'attributes' => 
    array (
      'id' => 'GEI',
      'name' => 'processingInformation',
      'desc' => 'To identify processing information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9649',
          'required' => 'true',
          'name' => 'processingInformationCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the processing information.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C012',
          'name' => 'processingIndicator',
          'desc' => 'Identification of the processing indicator.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7365',
              'name' => 'processingIndicatorDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a processing indicator.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7364',
              'name' => 'processingIndicatorDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a processing indicator.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7187',
          'name' => 'processTypeDescriptionCode',
          'usage' => 'B',
          'desc' => 'Code specifying a type of process.',
          'type' => 'an',
          'maxlength' => '17',
        ),
      ),
    ),
  ),
  'GID' => 
  array (
    'attributes' => 
    array (
      'id' => 'GID',
      'name' => 'goodsItemDetails',
      'desc' => 'To indicate totals of a goods item.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1496',
          'name' => 'goodsItemNumber',
          'usage' => 'B',
          'desc' => 'To specify a goods item within a consignment.',
          'type' => 'n',
          'maxlength' => '5',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C213',
          'name' => 'numberAndTypeOfPackages',
          'desc' => 'Number and type of individual parts of a shipment.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7224',
              'name' => 'packageQuantity',
              'usage' => 'B',
              'desc' => 'To specify the number of packages.',
              'type' => 'n',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7065',
              'name' => 'packageTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of package.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7064',
              'name' => 'typeOfPackages',
              'usage' => 'B',
              'desc' => 'Description of the form in which goods are presented.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7233',
              'name' => 'packagingRelatedDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying information related to packaging.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C213',
          'name' => 'numberAndTypeOfPackages',
          'desc' => 'Number and type of individual parts of a shipment.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7224',
              'name' => 'packageQuantity',
              'usage' => 'B',
              'desc' => 'To specify the number of packages.',
              'type' => 'n',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7065',
              'name' => 'packageTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of package.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7064',
              'name' => 'typeOfPackages',
              'usage' => 'B',
              'desc' => 'Description of the form in which goods are presented.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7233',
              'name' => 'packagingRelatedDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying information related to packaging.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C213',
          'name' => 'numberAndTypeOfPackages',
          'desc' => 'Number and type of individual parts of a shipment.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7224',
              'name' => 'packageQuantity',
              'usage' => 'B',
              'desc' => 'To specify the number of packages.',
              'type' => 'n',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7065',
              'name' => 'packageTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of package.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7064',
              'name' => 'typeOfPackages',
              'usage' => 'B',
              'desc' => 'Description of the form in which goods are presented.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7233',
              'name' => 'packagingRelatedDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying information related to packaging.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C213',
          'name' => 'numberAndTypeOfPackages',
          'desc' => 'Number and type of individual parts of a shipment.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7224',
              'name' => 'packageQuantity',
              'usage' => 'B',
              'desc' => 'To specify the number of packages.',
              'type' => 'n',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7065',
              'name' => 'packageTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of package.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7064',
              'name' => 'typeOfPackages',
              'usage' => 'B',
              'desc' => 'Description of the form in which goods are presented.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7233',
              'name' => 'packagingRelatedDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying information related to packaging.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C213',
          'name' => 'numberAndTypeOfPackages',
          'desc' => 'Number and type of individual parts of a shipment.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7224',
              'name' => 'packageQuantity',
              'usage' => 'B',
              'desc' => 'To specify the number of packages.',
              'type' => 'n',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7065',
              'name' => 'packageTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of package.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7064',
              'name' => 'typeOfPackages',
              'usage' => 'B',
              'desc' => 'Description of the form in which goods are presented.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7233',
              'name' => 'packagingRelatedDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying information related to packaging.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'GIN' => 
  array (
    'attributes' => 
    array (
      'id' => 'GIN',
      'name' => 'goodsIdentityNumber',
      'desc' => 'To give specific identification numbers, either as single numbers or ranges.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7405',
          'required' => 'true',
          'name' => 'objectIdentificationCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code qualifying the identification of an object.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C208',
          'required' => 'true',
          'name' => 'identityNumberRange',
          'desc' => 'Goods item identification numbers, start and end of consecutively numbered range.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C208',
          'name' => 'identityNumberRange',
          'desc' => 'Goods item identification numbers, start and end of consecutively numbered range.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C208',
          'name' => 'identityNumberRange',
          'desc' => 'Goods item identification numbers, start and end of consecutively numbered range.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C208',
          'name' => 'identityNumberRange',
          'desc' => 'Goods item identification numbers, start and end of consecutively numbered range.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C208',
          'name' => 'identityNumberRange',
          'desc' => 'Goods item identification numbers, start and end of consecutively numbered range.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'GIR' => 
  array (
    'attributes' => 
    array (
      'id' => 'GIR',
      'name' => 'relatedIdentificationNumbers',
      'desc' => 'To specify a related set of identification numbers.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7297',
          'required' => 'true',
          'name' => 'setTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the type of set.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C206',
          'required' => 'true',
          'name' => 'identificationNumber',
          'desc' => 'The identification of an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C206',
          'name' => 'identificationNumber',
          'desc' => 'The identification of an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C206',
          'name' => 'identificationNumber',
          'desc' => 'The identification of an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C206',
          'name' => 'identificationNumber',
          'desc' => 'The identification of an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C206',
          'name' => 'identificationNumber',
          'desc' => 'The identification of an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'GOR' => 
  array (
    'attributes' => 
    array (
      'id' => 'GOR',
      'name' => 'governmentalRequirements',
      'desc' => 'To indicate the requirement for a specific governmental action and/or procedure or which specific procedure is valid for a specific part of the transport.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8323',
          'name' => 'transportMovementCode',
          'usage' => 'B',
          'desc' => 'Code specifying the transport movement.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C232',
          'name' => 'governmentAction',
          'desc' => 'Code indicating a type of government action.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9415',
              'name' => 'governmentAgencyIdentificationCode',
              'usage' => 'B',
              'desc' => 'Code identifying a government agency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9411',
              'name' => 'governmentInvolvementCode',
              'usage' => 'B',
              'desc' => 'Code indicating the requirement and status of governmental involvement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9417',
              'name' => 'governmentActionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a type of government action such as inspection, detention, fumigation, security.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9353',
              'name' => 'governmentProcedureCode',
              'usage' => 'B',
              'desc' => 'Code specifying a government procedure.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C232',
          'name' => 'governmentAction',
          'desc' => 'Code indicating a type of government action.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9415',
              'name' => 'governmentAgencyIdentificationCode',
              'usage' => 'B',
              'desc' => 'Code identifying a government agency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9411',
              'name' => 'governmentInvolvementCode',
              'usage' => 'B',
              'desc' => 'Code indicating the requirement and status of governmental involvement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9417',
              'name' => 'governmentActionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a type of government action such as inspection, detention, fumigation, security.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9353',
              'name' => 'governmentProcedureCode',
              'usage' => 'B',
              'desc' => 'Code specifying a government procedure.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C232',
          'name' => 'governmentAction',
          'desc' => 'Code indicating a type of government action.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9415',
              'name' => 'governmentAgencyIdentificationCode',
              'usage' => 'B',
              'desc' => 'Code identifying a government agency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9411',
              'name' => 'governmentInvolvementCode',
              'usage' => 'B',
              'desc' => 'Code indicating the requirement and status of governmental involvement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9417',
              'name' => 'governmentActionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a type of government action such as inspection, detention, fumigation, security.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9353',
              'name' => 'governmentProcedureCode',
              'usage' => 'B',
              'desc' => 'Code specifying a government procedure.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C232',
          'name' => 'governmentAction',
          'desc' => 'Code indicating a type of government action.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9415',
              'name' => 'governmentAgencyIdentificationCode',
              'usage' => 'B',
              'desc' => 'Code identifying a government agency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9411',
              'name' => 'governmentInvolvementCode',
              'usage' => 'B',
              'desc' => 'Code indicating the requirement and status of governmental involvement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9417',
              'name' => 'governmentActionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a type of government action such as inspection, detention, fumigation, security.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9353',
              'name' => 'governmentProcedureCode',
              'usage' => 'B',
              'desc' => 'Code specifying a government procedure.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'GPO' => 
  array (
    'attributes' => 
    array (
      'id' => 'GPO',
      'name' => 'geographicalPosition',
      'desc' => 'To specify a geographical position.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6029',
          'required' => 'true',
          'name' => 'geographicalPositionCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code identifying the type of a geographical position.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6000',
          'name' => 'latitudeDegree',
          'usage' => 'C',
          'desc' => 'To specify  the angular distance, measured in degrees, minutes, and seconds, north or south from the equator.',
          'type' => 'an',
          'maxlength' => '10',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6002',
          'name' => 'longitudeDegree',
          'usage' => 'C',
          'desc' => 'To specify the value of longitude i.e. the angular distance east or west on the earth\'s surface, measured by the angle and expressed in degrees, minutes, and seconds, which the meridian passing through a particular place makes with a standard or prime meridian.',
          'type' => 'an',
          'maxlength' => '11',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6096',
          'name' => 'altitude',
          'usage' => 'B',
          'desc' => 'The height of an object above sea level.',
          'type' => 'n',
          'maxlength' => '18',
        ),
      ),
    ),
  ),
  'GRU' => 
  array (
    'attributes' => 
    array (
      'id' => 'GRU',
      'name' => 'segmentGroupUsageDetails',
      'desc' => 'To specify the usage of a segment group within a message type structure and its maintenance operation.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9164',
          'required' => 'true',
          'name' => 'groupIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a group.',
          'type' => 'an',
          'maxlength' => '4',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7299',
          'name' => 'requirementDesignatorCode',
          'usage' => 'C',
          'desc' => 'Code specifying the requirement designator.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6176',
          'name' => 'occurrencesMaximumNumber',
          'usage' => 'B',
          'desc' => 'To specify the maximum number of occurrences.',
          'type' => 'n',
          'maxlength' => '7',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1050',
          'name' => 'sequencePositionIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a position in a sequence.',
          'type' => 'an',
          'maxlength' => '10',
        ),
      ),
    ),
  ),
  'HAN' => 
  array (
    'attributes' => 
    array (
      'id' => 'HAN',
      'name' => 'handlingInstructions',
      'desc' => 'To specify handling and where necessary, notify hazards.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C524',
          'name' => 'handlingInstructions',
          'desc' => 'Instruction for the handling of goods, products or articles in shipment, storage etc.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4079',
              'name' => 'handlingInstructionDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a handling instruction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4078',
              'name' => 'handlingInstructionDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a handling instruction.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C218',
          'name' => 'hazardousMaterial',
          'desc' => 'To specify a hazardous material.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7419',
              'name' => 'hazardousMaterialCategoryNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying a kind of hazard for a material.',
              'type' => 'an',
              'maxlength' => '7',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7418',
              'name' => 'hazardousMaterialCategoryName',
              'usage' => 'B',
              'desc' => 'Name of a kind of hazard for a material.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'HYN' => 
  array (
    'attributes' => 
    array (
      'id' => 'HYN',
      'name' => 'hierarchyInformation',
      'desc' => 'A segment to identify hierarchical connections from a given item to a higher or lower levelled item or to identify dependencies among the content of hierarchically related groups of data.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7173',
          'required' => 'true',
          'name' => 'hierarchyObjectCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying an object in a hierarchy.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7171',
          'name' => 'hierarchicalStructureRelationshipCode',
          'usage' => 'B',
          'desc' => 'Code specifying the relationship between the hierarchical object and an identified object.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1229',
          'name' => 'actionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the action to be taken or already taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C212',
          'name' => 'itemNumberIdentification',
          'desc' => 'Goods identification for a specified source.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7140',
              'name' => 'itemIdentifier',
              'usage' => 'C',
              'desc' => 'To identify an item.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7143',
              'name' => 'itemTypeIdentificationCode',
              'usage' => 'C',
              'desc' => 'Coded identification of an item type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7166',
          'name' => 'hierarchicalStructureParentIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the next higher level in a hierarchical structure.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
    ),
  ),
  'ICD' => 
  array (
    'attributes' => 
    array (
      'id' => 'ICD',
      'name' => 'insuranceCoverDescription',
      'desc' => 'To describe the insurance cover.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C330',
          'required' => 'true',
          'name' => 'insuranceCoverType',
          'desc' => 'To provide the insurance cover type.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4497',
              'required' => 'true',
              'name' => 'insuranceCoverTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the meaning of the insurance cover.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C331',
          'required' => 'true',
          'name' => 'insuranceCoverDetails',
          'desc' => 'To provide the insurance cover details.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4495',
              'name' => 'insuranceCoverDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the insurance cover.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4494',
              'name' => 'insuranceCoverDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the insurance cover.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4494',
              'name' => 'insuranceCoverDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the insurance cover.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'IDE' => 
  array (
    'attributes' => 
    array (
      'id' => 'IDE',
      'name' => 'identity',
      'desc' => 'To identify an object.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7495',
          'required' => 'true',
          'name' => 'objectTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying a type of object.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C206',
          'name' => 'identificationNumber',
          'desc' => 'The identification of an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C082',
          'name' => 'partyIdentificationDetails',
          'desc' => 'Identification of a transaction party by code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'required' => 'true',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1222',
          'name' => 'configurationLevelNumber',
          'usage' => 'B',
          'desc' => 'To specify a level within a configuration.',
          'type' => 'n',
          'maxlength' => '2',
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C778',
          'name' => 'positionIdentification',
          'desc' => 'To identify the position of an object in a structure containing the object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7164',
              'name' => 'hierarchicalStructureLevelIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a level within a hierarchical structure.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C240',
          'name' => 'characteristicDescription',
          'desc' => 'To provide a description of a characteristic.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7037',
              'required' => 'true',
              'name' => 'characteristicDescriptionCode',
              'usage' => 'C',
              'desc' => 'A code specifying a characteristic.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7036',
              'name' => 'characteristicDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a characteristic.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7036',
              'name' => 'characteristicDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a characteristic.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'IFD' => 
  array (
    'attributes' => 
    array (
      'id' => 'IFD',
      'name' => 'informationDetail',
      'desc' => 'To specify details about items of information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9633',
          'name' => 'informationDetailsCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the information details.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C009',
          'name' => 'informationCategory',
          'desc' => 'To specify the category of information.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9615',
              'name' => 'informationCategoryDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the information category.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9614',
              'name' => 'informationCategoryDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the category of information.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C010',
          'name' => 'informationType',
          'desc' => 'To specify the type of information.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4473',
              'name' => 'informationTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying a type of information.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4472',
              'name' => 'informationType',
              'usage' => 'B',
              'desc' => 'Text representation of a type of information.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C011',
          'name' => 'informationDetail',
          'desc' => 'To provide the information details.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9617',
              'name' => 'informationDetailDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the information detail.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9616',
              'name' => 'informationDetailDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the information detail.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'IHC' => 
  array (
    'attributes' => 
    array (
      'id' => 'IHC',
      'name' => 'personCharacteristic',
      'desc' => 'To specify characteristics of a person such as ethnic origin.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3289',
          'required' => 'true',
          'name' => 'personCharacteristicCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying a type of characteristic of a person.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C818',
          'name' => 'personInheritedCharacteristicDetails',
          'desc' => 'To specify an inherited characteristic of a person.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3311',
              'name' => 'inheritedCharacteristicDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying an inherited characteristic.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3310',
              'name' => 'inheritedCharacteristicDescription',
              'usage' => 'B',
              'desc' => 'Free form description of an inherited characteristic.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
    ),
  ),
  'IMD' => 
  array (
    'attributes' => 
    array (
      'id' => 'IMD',
      'name' => 'itemDescription',
      'desc' => 'To describe an item in either an industry or free format.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7077',
          'name' => 'descriptionFormatCode',
          'usage' => 'B',
          'desc' => 'Code specifying the format of a description.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C272',
          'name' => 'itemCharacteristic',
          'desc' => 'To provide the characteristic of the item being described.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7081',
              'name' => 'itemCharacteristicCode',
              'usage' => 'B',
              'desc' => 'Code specifying the characteristic of an item.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C273',
          'name' => 'itemDescription',
          'desc' => 'Description of an item.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7009',
              'name' => 'itemDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an item.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7008',
              'name' => 'itemDescription',
              'usage' => 'C',
              'desc' => 'Free form description of an item.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7008',
              'name' => 'itemDescription',
              'usage' => 'C',
              'desc' => 'Free form description of an item.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3453',
              'name' => 'languageNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the language name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7383',
          'name' => 'surfaceOrLayerCode',
          'usage' => 'C',
          'desc' => 'Code specifying the surface or layer of an object.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'IND' => 
  array (
    'attributes' => 
    array (
      'id' => 'IND',
      'name' => 'indexDetails',
      'desc' => 'To specify an index.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C545',
          'name' => 'indexIdentification',
          'desc' => 'To identify an index.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5013',
              'required' => 'true',
              'name' => 'indexCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying an index.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5027',
              'name' => 'indexTypeIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a type of index.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C546',
          'name' => 'indexValue',
          'desc' => 'To identify the value of an index.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5030',
              'required' => 'true',
              'name' => 'indexText',
              'usage' => 'C',
              'desc' => 'To specify the value of an index.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5039',
              'name' => 'indexRepresentationCode',
              'usage' => 'B',
              'desc' => 'Code specifying the representation of an index value.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'INP' => 
  array (
    'attributes' => 
    array (
      'id' => 'INP',
      'name' => 'partiesAndInstruction',
      'desc' => 'To specify parties to an instruction, the instruction, or both.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C849',
          'name' => 'partiesToInstruction',
          'desc' => 'Identify the sending and receiving parties of the instruction.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3301',
              'required' => 'true',
              'name' => 'enactingPartyIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the party enacting an instruction.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3285',
              'name' => 'instructionReceivingPartyIdentifier',
              'usage' => 'B',
              'desc' => 'Code specifying the party to receive an instruction.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C522',
          'name' => 'instruction',
          'desc' => 'To specify an instruction.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4403',
              'required' => 'true',
              'name' => 'instructionTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of instruction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4401',
              'name' => 'instructionDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an instruction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4400',
              'name' => 'instructionDescription',
              'usage' => 'B',
              'desc' => 'Free form description of an instruction.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C850',
          'name' => 'statusOfInstruction',
          'desc' => 'Provides information regarding the status of an instruction.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'required' => 'true',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1229',
          'name' => 'actionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the action to be taken or already taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'INV' => 
  array (
    'attributes' => 
    array (
      'id' => 'INV',
      'name' => 'inventoryManagementRelatedDetails',
      'desc' => 'To provide the different information related to the inventory management functions and needed to process properly the inventory movements and the inventory balances.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4501',
          'name' => 'inventoryMovementDirectionCode',
          'usage' => 'B',
          'desc' => 'Code specifying the direction of an inventory movement.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7491',
          'name' => 'inventoryTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying a type of inventory.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4499',
          'name' => 'inventoryMovementReasonCode',
          'usage' => 'B',
          'desc' => 'Code specifying the reason for an inventory movement.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4503',
          'name' => 'inventoryBalanceMethodCode',
          'usage' => 'B',
          'desc' => 'Code specifying the method used to establish an inventory balance.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C522',
          'name' => 'instruction',
          'desc' => 'To specify an instruction.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4403',
              'required' => 'true',
              'name' => 'instructionTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of instruction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4401',
              'name' => 'instructionDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an instruction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4400',
              'name' => 'instructionDescription',
              'usage' => 'B',
              'desc' => 'Free form description of an instruction.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'IRQ' => 
  array (
    'attributes' => 
    array (
      'id' => 'IRQ',
      'name' => 'informationRequired',
      'desc' => 'To indicate which information is requested in a responding message.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C333',
          'required' => 'true',
          'name' => 'informationRequest',
          'desc' => 'To specify the information requested in a responding message.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4511',
              'name' => 'requestedInformationDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the response information requested.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4510',
              'name' => 'requestedInformationDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the response information requested.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'LAN' => 
  array (
    'attributes' => 
    array (
      'id' => 'LAN',
      'name' => 'language',
      'desc' => 'To specify a language.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3455',
          'required' => 'true',
          'name' => 'languageCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code qualifying a language.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C508',
          'name' => 'languageDetails',
          'desc' => 'To identify a language.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3453',
              'name' => 'languageNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the language name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3452',
              'name' => 'languageName',
              'usage' => 'C',
              'desc' => 'Name of language.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'LIN' => 
  array (
    'attributes' => 
    array (
      'id' => 'LIN',
      'name' => 'lineItem',
      'desc' => 'To identify a line item and configuration.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1082',
          'name' => 'lineItemIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a line item.',
          'type' => 'an',
          'maxlength' => '6',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1229',
          'name' => 'actionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the action to be taken or already taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C212',
          'name' => 'itemNumberIdentification',
          'desc' => 'Goods identification for a specified source.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7140',
              'name' => 'itemIdentifier',
              'usage' => 'C',
              'desc' => 'To identify an item.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7143',
              'name' => 'itemTypeIdentificationCode',
              'usage' => 'C',
              'desc' => 'Coded identification of an item type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C829',
          'name' => 'sublineInformation',
          'desc' => 'To provide an indication that a segment or segment group is used to contain sub-line or sub-line item information and to optionally enable the sub-line to be identified.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5495',
              'name' => 'sublineIndicatorCode',
              'usage' => 'B',
              'desc' => 'Code indicating a sub-line item.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1082',
              'name' => 'lineItemIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a line item.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1222',
          'name' => 'configurationLevelNumber',
          'usage' => 'B',
          'desc' => 'To specify a level within a configuration.',
          'type' => 'n',
          'maxlength' => '2',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7083',
          'name' => 'configurationOperationCode',
          'usage' => 'B',
          'desc' => 'Code specifying the configuration operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'LOC' => 
  array (
    'attributes' => 
    array (
      'id' => 'LOC',
      'name' => 'placelocationIdentification',
      'desc' => 'To identify a place or a location and/or related locations.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3227',
          'required' => 'true',
          'name' => 'locationFunctionCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code identifying the function of a location.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C517',
          'name' => 'locationIdentification',
          'desc' => 'Identification of a location by code or name.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3224',
              'name' => 'locationName',
              'usage' => 'C',
              'desc' => 'Name of the location.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C519',
          'name' => 'relatedLocationOneIdentification',
          'desc' => 'Identification the first related location by code or name.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3223',
              'name' => 'firstRelatedLocationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a first related location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3222',
              'name' => 'firstRelatedLocationName',
              'usage' => 'B',
              'desc' => 'Name of first related location.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C553',
          'name' => 'relatedLocationTwoIdentification',
          'desc' => 'Identification of second related location by code or name.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3233',
              'name' => 'secondRelatedLocationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a second related location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3232',
              'name' => 'secondRelatedLocationName',
              'usage' => 'B',
              'desc' => 'Name of the second related location.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5479',
          'name' => 'relationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a relation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'MEA' => 
  array (
    'attributes' => 
    array (
      'id' => 'MEA',
      'name' => 'measurements',
      'desc' => 'To specify physical measurements, including dimension tolerances, weights and counts.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6311',
          'required' => 'true',
          'name' => 'measurementPurposeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the purpose of the measurement.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C502',
          'name' => 'measurementDetails',
          'desc' => 'Identification of measurement type.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6313',
              'name' => 'measuredAttributeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the attribute measured.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6321',
              'name' => 'measurementSignificanceCode',
              'usage' => 'C',
              'desc' => 'Code specifying the significance of a measurement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6155',
              'name' => 'nondiscreteMeasurementNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying the name of a non-discrete measurement.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6154',
              'name' => 'nondiscreteMeasurementName',
              'usage' => 'B',
              'desc' => 'Name of a non-discrete measurement.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C174',
          'name' => 'valuerange',
          'desc' => 'Measurement value and relevant minimum and maximum values of the measurement range.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'required' => 'true',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6314',
              'name' => 'measure',
              'usage' => 'C',
              'desc' => 'To specify the value of a measurement.',
              'type' => 'an',
              'maxlength' => '18',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6162',
              'name' => 'rangeMinimumQuantity',
              'usage' => 'C',
              'desc' => 'To specify the minimum value of a range.',
              'type' => 'n',
              'maxlength' => '18',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6152',
              'name' => 'rangeMaximumQuantity',
              'usage' => 'C',
              'desc' => 'To specify the maximum value of a range.',
              'type' => 'n',
              'maxlength' => '18',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6432',
              'name' => 'significantDigitsQuantity',
              'usage' => 'B',
              'desc' => 'Count of the number of significant digits.',
              'type' => 'n',
              'maxlength' => '2',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7383',
          'name' => 'surfaceOrLayerCode',
          'usage' => 'C',
          'desc' => 'Code specifying the surface or layer of an object.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'MEM' => 
  array (
    'attributes' => 
    array (
      'id' => 'MEM',
      'name' => 'membershipDetails',
      'desc' => 'To specify details about membership.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7449',
          'required' => 'true',
          'name' => 'membershipTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the type of membership.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C942',
          'name' => 'membershipCategory',
          'desc' => 'Identification and/or description of a membership category for a member of a scheme or group.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7451',
              'required' => 'true',
              'name' => 'membershipCategoryDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a membership category.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7450',
              'name' => 'membershipCategoryDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a membership category.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C944',
          'name' => 'membershipStatus',
          'desc' => 'Code and/or description of membership status.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7453',
              'name' => 'membershipStatusDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a membership status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7452',
              'name' => 'membershipStatusDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a membership status.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C945',
          'name' => 'membershipLevel',
          'desc' => 'Identification of a membership level.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7455',
              'required' => 'true',
              'name' => 'membershipLevelCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the level of membership.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7457',
              'name' => 'membershipLevelDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a level of membership.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7456',
              'name' => 'membershipLevelDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a level of membership.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C203',
          'name' => 'ratetariffClass',
          'desc' => 'Identification of the applicable rate/tariff class.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5243',
              'required' => 'true',
              'name' => 'rateOrTariffClassDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an applicable rate or tariff class.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5242',
              'name' => 'rateOrTariffClassDescription',
              'usage' => 'B',
              'desc' => 'Free form description of an applicable rate or tariff class.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5275',
              'name' => 'supplementaryRateOrTariffCode',
              'usage' => 'B',
              'desc' => 'Code specifying a supplementary rate or tariff.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5275',
              'name' => 'supplementaryRateOrTariffCode',
              'usage' => 'B',
              'desc' => 'Code specifying a supplementary rate or tariff.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          9 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C960',
          'name' => 'reasonForChange',
          'desc' => 'Code and/or description of the reason for a change.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4295',
              'name' => 'changeReasonDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the reason for a change.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4294',
              'name' => 'changeReasonDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the reason for change.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'MKS' => 
  array (
    'attributes' => 
    array (
      'id' => 'MKS',
      'name' => 'marketsalesChannelInformation',
      'desc' => 'To specify to which market and/or through which sales distribution channel and/or for which end- use the sales of product/service have been made or are given as forecast.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7293',
          'required' => 'true',
          'name' => 'sectorAreaIdentificationCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying identification of a subject area.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C332',
          'required' => 'true',
          'name' => 'salesChannelIdentification',
          'desc' => 'Identification of sales channel for marketing data, sales, forecast, planning...',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3496',
              'required' => 'true',
              'name' => 'salesChannelIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a sales channel.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1229',
          'name' => 'actionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the action to be taken or already taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'MOA' => 
  array (
    'attributes' => 
    array (
      'id' => 'MOA',
      'name' => 'monetaryAmount',
      'desc' => 'To specify a monetary amount.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C516',
          'required' => 'true',
          'name' => 'monetaryAmount',
          'desc' => 'Amount of goods or services stated as a monetary amount in a specified currency.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5025',
              'required' => 'true',
              'name' => 'monetaryAmountTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of monetary amount.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6343',
              'name' => 'currencyTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of currency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'MSG' => 
  array (
    'attributes' => 
    array (
      'id' => 'MSG',
      'name' => 'messageTypeIdentification',
      'desc' => 'To identify a message type and to give its class and maintenance operation.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C709',
          'required' => 'true',
          'name' => 'messageIdentifier',
          'desc' => 'Identification of the message.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1003',
              'required' => 'true',
              'name' => 'messageTypeCode',
              'usage' => 'B',
              'desc' => 'Code specifying a type of message.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1056',
              'name' => 'versionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a version.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1058',
              'name' => 'releaseIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a release.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1476',
              'name' => 'controllingAgencyIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a controlling agency.',
              'type' => 'an',
              'maxlength' => '2',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1523',
              'name' => 'messageImplementationIdentificationCode',
              'usage' => 'B',
              'desc' => 'Code identifying an implementation of a message.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1060',
              'name' => 'revisionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a revision.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1373',
              'name' => 'documentStatusCode',
              'usage' => 'B',
              'desc' => 'Code specifying the status of a document.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1507',
          'name' => 'designatedClassCode',
          'usage' => 'B',
          'desc' => 'Code specifying a designated class.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C941',
          'name' => 'relationship',
          'desc' => 'Identification and/or description of a relationship.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9143',
              'name' => 'relationshipDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a relationship.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9142',
              'name' => 'relationshipDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a relationship.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'MTD' => 
  array (
    'attributes' => 
    array (
      'id' => 'MTD',
      'name' => 'maintenanceOperationDetails',
      'desc' => 'To identify a maintenance operation and its responsible parties.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7495',
          'required' => 'true',
          'name' => 'objectTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying a type of object.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3005',
          'name' => 'maintenanceOperationOperatorCode',
          'usage' => 'B',
          'desc' => 'A code identifying the type of party being responsible for a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3009',
          'name' => 'maintenanceOperationPayerCode',
          'usage' => 'B',
          'desc' => 'A code identifying  the type of party paying for a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'NAD' => 
  array (
    'attributes' => 
    array (
      'id' => 'NAD',
      'name' => 'nameAndAddress',
      'desc' => 'To specify the name/address and their related function, either by C082 only and/or unstructured by C058 or structured by C080 thru 3207.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3035',
          'required' => 'true',
          'name' => 'partyFunctionCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code giving specific meaning to a party.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C082',
          'name' => 'partyIdentificationDetails',
          'desc' => 'Identification of a transaction party by code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'required' => 'true',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C058',
          'name' => 'nameAndAddress',
          'desc' => 'Unstructured name and address: one to five lines.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3124',
              'required' => 'true',
              'name' => 'nameAndAddressDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a name and address line.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3124',
              'name' => 'nameAndAddressDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a name and address line.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3124',
              'name' => 'nameAndAddressDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a name and address line.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3124',
              'name' => 'nameAndAddressDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a name and address line.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3124',
              'name' => 'nameAndAddressDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a name and address line.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C080',
          'name' => 'partyName',
          'desc' => 'Identification of a transaction party by name, one to five lines. Party name may be formatted.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'required' => 'true',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3045',
              'name' => 'partyNameFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a party name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C059',
          'name' => 'street',
          'desc' => 'Street address and/or PO Box number in a structured address: one to four lines.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3042',
              'required' => 'true',
              'name' => 'streetAndNumberOrPostOfficeBoxIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a street and number and/or Post Office box number.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3042',
              'name' => 'streetAndNumberOrPostOfficeBoxIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a street and number and/or Post Office box number.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3042',
              'name' => 'streetAndNumberOrPostOfficeBoxIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a street and number and/or Post Office box number.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3042',
              'name' => 'streetAndNumberOrPostOfficeBoxIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a street and number and/or Post Office box number.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3164',
          'name' => 'cityName',
          'usage' => 'C',
          'desc' => 'Name of a city.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      6 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C819',
          'name' => 'countrySubdivisionDetails',
          'desc' => 'To specify a country subdivision, such as state, canton, county, prefecture.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3229',
              'name' => 'countrySubdivisionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a country subdivision, such as state, canton, county, prefecture.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3228',
              'name' => 'countrySubdivisionName',
              'usage' => 'C',
              'desc' => 'Name of a country subdivision, such as state, canton, county, prefecture.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      7 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3251',
          'name' => 'postalIdentificationCode',
          'usage' => 'C',
          'desc' => 'Code specifying the postal zone or address.',
          'type' => 'an',
          'maxlength' => '17',
        ),
      ),
      8 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3207',
          'name' => 'countryIdentifier',
          'usage' => 'C',
          'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'NAT' => 
  array (
    'attributes' => 
    array (
      'id' => 'NAT',
      'name' => 'nationality',
      'desc' => 'To specify a nationality.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3493',
          'required' => 'true',
          'name' => 'nationalityCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying a nationality.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C042',
          'name' => 'nationalityDetails',
          'desc' => 'To specify a nationality.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3293',
              'name' => 'nationalityNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying the name of a nationality.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3292',
              'name' => 'nationalityName',
              'usage' => 'B',
              'desc' => 'Name of a nationality.',
              'type' => 'a',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'PAC' => 
  array (
    'attributes' => 
    array (
      'id' => 'PAC',
      'name' => 'package',
      'desc' => 'To describe the number and type of packages/physical units.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7224',
          'name' => 'packageQuantity',
          'usage' => 'B',
          'desc' => 'To specify the number of packages.',
          'type' => 'n',
          'maxlength' => '8',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C531',
          'name' => 'packagingDetails',
          'desc' => 'Packaging level and details, terms and conditions.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7075',
              'name' => 'packagingLevelCode',
              'usage' => 'B',
              'desc' => 'Code specifying a level of packaging.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7233',
              'name' => 'packagingRelatedDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying information related to packaging.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7073',
              'name' => 'packagingTermsAndConditionsCode',
              'usage' => 'B',
              'desc' => 'Code specifying the packaging terms and conditions.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C202',
          'name' => 'packageType',
          'desc' => 'Type of package by name or by code from a specified source.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7065',
              'name' => 'packageTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of package.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7064',
              'name' => 'typeOfPackages',
              'usage' => 'B',
              'desc' => 'Description of the form in which goods are presented.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C402',
          'name' => 'packageTypeIdentification',
          'desc' => 'Identification of the form in which goods are described.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7077',
              'required' => 'true',
              'name' => 'descriptionFormatCode',
              'usage' => 'B',
              'desc' => 'Code specifying the format of a description.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7064',
              'required' => 'true',
              'name' => 'typeOfPackages',
              'usage' => 'B',
              'desc' => 'Description of the form in which goods are presented.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7143',
              'name' => 'itemTypeIdentificationCode',
              'usage' => 'C',
              'desc' => 'Coded identification of an item type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7064',
              'name' => 'typeOfPackages',
              'usage' => 'B',
              'desc' => 'Description of the form in which goods are presented.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7143',
              'name' => 'itemTypeIdentificationCode',
              'usage' => 'C',
              'desc' => 'Coded identification of an item type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C532',
          'name' => 'returnablePackageDetails',
          'desc' => 'Indication of responsibility for payment and load contents of returnable packages.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8395',
              'name' => 'returnablePackageFreightPaymentResponsibilityCode',
              'usage' => 'B',
              'desc' => 'Code specifying the responsibility for the freight payment for a returnable package.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8393',
              'name' => 'returnablePackageLoadContentsCode',
              'usage' => 'B',
              'desc' => 'Code specifying the load contents for a returnable package.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'PAI' => 
  array (
    'attributes' => 
    array (
      'id' => 'PAI',
      'name' => 'paymentInstructions',
      'desc' => 'To specify the instructions for payment.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C534',
          'required' => 'true',
          'name' => 'paymentInstructionDetails',
          'desc' => 'Indication of method of payment employed or to be employed.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4439',
              'name' => 'paymentConditionsCode',
              'usage' => 'C',
              'desc' => 'Code specifying the payment conditions.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4431',
              'name' => 'paymentGuaranteeMeansCode',
              'usage' => 'B',
              'desc' => 'Code specifying the means of payment guarantee.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4461',
              'name' => 'paymentMeansCode',
              'usage' => 'B',
              'desc' => 'Code identifying a means of payment.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4435',
              'name' => 'paymentChannelCode',
              'usage' => 'B',
              'desc' => 'Code specifying the payment channel.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'PAS' => 
  array (
    'attributes' => 
    array (
      'id' => 'PAS',
      'name' => 'attendance',
      'desc' => 'To specify attendance information relating to an individual.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9443',
          'required' => 'true',
          'name' => 'attendanceTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying a type of attendance.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C839',
          'name' => 'attendeeCategory',
          'desc' => 'To specify the category of the attendee.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7459',
              'name' => 'attendeeCategoryDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a category of attendee.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7458',
              'name' => 'attendeeCategoryDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a category attendee.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C840',
          'name' => 'attendanceAdmissionDetails',
          'desc' => 'To specify type of admission.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9445',
              'name' => 'admissionTypeDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the type of admission.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9444',
              'name' => 'admissionTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form of the type of admission.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C841',
          'name' => 'attendanceDischargeDetails',
          'desc' => 'To specify type of discharge.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9447',
              'name' => 'dischargeTypeDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the type of discharge.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9446',
              'name' => 'dischargeTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the type of discharge.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'PCC' => 
  array (
    'attributes' => 
    array (
      'id' => 'PCC',
      'name' => 'premiumCalculationComponentDetails',
      'desc' => 'To identify the component affecting a premium calculation and the value category of the component.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C820',
          'name' => 'premiumCalculationComponent',
          'desc' => 'To identify the component affecting premium calculation.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4521',
              'name' => 'premiumCalculationComponentIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a component affecting premium calculation.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'PCD' => 
  array (
    'attributes' => 
    array (
      'id' => 'PCD',
      'name' => 'percentageDetails',
      'desc' => 'To specify percentage information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C501',
          'required' => 'true',
          'name' => 'percentageDetails',
          'desc' => 'Percentage relating to a specified basis.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5245',
              'required' => 'true',
              'name' => 'percentageTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the type of percentage.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5482',
              'name' => 'percentage',
              'usage' => 'C',
              'desc' => 'To specify a percentage.',
              'type' => 'n',
              'maxlength' => '10',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5249',
              'name' => 'percentageBasisIdentificationCode',
              'usage' => 'B',
              'desc' => 'Code specifying the basis on which a percentage is calculated.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'PCI' => 
  array (
    'attributes' => 
    array (
      'id' => 'PCI',
      'name' => 'packageIdentification',
      'desc' => 'To specify markings and labels on individual packages or physical units.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4233',
          'name' => 'markingInstructionsCode',
          'usage' => 'B',
          'desc' => 'Code specifying instructions for marking.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C210',
          'name' => 'marksAndLabels',
          'desc' => 'Shipping marks on packages in free text; one to ten lines.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7102',
              'required' => 'true',
              'name' => 'shippingMarksDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the shipping marks.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7102',
              'name' => 'shippingMarksDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the shipping marks.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7102',
              'name' => 'shippingMarksDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the shipping marks.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7102',
              'name' => 'shippingMarksDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the shipping marks.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7102',
              'name' => 'shippingMarksDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the shipping marks.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7102',
              'name' => 'shippingMarksDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the shipping marks.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7102',
              'name' => 'shippingMarksDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the shipping marks.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7102',
              'name' => 'shippingMarksDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the shipping marks.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7102',
              'name' => 'shippingMarksDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the shipping marks.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          9 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7102',
              'name' => 'shippingMarksDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the shipping marks.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8169',
          'name' => 'fullOrEmptyIndicatorCode',
          'usage' => 'B',
          'desc' => 'Code indicating whether an object is full or empty.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C827',
          'name' => 'typeOfMarking',
          'desc' => 'Specification of the type of marking that reflects the method that was used and the conventions adhered to for marking (e.g. of packages).',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7511',
              'required' => 'true',
              'name' => 'markingTypeCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of marking.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'PDI' => 
  array (
    'attributes' => 
    array (
      'id' => 'PDI',
      'name' => 'personDemographicInformation',
      'desc' => 'To specify items of person demographic information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3499',
          'name' => 'genderCode',
          'usage' => 'C',
          'desc' => 'Code giving the gender of a person, animal or plant.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C085',
          'name' => 'maritalStatusDetails',
          'desc' => 'To specify the marital status of a person.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3479',
              'name' => 'maritalStatusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the marital status of a person.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3478',
              'name' => 'maritalStatusDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the marital status of a person.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C101',
          'name' => 'religionDetails',
          'desc' => 'To specify the religion of a person.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3483',
              'name' => 'religionNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying the name of a religion.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3482',
              'name' => 'religionName',
              'usage' => 'B',
              'desc' => 'Name of a religion.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'PER' => 
  array (
    'attributes' => 
    array (
      'id' => 'PER',
      'name' => 'periodRelatedDetails',
      'desc' => 'Specification of details relating to a period.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '2023',
          'name' => 'periodTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the type of the period.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C977',
          'name' => 'periodDetail',
          'desc' => 'Specification of the period detail in coded or clear form.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2119',
              'name' => 'periodDetailDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the period detail.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2118',
              'name' => 'periodDetailDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the period detail.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'PGI' => 
  array (
    'attributes' => 
    array (
      'id' => 'PGI',
      'name' => 'productGroupInformation',
      'desc' => 'To indicate the group in which a product belongs.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5379',
          'required' => 'true',
          'name' => 'productGroupTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying the type of product group.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C288',
          'name' => 'productGroup',
          'desc' => 'To give product group information.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5389',
              'name' => 'productGroupNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the name of a product group.',
              'type' => 'an',
              'maxlength' => '25',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5388',
              'name' => 'productGroupName',
              'usage' => 'B',
              'desc' => 'Name of a product code.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'PIA' => 
  array (
    'attributes' => 
    array (
      'id' => 'PIA',
      'name' => 'additionalProductId',
      'desc' => 'To specify additional or substitutional item identification codes.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4347',
          'required' => 'true',
          'name' => 'productIdentifierCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the product identifier.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C212',
          'required' => 'true',
          'name' => 'itemNumberIdentification',
          'desc' => 'Goods identification for a specified source.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7140',
              'name' => 'itemIdentifier',
              'usage' => 'C',
              'desc' => 'To identify an item.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7143',
              'name' => 'itemTypeIdentificationCode',
              'usage' => 'C',
              'desc' => 'Coded identification of an item type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C212',
          'name' => 'itemNumberIdentification',
          'desc' => 'Goods identification for a specified source.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7140',
              'name' => 'itemIdentifier',
              'usage' => 'C',
              'desc' => 'To identify an item.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7143',
              'name' => 'itemTypeIdentificationCode',
              'usage' => 'C',
              'desc' => 'Coded identification of an item type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C212',
          'name' => 'itemNumberIdentification',
          'desc' => 'Goods identification for a specified source.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7140',
              'name' => 'itemIdentifier',
              'usage' => 'C',
              'desc' => 'To identify an item.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7143',
              'name' => 'itemTypeIdentificationCode',
              'usage' => 'C',
              'desc' => 'Coded identification of an item type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C212',
          'name' => 'itemNumberIdentification',
          'desc' => 'Goods identification for a specified source.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7140',
              'name' => 'itemIdentifier',
              'usage' => 'C',
              'desc' => 'To identify an item.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7143',
              'name' => 'itemTypeIdentificationCode',
              'usage' => 'C',
              'desc' => 'Coded identification of an item type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C212',
          'name' => 'itemNumberIdentification',
          'desc' => 'Goods identification for a specified source.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7140',
              'name' => 'itemIdentifier',
              'usage' => 'C',
              'desc' => 'To identify an item.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7143',
              'name' => 'itemTypeIdentificationCode',
              'usage' => 'C',
              'desc' => 'Coded identification of an item type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'PNA' => 
  array (
    'attributes' => 
    array (
      'id' => 'PNA',
      'name' => 'partyIdentification',
      'desc' => 'To specify information necessary to establish the identity of a party.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3035',
          'required' => 'true',
          'name' => 'partyFunctionCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code giving specific meaning to a party.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C206',
          'name' => 'identificationNumber',
          'desc' => 'The identification of an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C082',
          'name' => 'partyIdentificationDetails',
          'desc' => 'Identification of a transaction party by code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'required' => 'true',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3403',
          'name' => 'nameTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying the type of name.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3397',
          'name' => 'nameStatusCode',
          'usage' => 'C',
          'desc' => 'Code specifying the status of a name.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C816',
          'name' => 'nameComponentDetails',
          'desc' => 'To specify a name component.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3405',
              'required' => 'true',
              'name' => 'nameComponentTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the type of a name component.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3398',
              'name' => 'nameComponentDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a name component.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3401',
              'name' => 'nameComponentUsageCode',
              'usage' => 'B',
              'desc' => 'Code specifying the usage of a name component.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3295',
              'name' => 'nameOriginalAlphabetCode',
              'usage' => 'B',
              'desc' => 'Code specifying the alphabet originally used to represent a name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C816',
          'name' => 'nameComponentDetails',
          'desc' => 'To specify a name component.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3405',
              'required' => 'true',
              'name' => 'nameComponentTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the type of a name component.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3398',
              'name' => 'nameComponentDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a name component.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3401',
              'name' => 'nameComponentUsageCode',
              'usage' => 'B',
              'desc' => 'Code specifying the usage of a name component.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3295',
              'name' => 'nameOriginalAlphabetCode',
              'usage' => 'B',
              'desc' => 'Code specifying the alphabet originally used to represent a name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      7 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C816',
          'name' => 'nameComponentDetails',
          'desc' => 'To specify a name component.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3405',
              'required' => 'true',
              'name' => 'nameComponentTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the type of a name component.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3398',
              'name' => 'nameComponentDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a name component.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3401',
              'name' => 'nameComponentUsageCode',
              'usage' => 'B',
              'desc' => 'Code specifying the usage of a name component.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3295',
              'name' => 'nameOriginalAlphabetCode',
              'usage' => 'B',
              'desc' => 'Code specifying the alphabet originally used to represent a name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      8 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C816',
          'name' => 'nameComponentDetails',
          'desc' => 'To specify a name component.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3405',
              'required' => 'true',
              'name' => 'nameComponentTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the type of a name component.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3398',
              'name' => 'nameComponentDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a name component.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3401',
              'name' => 'nameComponentUsageCode',
              'usage' => 'B',
              'desc' => 'Code specifying the usage of a name component.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3295',
              'name' => 'nameOriginalAlphabetCode',
              'usage' => 'B',
              'desc' => 'Code specifying the alphabet originally used to represent a name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      9 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C816',
          'name' => 'nameComponentDetails',
          'desc' => 'To specify a name component.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3405',
              'required' => 'true',
              'name' => 'nameComponentTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the type of a name component.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3398',
              'name' => 'nameComponentDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a name component.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3401',
              'name' => 'nameComponentUsageCode',
              'usage' => 'B',
              'desc' => 'Code specifying the usage of a name component.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3295',
              'name' => 'nameOriginalAlphabetCode',
              'usage' => 'B',
              'desc' => 'Code specifying the alphabet originally used to represent a name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      10 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1229',
          'name' => 'actionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the action to be taken or already taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'POC' => 
  array (
    'attributes' => 
    array (
      'id' => 'POC',
      'name' => 'purposeOfConveyanceCall',
      'desc' => 'To specify the purpose of the call of the conveyance.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C525',
          'required' => 'true',
          'name' => 'purposeOfConveyanceCall',
          'desc' => 'Description of the purpose of the call of the conveyance.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8025',
              'name' => 'conveyanceCallPurposeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the purpose of the conveyance call.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8024',
              'name' => 'conveyanceCallPurposeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the purpose of the conveyance call.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'PRC' => 
  array (
    'attributes' => 
    array (
      'id' => 'PRC',
      'name' => 'processIdentification',
      'desc' => 'To identify a process.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C242',
          'name' => 'processTypeAndDescription',
          'desc' => 'Identification of process type and description.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7187',
              'required' => 'true',
              'name' => 'processTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a type of process.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7186',
              'name' => 'processTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a type of process.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7186',
              'name' => 'processTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a type of process.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C830',
          'name' => 'processIdentificationDetails',
          'desc' => 'To identify the details of a specific process.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7191',
              'name' => 'processDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a process.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7190',
              'name' => 'processDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a process.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
    ),
  ),
  'PRI' => 
  array (
    'attributes' => 
    array (
      'id' => 'PRI',
      'name' => 'priceDetails',
      'desc' => 'To specify price information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C509',
          'name' => 'priceInformation',
          'desc' => 'Identification of price type, price and related details.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5125',
              'required' => 'true',
              'name' => 'priceCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying a price.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5118',
              'name' => 'priceAmount',
              'usage' => 'C',
              'desc' => 'To specify a price.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5375',
              'name' => 'priceTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the type of price.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5387',
              'name' => 'priceSpecificationCode',
              'usage' => 'B',
              'desc' => 'Code identifying pricing specification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5284',
              'name' => 'unitPriceBasisQuantity',
              'usage' => 'B',
              'desc' => 'To specify the basis for a unit price.',
              'type' => 'n',
              'maxlength' => '9',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5213',
          'name' => 'sublineItemPriceChangeOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying the price change operation for a sub- line item.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'PRV' => 
  array (
    'attributes' => 
    array (
      'id' => 'PRV',
      'name' => 'provisoDetails',
      'desc' => 'Details regarding the stipulation or limitation in a document.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4071',
          'required' => 'true',
          'name' => 'provisoCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the proviso.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C971',
          'name' => 'provisoType',
          'desc' => 'Specification of the proviso type in coded or clear form.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4073',
              'name' => 'provisoTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the type of proviso.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4072',
              'name' => 'provisoTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the type of proviso.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C972',
          'name' => 'provisoCalculation',
          'desc' => 'Specification of the proviso calculation in coded or clear form.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4075',
              'name' => 'provisoCalculationDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the proviso calculation.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4074',
              'name' => 'provisoCalculationDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the proviso calculation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'PSD' => 
  array (
    'attributes' => 
    array (
      'id' => 'PSD',
      'name' => 'physicalSampleDescription',
      'desc' => 'To define the physical sample parameters associated with a test, resulting in discrete measurements.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4407',
          'name' => 'sampleProcessStepCode',
          'usage' => 'B',
          'desc' => 'Code specifying the step in the sample process.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7039',
          'name' => 'sampleSelectionMethodCode',
          'usage' => 'B',
          'desc' => 'Code specifying the selection method for a sample.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C526',
          'name' => 'frequencyDetails',
          'desc' => 'Number of samples collected per specified unit of measure.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6071',
              'required' => 'true',
              'name' => 'frequencyCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the frequency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6072',
              'name' => 'frequencyRate',
              'usage' => 'C',
              'desc' => 'The number of repetitions in a given time.',
              'type' => 'n',
              'maxlength' => '9',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7045',
          'name' => 'sampleStateCode',
          'usage' => 'B',
          'desc' => 'Code specifying the state of a sample.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7047',
          'name' => 'sampleDirectionCode',
          'usage' => 'B',
          'desc' => 'Code specifying the direction in which a sample was taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C514',
          'name' => 'sampleLocationDetails',
          'desc' => 'Identification of location within the specimen, from which the sample was taken.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3237',
              'name' => 'sampleLocationDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the sample location.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3236',
              'name' => 'sampleLocationDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the sample location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C514',
          'name' => 'sampleLocationDetails',
          'desc' => 'Identification of location within the specimen, from which the sample was taken.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3237',
              'name' => 'sampleLocationDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the sample location.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3236',
              'name' => 'sampleLocationDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the sample location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      7 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C514',
          'name' => 'sampleLocationDetails',
          'desc' => 'Identification of location within the specimen, from which the sample was taken.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3237',
              'name' => 'sampleLocationDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the sample location.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3236',
              'name' => 'sampleLocationDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the sample location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'PTY' => 
  array (
    'attributes' => 
    array (
      'id' => 'PTY',
      'name' => 'priority',
      'desc' => 'The segment is used to communicate priority information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4035',
          'required' => 'true',
          'name' => 'priorityTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the type of priority.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C585',
          'name' => 'priorityDetails',
          'desc' => 'To indicate a priority.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4037',
              'name' => 'priorityDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a priority.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4036',
              'name' => 'priorityDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a priority.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'PYT' => 
  array (
    'attributes' => 
    array (
      'id' => 'PYT',
      'name' => 'paymentTerms',
      'desc' => 'To specify the terms of payment.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4279',
          'required' => 'true',
          'name' => 'paymentTermsTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the type of payment terms.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C019',
          'name' => 'paymentTerms',
          'desc' => 'Terms of payment information.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4277',
              'name' => 'paymentTermsDescriptionIdentifier',
              'usage' => 'B',
              'desc' => 'Identification of the terms of payment between the parties to a transaction (generic term).',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4276',
              'name' => 'paymentTermsDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the conditions of payment between the parties to a transaction.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '2475',
          'name' => 'eventTimeReferenceCode',
          'usage' => 'B',
          'desc' => 'Code specifying a time that references an event that will or has occurred.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '2009',
          'name' => 'termsTimeRelationCode',
          'usage' => 'B',
          'desc' => 'Code relating terms to a reference date, time or period.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '2151',
          'name' => 'periodTypeCode',
          'usage' => 'C',
          'desc' => 'Code specifying the type of period.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '2152',
          'name' => 'periodCountQuantity',
          'usage' => 'C',
          'desc' => 'Count of the number of periods.',
          'type' => 'n',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'QRS' => 
  array (
    'attributes' => 
    array (
      'id' => 'QRS',
      'name' => 'queryAndResponse',
      'desc' => 'To provide a declaration in the form of a coded question and response.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7293',
          'required' => 'true',
          'name' => 'sectorAreaIdentificationCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying identification of a subject area.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C811',
          'name' => 'questionDetails',
          'desc' => 'To specify a question.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4057',
              'name' => 'questionDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a question.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4056',
              'name' => 'questionDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a question.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C812',
          'name' => 'responseDetails',
          'desc' => 'To specify a response to a question, in code or text.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4345',
              'name' => 'responseDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a response.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4344',
              'name' => 'responseDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a response.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
    ),
  ),
  'QTY' => 
  array (
    'attributes' => 
    array (
      'id' => 'QTY',
      'name' => 'quantity',
      'desc' => 'To specify a pertinent quantity.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C186',
          'required' => 'true',
          'name' => 'quantityDetails',
          'desc' => 'Quantity information in a transaction, qualified when relevant.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6063',
              'required' => 'true',
              'name' => 'quantityTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of quantity.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'required' => 'true',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
        ),
      ),
    ),
  ),
  'QUA' => 
  array (
    'attributes' => 
    array (
      'id' => 'QUA',
      'name' => 'qualification',
      'desc' => 'To specify the qualification of a person.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9037',
          'required' => 'true',
          'name' => 'qualificationTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying a type of qualification.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C950',
          'name' => 'qualificationClassification',
          'desc' => 'Qualification classification description and/or code. This specifies the trade, skill, professional or similar qualification category.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9007',
              'name' => 'qualificationClassificationDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a qualification classification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9006',
              'name' => 'qualificationClassificationDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a qualification classification.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9006',
              'name' => 'qualificationClassificationDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a qualification classification.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'QVR' => 
  array (
    'attributes' => 
    array (
      'id' => 'QVR',
      'name' => 'quantityVariances',
      'desc' => 'To specify item details relating to quantity variances.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C279',
          'name' => 'quantityDifferenceInformation',
          'desc' => 'Information on quantity difference.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6064',
              'required' => 'true',
              'name' => 'varianceQuantity',
              'usage' => 'B',
              'desc' => 'To specify the value of a quantity variance.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6063',
              'name' => 'quantityTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of quantity.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4221',
          'name' => 'discrepancyNatureIdentificationCode',
          'usage' => 'B',
          'desc' => 'Code specifying the identification used to define the nature of a discrepancy.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C960',
          'name' => 'reasonForChange',
          'desc' => 'Code and/or description of the reason for a change.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4295',
              'name' => 'changeReasonDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the reason for a change.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4294',
              'name' => 'changeReasonDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the reason for change.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'RCS' => 
  array (
    'attributes' => 
    array (
      'id' => 'RCS',
      'name' => 'requirementsAndConditions',
      'desc' => 'To specify sector/subject requirements and conditions.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7293',
          'required' => 'true',
          'name' => 'sectorAreaIdentificationCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying identification of a subject area.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C550',
          'name' => 'requirementconditionIdentification',
          'desc' => 'To identify the specific rule/condition requirement.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7295',
              'required' => 'true',
              'name' => 'requirementOrConditionDescriptionIdentifier',
              'usage' => 'B',
              'desc' => 'Code specifying a requirement or condition.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7294',
              'name' => 'requirementOrConditionDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a requirement or condition.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1229',
          'name' => 'actionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the action to be taken or already taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3207',
          'name' => 'countryIdentifier',
          'usage' => 'C',
          'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'REL' => 
  array (
    'attributes' => 
    array (
      'id' => 'REL',
      'name' => 'relationship',
      'desc' => 'To identify relationships between objects.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9141',
          'required' => 'true',
          'name' => 'relationshipTypeCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code qualifying a type of relationship.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C941',
          'name' => 'relationship',
          'desc' => 'Identification and/or description of a relationship.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9143',
              'name' => 'relationshipDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a relationship.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9142',
              'name' => 'relationshipDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a relationship.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'RFF' => 
  array (
    'attributes' => 
    array (
      'id' => 'RFF',
      'name' => 'reference',
      'desc' => 'To specify a reference.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C506',
          'required' => 'true',
          'name' => 'reference',
          'desc' => 'Identification of a reference.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1153',
              'required' => 'true',
              'name' => 'referenceCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying a reference.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1154',
              'name' => 'referenceIdentifier',
              'usage' => 'C',
              'desc' => 'Identifies a reference.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1156',
              'name' => 'documentLineIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a line of a document.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1056',
              'name' => 'versionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a version.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1060',
              'name' => 'revisionIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a revision.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
        ),
      ),
    ),
  ),
  'RJL' => 
  array (
    'attributes' => 
    array (
      'id' => 'RJL',
      'name' => 'accountingJournalIdentification',
      'desc' => 'To identify an accounting journal.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C595',
          'name' => 'accountingJournalIdentification',
          'desc' => 'Identification of an accounting journal.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1171',
              'required' => 'true',
              'name' => 'accountingJournalIdentifier',
              'usage' => 'B',
              'desc' => 'To identify an accounting journal.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1170',
              'name' => 'accountingJournalName',
              'usage' => 'B',
              'desc' => 'Name of an accounting journal.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C596',
          'name' => 'accountingEntryTypeDetails',
          'desc' => 'Identification of the type of entry included in an accounting journal.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4475',
              'required' => 'true',
              'name' => 'accountingEntryTypeNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying a type of accounting entry.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4474',
              'name' => 'accountingEntryTypeName',
              'usage' => 'B',
              'desc' => 'Name of a type of accounting entry.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'RNG' => 
  array (
    'attributes' => 
    array (
      'id' => 'RNG',
      'name' => 'rangeDetails',
      'desc' => 'To identify a range.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6167',
          'required' => 'true',
          'name' => 'rangeTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying a type of range.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C280',
          'name' => 'range',
          'desc' => 'Range minimum and maximum limits.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'required' => 'true',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6162',
              'name' => 'rangeMinimumQuantity',
              'usage' => 'C',
              'desc' => 'To specify the minimum value of a range.',
              'type' => 'n',
              'maxlength' => '18',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6152',
              'name' => 'rangeMaximumQuantity',
              'usage' => 'C',
              'desc' => 'To specify the maximum value of a range.',
              'type' => 'n',
              'maxlength' => '18',
            ),
          ),
        ),
      ),
    ),
  ),
  'ROD' => 
  array (
    'attributes' => 
    array (
      'id' => 'ROD',
      'name' => 'riskObjectType',
      'desc' => 'To identify a type of object at risk.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C851',
          'name' => 'riskObjectType',
          'desc' => 'Specification of a type of risk object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7179',
              'name' => 'riskObjectTypeIdentifier',
              'usage' => 'B',
              'desc' => 'Code identifying a type of risk object.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C852',
          'name' => 'riskObjectSubtype',
          'desc' => 'To provide identification details for a risk object sub-type.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7177',
              'name' => 'riskObjectSubtypeDescriptionIdentifier',
              'usage' => 'B',
              'desc' => 'Code identifying the object sub-type of a risk.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7176',
              'name' => 'riskObjectSubtypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the object sub-type of a risk.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
    ),
  ),
  'RSL' => 
  array (
    'attributes' => 
    array (
      'id' => 'RSL',
      'name' => 'result',
      'desc' => 'To specify a discrete or non-discrete result as a value or value range.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6087',
          'required' => 'true',
          'name' => 'resultValueTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the type of a result value.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6077',
          'name' => 'resultRepresentationCode',
          'usage' => 'B',
          'desc' => 'Code specifying the representation of a result.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C831',
          'name' => 'resultDetails',
          'desc' => 'To specify a value.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6314',
              'name' => 'measure',
              'usage' => 'C',
              'desc' => 'To specify the value of a measurement.',
              'type' => 'an',
              'maxlength' => '18',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6321',
              'name' => 'measurementSignificanceCode',
              'usage' => 'C',
              'desc' => 'Code specifying the significance of a measurement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6155',
              'name' => 'nondiscreteMeasurementNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying the name of a non-discrete measurement.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6154',
              'name' => 'nondiscreteMeasurementName',
              'usage' => 'B',
              'desc' => 'Name of a non-discrete measurement.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C831',
          'name' => 'resultDetails',
          'desc' => 'To specify a value.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6314',
              'name' => 'measure',
              'usage' => 'C',
              'desc' => 'To specify the value of a measurement.',
              'type' => 'an',
              'maxlength' => '18',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6321',
              'name' => 'measurementSignificanceCode',
              'usage' => 'C',
              'desc' => 'Code specifying the significance of a measurement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6155',
              'name' => 'nondiscreteMeasurementNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying the name of a non-discrete measurement.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6154',
              'name' => 'nondiscreteMeasurementName',
              'usage' => 'B',
              'desc' => 'Name of a non-discrete measurement.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C848',
          'name' => 'measurementUnitDetails',
          'desc' => 'To specify a measurement unit.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6410',
              'name' => 'measurementUnitName',
              'usage' => 'B',
              'desc' => 'Name of a measurement unit.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6079',
          'name' => 'resultNormalcyCode',
          'usage' => 'B',
          'desc' => 'Code specifying the degree of conformance to a standard.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'RTE' => 
  array (
    'attributes' => 
    array (
      'id' => 'RTE',
      'name' => 'rateDetails',
      'desc' => 'To specify rate information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C128',
          'required' => 'true',
          'name' => 'rateDetails',
          'desc' => 'Rate per unit and rate basis.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5419',
              'required' => 'true',
              'name' => 'rateTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the type of rate.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5420',
              'required' => 'true',
              'name' => 'unitPriceBasisRate',
              'usage' => 'B',
              'desc' => 'To specify the rate per unit specified in the unit price basis.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5284',
              'name' => 'unitPriceBasisQuantity',
              'usage' => 'B',
              'desc' => 'To specify the basis for a unit price.',
              'type' => 'n',
              'maxlength' => '9',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'SAL' => 
  array (
    'attributes' => 
    array (
      'id' => 'SAL',
      'name' => 'remunerationTypeIdentification',
      'desc' => 'Identification of a remuneration type.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C049',
          'name' => 'remunerationTypeIdentification',
          'desc' => 'Identification of the type of a remuneration.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5315',
              'name' => 'remunerationTypeNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying the name of a type of remuneration.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5314',
              'name' => 'remunerationTypeName',
              'usage' => 'B',
              'desc' => 'Name of a type of remuneration.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5314',
              'name' => 'remunerationTypeName',
              'usage' => 'B',
              'desc' => 'Name of a type of remuneration.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'SCC' => 
  array (
    'attributes' => 
    array (
      'id' => 'SCC',
      'name' => 'schedulingConditions',
      'desc' => 'To specify scheduling conditions.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4017',
          'required' => 'true',
          'name' => 'deliveryPlanCommitmentLevelCode',
          'usage' => 'B',
          'desc' => 'Code specifying the level of commitment to a delivery plan.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4493',
          'name' => 'deliveryInstructionCode',
          'usage' => 'B',
          'desc' => 'Code specifying a delivery instruction.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C329',
          'name' => 'patternDescription',
          'desc' => 'Shipment, delivery or production interval pattern and timing.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2013',
              'name' => 'frequencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the rate of recurrence.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2015',
              'name' => 'despatchPatternCode',
              'usage' => 'C',
              'desc' => 'Code specifying a despatch pattern.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2017',
              'name' => 'despatchPatternTimingCode',
              'usage' => 'C',
              'desc' => 'Code specifying a set of dates/times within a despatch pattern.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'SCD' => 
  array (
    'attributes' => 
    array (
      'id' => 'SCD',
      'name' => 'structureComponentDefinition',
      'desc' => 'To specify a component of a data structure (e.g. an array or table). QUALIFIER                                  M    1 an..3',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C786',
          'name' => 'structureComponentIdentification',
          'desc' => 'The identification of a structure component.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7512',
              'required' => 'true',
              'name' => 'structureComponentIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a component of a structure.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C082',
          'name' => 'partyIdentificationDetails',
          'desc' => 'Identification of a transaction party by code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'required' => 'true',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1222',
          'name' => 'configurationLevelNumber',
          'usage' => 'B',
          'desc' => 'To specify a level within a configuration.',
          'type' => 'n',
          'maxlength' => '2',
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C778',
          'name' => 'positionIdentification',
          'desc' => 'To identify the position of an object in a structure containing the object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7164',
              'name' => 'hierarchicalStructureLevelIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a level within a hierarchical structure.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C240',
          'name' => 'characteristicDescription',
          'desc' => 'To provide a description of a characteristic.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7037',
              'required' => 'true',
              'name' => 'characteristicDescriptionCode',
              'usage' => 'C',
              'desc' => 'A code specifying a characteristic.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7036',
              'name' => 'characteristicDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a characteristic.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7036',
              'name' => 'characteristicDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a characteristic.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'SEG' => 
  array (
    'attributes' => 
    array (
      'id' => 'SEG',
      'name' => 'segmentIdentification',
      'desc' => 'To identify a segment and give its class and maintenance operation.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9166',
          'required' => 'true',
          'name' => 'segmentTagIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the tag of a segment.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1507',
          'name' => 'designatedClassCode',
          'usage' => 'B',
          'desc' => 'Code specifying a designated class.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'SEL' => 
  array (
    'attributes' => 
    array (
      'id' => 'SEL',
      'name' => 'sealNumber',
      'desc' => 'To specify the seal number or a range of seal numbers.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9308',
          'name' => 'transportUnitSealIdentifier',
          'usage' => 'B',
          'desc' => 'The identification number of a seal affixed to a transport unit.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C215',
          'name' => 'sealIssuer',
          'desc' => 'Identification of the issuer of a seal on equipment either by code or by name.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9303',
              'name' => 'sealingPartyNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying the name of the sealing party.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9302',
              'name' => 'sealingPartyName',
              'usage' => 'B',
              'desc' => 'Name of the sealing party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4517',
          'name' => 'sealConditionCode',
          'usage' => 'B',
          'desc' => 'Code specifying the condition of a seal.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C208',
          'name' => 'identityNumberRange',
          'desc' => 'Goods item identification numbers, start and end of consecutively numbered range.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4525',
          'name' => 'sealTypeCode',
          'usage' => 'B',
          'desc' => 'To specify a type of seal.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'SEQ' => 
  array (
    'attributes' => 
    array (
      'id' => 'SEQ',
      'name' => 'sequenceDetails',
      'desc' => 'To provide details relating to the sequence.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1229',
          'name' => 'actionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the action to be taken or already taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C286',
          'name' => 'sequenceInformation',
          'desc' => 'Identification of a sequence and source for sequencing.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'required' => 'true',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1159',
              'name' => 'sequenceIdentifierSourceCode',
              'usage' => 'B',
              'desc' => 'Code specifying the source of a sequence identifier.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'SFI' => 
  array (
    'attributes' => 
    array (
      'id' => 'SFI',
      'name' => 'safetyInformation',
      'desc' => 'To identify regulatory safety information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7164',
          'required' => 'true',
          'name' => 'hierarchicalStructureLevelIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a level within a hierarchical structure.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C814',
          'name' => 'safetySection',
          'desc' => 'To identify the safety section to which information relates.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4046',
              'required' => 'true',
              'name' => 'safetySectionNumber',
              'usage' => 'B',
              'desc' => 'To specify a safety section by number.',
              'type' => 'n',
              'maxlength' => '2',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4044',
              'name' => 'safetySectionName',
              'usage' => 'B',
              'desc' => 'Name of a safety section.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C815',
          'name' => 'additionalSafetyInformation',
          'desc' => 'To identify additional safety information.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4039',
              'required' => 'true',
              'name' => 'additionalSafetyInformationDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying information relating to additional safety.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4038',
              'name' => 'additionalSafetyInformationDescription',
              'usage' => 'B',
              'desc' => 'Free form description of information relating to additional safety.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'SGP' => 
  array (
    'attributes' => 
    array (
      'id' => 'SGP',
      'name' => 'splitGoodsPlacement',
      'desc' => 'To specify the placement of goods in relation to equipment.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C237',
          'required' => 'true',
          'name' => 'equipmentIdentification',
          'desc' => 'Marks (letters/numbers) identifying equipment.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8260',
              'name' => 'equipmentIdentifier',
              'usage' => 'B',
              'desc' => 'To identify equipment.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3207',
              'name' => 'countryIdentifier',
              'usage' => 'C',
              'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7224',
          'name' => 'packageQuantity',
          'usage' => 'B',
          'desc' => 'To specify the number of packages.',
          'type' => 'n',
          'maxlength' => '8',
        ),
      ),
    ),
  ),
  'SGU' => 
  array (
    'attributes' => 
    array (
      'id' => 'SGU',
      'name' => 'segmentUsageDetails',
      'desc' => 'To specify the details of the usage of a segment within a message type structure.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9166',
          'required' => 'true',
          'name' => 'segmentTagIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the tag of a segment.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7299',
          'name' => 'requirementDesignatorCode',
          'usage' => 'C',
          'desc' => 'Code specifying the requirement designator.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6176',
          'name' => 'occurrencesMaximumNumber',
          'usage' => 'B',
          'desc' => 'To specify the maximum number of occurrences.',
          'type' => 'n',
          'maxlength' => '7',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7168',
          'name' => 'levelNumber',
          'usage' => 'B',
          'desc' => 'Number identifying a level.',
          'type' => 'n',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1050',
          'name' => 'sequencePositionIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a position in a sequence.',
          'type' => 'an',
          'maxlength' => '10',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1049',
          'name' => 'messageSectionCode',
          'usage' => 'B',
          'desc' => 'Code specifying a section of a message.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'SPR' => 
  array (
    'attributes' => 
    array (
      'id' => 'SPR',
      'name' => 'organisationClassificationDetails',
      'desc' => 'To provide classification details relating to the activities of an organisation.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7293',
          'required' => 'true',
          'name' => 'sectorAreaIdentificationCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying identification of a subject area.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3079',
          'name' => 'organisationClassificationCode',
          'usage' => 'B',
          'desc' => 'Code specifying the classification of an organisation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C844',
          'name' => 'organisationClassificationDetail',
          'desc' => 'To specify details regarding the class of an organisation.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3083',
              'name' => 'organisationalClassNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying a class of organisation.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3082',
              'name' => 'organisationalClassName',
              'usage' => 'B',
              'desc' => 'Name of a class of organisation.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
    ),
  ),
  'SPS' => 
  array (
    'attributes' => 
    array (
      'id' => 'SPS',
      'name' => 'samplingParametersForSummaryStatistics',
      'desc' => 'To define the sampling parameters associated with summary statistics reported.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C526',
          'name' => 'frequencyDetails',
          'desc' => 'Number of samples collected per specified unit of measure.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6071',
              'required' => 'true',
              'name' => 'frequencyCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying the frequency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6072',
              'name' => 'frequencyRate',
              'usage' => 'C',
              'desc' => 'The number of repetitions in a given time.',
              'type' => 'n',
              'maxlength' => '9',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6074',
          'name' => 'confidencePercent',
          'usage' => 'B',
          'desc' => 'To specify the confidence that a true value falls within a certain confidence interval expressed as a percentage.',
          'type' => 'n',
          'maxlength' => '6',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C512',
          'name' => 'sizeDetails',
          'desc' => 'Information about the number of observations.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6173',
              'name' => 'sizeTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying a type of size.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6174',
              'name' => 'sizeMeasure',
              'usage' => 'B',
              'desc' => 'To specify a magnitude.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C512',
          'name' => 'sizeDetails',
          'desc' => 'Information about the number of observations.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6173',
              'name' => 'sizeTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying a type of size.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6174',
              'name' => 'sizeMeasure',
              'usage' => 'B',
              'desc' => 'To specify a magnitude.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C512',
          'name' => 'sizeDetails',
          'desc' => 'Information about the number of observations.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6173',
              'name' => 'sizeTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying a type of size.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6174',
              'name' => 'sizeMeasure',
              'usage' => 'B',
              'desc' => 'To specify a magnitude.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C512',
          'name' => 'sizeDetails',
          'desc' => 'Information about the number of observations.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6173',
              'name' => 'sizeTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying a type of size.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6174',
              'name' => 'sizeMeasure',
              'usage' => 'B',
              'desc' => 'To specify a magnitude.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C512',
          'name' => 'sizeDetails',
          'desc' => 'Information about the number of observations.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6173',
              'name' => 'sizeTypeCodeQualifier',
              'usage' => 'B',
              'desc' => 'Code qualifying a type of size.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6174',
              'name' => 'sizeMeasure',
              'usage' => 'B',
              'desc' => 'To specify a magnitude.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
        ),
      ),
    ),
  ),
  'STA' => 
  array (
    'attributes' => 
    array (
      'id' => 'STA',
      'name' => 'statistics',
      'desc' => 'To transmit summary statistics related to a specified collection of test result values.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6331',
          'required' => 'true',
          'name' => 'statisticTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the type of a statistic.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C527',
          'name' => 'statisticalDetails',
          'desc' => 'Specifications related to statistical measurements.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6314',
              'name' => 'measure',
              'usage' => 'C',
              'desc' => 'To specify the value of a measurement.',
              'type' => 'an',
              'maxlength' => '18',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6313',
              'name' => 'measuredAttributeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the attribute measured.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6321',
              'name' => 'measurementSignificanceCode',
              'usage' => 'C',
              'desc' => 'Code specifying the significance of a measurement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'STC' => 
  array (
    'attributes' => 
    array (
      'id' => 'STC',
      'name' => 'statisticalConcept',
      'desc' => 'To specify a statistical concept.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C785',
          'required' => 'true',
          'name' => 'statisticalConceptIdentification',
          'desc' => 'The identification of a statistical concept.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6434',
              'required' => 'true',
              'name' => 'statisticalConceptIdentifier',
              'usage' => 'B',
              'desc' => 'Free form identification of a statistical concept.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C082',
          'name' => 'partyIdentificationDetails',
          'desc' => 'Identification of a transaction party by code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'required' => 'true',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'STG' => 
  array (
    'attributes' => 
    array (
      'id' => 'STG',
      'name' => 'stages',
      'desc' => 'To provide information related to the kind of stage in a process, the number of stages and the actual stage.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9421',
          'required' => 'true',
          'name' => 'processStageCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying a stage in a process.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6426',
          'name' => 'processStagesQuantity',
          'usage' => 'B',
          'desc' => 'Count of the number of process stages.',
          'type' => 'n',
          'maxlength' => '2',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6428',
          'name' => 'processStagesActualQuantity',
          'usage' => 'B',
          'desc' => 'Count of  the actual number of process stages.',
          'type' => 'n',
          'maxlength' => '2',
        ),
      ),
    ),
  ),
  'STS' => 
  array (
    'attributes' => 
    array (
      'id' => 'STS',
      'name' => 'status',
      'desc' => 'To specify the status of an object or service, including its category and the reason(s) for the status.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C601',
          'name' => 'statusCategory',
          'desc' => 'To specify the category of the status.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9015',
              'required' => 'true',
              'name' => 'statusCategoryCode',
              'usage' => 'B',
              'desc' => 'Code specifying the category of a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C555',
          'name' => 'status',
          'desc' => 'To specify a status.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'required' => 'true',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4404',
              'name' => 'statusDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a status.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C556',
          'name' => 'statusReason',
          'desc' => 'To specify the reason for a status.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9013',
              'required' => 'true',
              'name' => 'statusReasonDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the reason for a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9012',
              'name' => 'statusReasonDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the status reason.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C556',
          'name' => 'statusReason',
          'desc' => 'To specify the reason for a status.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9013',
              'required' => 'true',
              'name' => 'statusReasonDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the reason for a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9012',
              'name' => 'statusReasonDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the status reason.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C556',
          'name' => 'statusReason',
          'desc' => 'To specify the reason for a status.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9013',
              'required' => 'true',
              'name' => 'statusReasonDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the reason for a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9012',
              'name' => 'statusReasonDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the status reason.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C556',
          'name' => 'statusReason',
          'desc' => 'To specify the reason for a status.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9013',
              'required' => 'true',
              'name' => 'statusReasonDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the reason for a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9012',
              'name' => 'statusReasonDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the status reason.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C556',
          'name' => 'statusReason',
          'desc' => 'To specify the reason for a status.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9013',
              'required' => 'true',
              'name' => 'statusReasonDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the reason for a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9012',
              'name' => 'statusReasonDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the status reason.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
    ),
  ),
  'TAX' => 
  array (
    'attributes' => 
    array (
      'id' => 'TAX',
      'name' => 'dutytaxfeeDetails',
      'desc' => 'To specify relevant duty/tax/fee information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5283',
          'required' => 'true',
          'name' => 'dutyOrTaxOrFeeFunctionCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the function of a duty or tax or fee.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C241',
          'name' => 'dutytaxfeeType',
          'desc' => 'Code and/or name identifying duty, tax or fee.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5153',
              'name' => 'dutyOrTaxOrFeeTypeNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying a type of duty, tax or fee.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5152',
              'name' => 'dutyOrTaxOrFeeTypeName',
              'usage' => 'B',
              'desc' => 'Name of a type of duty, tax or fee.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C533',
          'name' => 'dutytaxfeeAccountDetail',
          'desc' => 'Indication of account reference for duties, taxes and/or fees.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5289',
              'required' => 'true',
              'name' => 'dutyOrTaxOrFeeAccountCode',
              'usage' => 'B',
              'desc' => 'Code specifying a duty or tax or fee account.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C243',
          'name' => 'dutytaxfeeDetail',
          'desc' => 'Rate of duty/tax/fee applicable to commodities or of tax applicable to services.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5279',
              'name' => 'dutyOrTaxOrFeeRateCode',
              'usage' => 'B',
              'desc' => 'Code specifying a rate of a duty or tax or fee.',
              'type' => 'an',
              'maxlength' => '7',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5278',
              'name' => 'dutyOrTaxOrFeeRate',
              'usage' => 'C',
              'desc' => 'Rate of a duty or tax or fee.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5273',
              'name' => 'dutyOrTaxOrFeeRateBasisCode',
              'usage' => 'B',
              'desc' => 'Code specifying the basis for a duty or tax or fee rate.',
              'type' => 'an',
              'maxlength' => '12',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5305',
          'name' => 'dutyOrTaxOrFeeCategoryCode',
          'usage' => 'B',
          'desc' => 'Code specifying a duty or tax or fee category.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3446',
          'name' => 'partyTaxIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a number assigned to a party by a tax authority.',
          'type' => 'an',
          'maxlength' => '20',
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1227',
          'name' => 'calculationSequenceCode',
          'usage' => 'B',
          'desc' => 'Code specifying a calculation sequence.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      7 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5307',
          'name' => 'taxOrDutyOrFeePaymentDueDateCode',
          'usage' => 'B',
          'desc' => 'A code indicating when the duty, tax, or fee payment will be due.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'TCC' => 
  array (
    'attributes' => 
    array (
      'id' => 'TCC',
      'name' => 'chargerateCalculations',
      'desc' => 'To specify charges.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C200',
          'name' => 'charge',
          'desc' => 'Identification of a charge by code and/or by name.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8023',
              'name' => 'freightAndOtherChargesDescriptionIdentifier',
              'usage' => 'B',
              'desc' => 'Code identifying freight and other charges.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8022',
              'name' => 'freightAndOtherChargesDescription',
              'usage' => 'B',
              'desc' => 'Free form description of freight and other charges.',
              'type' => 'an',
              'maxlength' => '26',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4237',
              'name' => 'paymentArrangementCode',
              'usage' => 'B',
              'desc' => 'Code specifying the arrangements for a payment.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7140',
              'name' => 'itemIdentifier',
              'usage' => 'C',
              'desc' => 'To identify an item.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C203',
          'name' => 'ratetariffClass',
          'desc' => 'Identification of the applicable rate/tariff class.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5243',
              'required' => 'true',
              'name' => 'rateOrTariffClassDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an applicable rate or tariff class.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5242',
              'name' => 'rateOrTariffClassDescription',
              'usage' => 'B',
              'desc' => 'Free form description of an applicable rate or tariff class.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5275',
              'name' => 'supplementaryRateOrTariffCode',
              'usage' => 'B',
              'desc' => 'Code specifying a supplementary rate or tariff.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5275',
              'name' => 'supplementaryRateOrTariffCode',
              'usage' => 'B',
              'desc' => 'Code specifying a supplementary rate or tariff.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          9 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C528',
          'name' => 'commodityrateDetail',
          'desc' => 'Identification of commodity/rates.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7357',
              'name' => 'commodityIdentificationCode',
              'usage' => 'B',
              'desc' => 'Code identifying a commodity for Customs, transport or statistical purposes (generic term).',
              'type' => 'an',
              'maxlength' => '18',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C554',
          'name' => 'ratetariffClassDetail',
          'desc' => 'Identification of the applicable rate/tariff class.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5243',
              'name' => 'rateOrTariffClassDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an applicable rate or tariff class.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'TDT' => 
  array (
    'attributes' => 
    array (
      'id' => 'TDT',
      'name' => 'transportInformation',
      'desc' => 'To specify information regarding the transport such as mode of transport, means of transport, its conveyance reference number and the identification of the means of transport.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8051',
          'required' => 'true',
          'name' => 'transportStageCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying a specific stage of transport.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8028',
          'name' => 'meansOfTransportJourneyIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a journey of a means of transport.',
          'type' => 'an',
          'maxlength' => '17',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C220',
          'name' => 'modeOfTransport',
          'desc' => 'Method of transport code or name. Code preferred.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8067',
              'name' => 'transportModeNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying the name of a mode of transport.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8066',
              'name' => 'transportModeName',
              'usage' => 'B',
              'desc' => 'Name of a mode of transport.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C001',
          'name' => 'transportMeans',
          'desc' => 'Code and/or name identifying the type of means of transport.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8179',
              'name' => 'transportMeansDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the means of transport.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8178',
              'name' => 'transportMeansDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the means of transport.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C040',
          'name' => 'carrier',
          'desc' => 'Identification of a carrier by code and/or by name. Code preferred.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3127',
              'name' => 'carrierIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a carrier.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3126',
              'name' => 'carrierName',
              'usage' => 'B',
              'desc' => 'Name of a carrier.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8101',
          'name' => 'transitDirectionIndicatorCode',
          'usage' => 'B',
          'desc' => 'Code specifying the direction of transport.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      6 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C401',
          'name' => 'excessTransportationInformation',
          'desc' => 'To provide details of reason for, and responsibility for, use of transportation other than normally utilized.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8457',
              'required' => 'true',
              'name' => 'excessTransportationReasonCode',
              'usage' => 'B',
              'desc' => 'Code specifying the reason for excess transportation.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8459',
              'required' => 'true',
              'name' => 'excessTransportationResponsibilityCode',
              'usage' => 'B',
              'desc' => 'Code specifying the responsibility for excess transportation.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7130',
              'name' => 'customerShipmentAuthorisationIdentifier',
              'usage' => 'B',
              'desc' => 'To identify the authorisation to ship issued by the customer.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
        ),
      ),
      7 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C222',
          'name' => 'transportIdentification',
          'desc' => 'Code and/or name identifying the means of transport.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8213',
              'name' => 'transportMeansIdentificationNameIdentifier',
              'usage' => 'B',
              'desc' => 'Identifies the name of the transport means.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8212',
              'name' => 'transportMeansIdentificationName',
              'usage' => 'B',
              'desc' => 'Name identifying a means of transport.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8453',
              'name' => 'transportMeansNationalityCode',
              'usage' => 'B',
              'desc' => 'Code specifying the nationality of a means of transport.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      8 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8281',
          'name' => 'transportMeansOwnershipIndicatorCode',
          'usage' => 'B',
          'desc' => 'Code indicating the ownership of a means of transport.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'TEM' => 
  array (
    'attributes' => 
    array (
      'id' => 'TEM',
      'name' => 'testMethod',
      'desc' => 'To describe the nature of the test performed.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C244',
          'name' => 'testMethod',
          'desc' => 'Specification of the test method employed.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4415',
              'name' => 'testMethodIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a method of testing.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4416',
              'name' => 'testDescription',
              'usage' => 'B',
              'desc' => 'Free form description of the test.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4419',
          'name' => 'testAdministrationMethodCode',
          'usage' => 'B',
          'desc' => 'Code specifying the method of the administration of a test.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3077',
          'name' => 'testMediumCode',
          'usage' => 'B',
          'desc' => 'Code specifying the medium on which a test was or is to be applied.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6311',
          'name' => 'measurementPurposeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the purpose of the measurement.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7188',
          'name' => 'testMethodRevisionIdentifier',
          'usage' => 'B',
          'desc' => 'To identify the revision of a test method.',
          'type' => 'an',
          'maxlength' => '30',
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C515',
          'name' => 'testReason',
          'desc' => 'To identify the reason for the test as specified.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4425',
              'name' => 'testReasonNameCode',
              'usage' => 'B',
              'desc' => 'Code specifying the name of the reason for performing a test.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4424',
              'name' => 'testReasonName',
              'usage' => 'B',
              'desc' => 'Name of the reason for performing a test.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'TMD' => 
  array (
    'attributes' => 
    array (
      'id' => 'TMD',
      'name' => 'transportMovementDetails',
      'desc' => 'To specify operational transport movement details for a goods item or equipment (which may differ from the contractual conditions).',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C219',
          'name' => 'movementType',
          'desc' => 'Description of type of service for movement of cargo.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8335',
              'name' => 'movementTypeDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying a type of movement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8334',
              'name' => 'movementTypeDescription',
              'usage' => 'B',
              'desc' => 'Free form description of a type of movement.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8332',
          'name' => 'equipmentPlanDescription',
          'usage' => 'B',
          'desc' => 'Free form description of the equipment plan.',
          'type' => 'an',
          'maxlength' => '26',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8341',
          'name' => 'haulageArrangementsCode',
          'usage' => 'B',
          'desc' => 'Code specifying the arrangement for the haulage of goods.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'TMP' => 
  array (
    'attributes' => 
    array (
      'id' => 'TMP',
      'name' => 'temperature',
      'desc' => 'To specify the temperature setting.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6245',
          'required' => 'true',
          'name' => 'temperatureTypeCodeQualifier',
          'usage' => 'B',
          'desc' => 'Code qualifying the type of a temperature.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C239',
          'name' => 'temperatureSetting',
          'desc' => 'The temperature under which the goods are (to be) stored or shipped.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6246',
              'name' => 'temperatureDegree',
              'usage' => 'B',
              'desc' => 'To specify the value of a temperature.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
        ),
      ),
    ),
  ),
  'TOD' => 
  array (
    'attributes' => 
    array (
      'id' => 'TOD',
      'name' => 'termsOfDeliveryOrTransport',
      'desc' => 'To specify terms of delivery or transport.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4055',
          'name' => 'deliveryOrTransportTermsFunctionCode',
          'usage' => 'B',
          'desc' => 'Code specifying the function of delivery or transport terms.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4215',
          'name' => 'transportChargesPaymentMethodCode',
          'usage' => 'B',
          'desc' => 'Code specifying the payment method for transport charges.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C100',
          'name' => 'termsOfDeliveryOrTransport',
          'desc' => 'Terms of delivery or transport code from a specified source.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4053',
              'name' => 'deliveryOrTransportTermsDescriptionCode',
              'usage' => 'B',
              'desc' => 'Code specifying the delivery or transport terms.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4052',
              'name' => 'deliveryOrTransportTermsDescription',
              'usage' => 'B',
              'desc' => 'Free form description of delivery or transport terms.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4052',
              'name' => 'deliveryOrTransportTermsDescription',
              'usage' => 'B',
              'desc' => 'Free form description of delivery or transport terms.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
    ),
  ),
  'TPL' => 
  array (
    'attributes' => 
    array (
      'id' => 'TPL',
      'name' => 'transportPlacement',
      'desc' => 'To specify placement of goods or equipment in relation to the transport used. The segment serves as a pointer to the TDT segment group.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C222',
          'required' => 'true',
          'name' => 'transportIdentification',
          'desc' => 'Code and/or name identifying the means of transport.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8213',
              'name' => 'transportMeansIdentificationNameIdentifier',
              'usage' => 'B',
              'desc' => 'Identifies the name of the transport means.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8212',
              'name' => 'transportMeansIdentificationName',
              'usage' => 'B',
              'desc' => 'Name identifying a means of transport.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8453',
              'name' => 'transportMeansNationalityCode',
              'usage' => 'B',
              'desc' => 'Code specifying the nationality of a means of transport.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'TRU' => 
  array (
    'attributes' => 
    array (
      'id' => 'TRU',
      'name' => 'technicalRules',
      'desc' => 'A segment specifying technical rules.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7402',
          'required' => 'true',
          'name' => 'objectIdentifier',
          'usage' => 'C',
          'desc' => 'Code specifying the unique identity of an object.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1056',
          'name' => 'versionIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a version.',
          'type' => 'an',
          'maxlength' => '9',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1058',
          'name' => 'releaseIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a release.',
          'type' => 'an',
          'maxlength' => '9',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7175',
          'name' => 'rulePartIdentifier',
          'usage' => 'B',
          'desc' => 'To identify a part of a rule.',
          'type' => 'an',
          'maxlength' => '7',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3055',
          'name' => 'codeListResponsibleAgencyCode',
          'usage' => 'C',
          'desc' => 'Code specifying the agency responsible for a code list.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'TSR' => 
  array (
    'attributes' => 
    array (
      'id' => 'TSR',
      'name' => 'transportServiceRequirements',
      'desc' => 'To specify the contract and carriage conditions and service and priority requirements for the transport.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C536',
          'name' => 'contractAndCarriageCondition',
          'desc' => 'To identify a contract and carriage condition.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4065',
              'required' => 'true',
              'name' => 'contractAndCarriageConditionCode',
              'usage' => 'B',
              'desc' => 'Code to identify the conditions of contract and carriage.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C233',
          'name' => 'service',
          'desc' => 'To identify a service (which may constitute an additional component to a basic contract).',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7273',
              'required' => 'true',
              'name' => 'serviceRequirementCode',
              'usage' => 'C',
              'desc' => 'Code specifying a service requirement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7273',
              'name' => 'serviceRequirementCode',
              'usage' => 'C',
              'desc' => 'Code specifying a service requirement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C537',
          'name' => 'transportPriority',
          'desc' => 'To indicate the priority of requested transport service.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4219',
              'required' => 'true',
              'name' => 'transportServicePriorityCode',
              'usage' => 'B',
              'desc' => 'Code specifying the priority of a transport service.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C703',
          'name' => 'natureOfCargo',
          'desc' => 'Rough classification of a type of cargo.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7085',
              'required' => 'true',
              'name' => 'cargoTypeClassificationCode',
              'usage' => 'B',
              'desc' => 'Code specifying the classification of a type of cargo.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'VLI' => 
  array (
    'attributes' => 
    array (
      'id' => 'VLI',
      'name' => 'valueListIdentification',
      'desc' => 'To identify a coded or non coded value list.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C780',
          'required' => 'true',
          'name' => 'valueListIdentification',
          'desc' => 'The identification of a coded or non coded value list.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1518',
              'required' => 'true',
              'name' => 'valueListIdentifier',
              'usage' => 'B',
              'desc' => 'To identify a coded or non-coded list of values.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C082',
          'name' => 'partyIdentificationDetails',
          'desc' => 'Identification of a transaction party by code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'required' => 'true',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1514',
          'name' => 'valueListName',
          'usage' => 'B',
          'desc' => 'Name of a coded or non-coded list of values.',
          'type' => 'an',
          'maxlength' => '70',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1507',
          'name' => 'designatedClassCode',
          'usage' => 'B',
          'desc' => 'Code specifying a designated class.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1505',
          'name' => 'valueListTypeCode',
          'usage' => 'B',
          'desc' => 'Code specifying a type of value list.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      6 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'C240',
          'name' => 'characteristicDescription',
          'desc' => 'To provide a description of a characteristic.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7037',
              'required' => 'true',
              'name' => 'characteristicDescriptionCode',
              'usage' => 'C',
              'desc' => 'A code specifying a characteristic.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7036',
              'name' => 'characteristicDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a characteristic.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7036',
              'name' => 'characteristicDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a characteristic.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      7 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4513',
          'name' => 'maintenanceOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a maintenance operation.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'AAI' => 
  array (
    'attributes' => 
    array (
      'id' => 'AAI',
      'name' => 'accommodationAllocationInformation',
      'desc' => 'To specify the references, the type and the characteristic of accommodations allocated as a result of a reservation request.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E997',
          'required' => 'true',
          'name' => 'accommodationAllocationInformation',
          'desc' => 'To specify references, type and characteristics of accommodations allocated.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1154',
              'required' => 'true',
              'name' => 'referenceIdentifier',
              'usage' => 'C',
              'desc' => 'Identifies a reference.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9143',
              'name' => 'relationshipDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a relationship.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4187',
              'name' => 'specialRequirementTypeCode',
              'usage' => 'I',
              'desc' => 'Code specifying a type of special requirement.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7111',
              'name' => 'characteristicValueDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the value of a characteristic.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4184',
              'name' => 'specialRequirementDescription',
              'usage' => 'I',
              'desc' => 'Free form description of a special requirement.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
        ),
      ),
    ),
  ),
  'ADI' => 
  array (
    'attributes' => 
    array (
      'id' => 'ADI',
      'name' => 'healthCareClaimAdjudicationInformation',
      'desc' => 'To provide adjudication information for all services in a health care claim.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E206',
          'required' => 'true',
          'name' => 'objectIdentification',
          'desc' => 'The identification of an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E021',
          'name' => 'service',
          'desc' => 'To identify a service and any modifications.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7135',
              'required' => 'true',
              'name' => 'productIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a product.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9629',
              'name' => 'procedureModificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the procedure modification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9629',
              'name' => 'procedureModificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the procedure modification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9629',
              'name' => 'procedureModificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the procedure modification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9629',
              'name' => 'procedureModificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the procedure modification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1229',
          'name' => 'actionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the action to be taken or already taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E017',
          'name' => 'monetaryAmount',
          'desc' => 'Amount of goods or services stated as a monetary amount in a specified currency.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5025',
              'name' => 'monetaryAmountTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of monetary amount.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6343',
              'name' => 'currencyTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of currency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6060',
          'name' => 'quantity',
          'usage' => 'C',
          'desc' => 'Alphanumeric representation of a quantity.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E030',
          'name' => 'adjustmentInformation',
          'desc' => 'To identify the adjustment category, reason and related monetary amount.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9619',
              'required' => 'true',
              'name' => 'adjustmentCategoryCode',
              'usage' => 'I',
              'desc' => 'Code specifying the general category of adjustment.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4465',
              'required' => 'true',
              'name' => 'adjustmentReasonDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the adjustment reason.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9620',
          'name' => 'policyLimitationIdentifier',
          'usage' => 'I',
          'desc' => 'Code specifying a policy limitation.',
          'type' => 'an',
          'maxlength' => '10',
        ),
      ),
      7 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5389',
          'name' => 'productGroupNameCode',
          'usage' => 'C',
          'desc' => 'Code specifying the name of a product group.',
          'type' => 'an',
          'maxlength' => '25',
        ),
      ),
      8 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E507',
          'name' => 'datetimeperiod',
          'desc' => 'Date and/or time, or period relevant to the specified date/time/period type.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2005',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the function of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      9 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9639',
          'name' => 'diagnosisCategoryCode',
          'usage' => 'I',
          'desc' => 'Code specifying a diagnosis category.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      10 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5482',
          'name' => 'percentage',
          'usage' => 'C',
          'desc' => 'To specify a percentage.',
          'type' => 'n',
          'maxlength' => '10',
        ),
      ),
    ),
  ),
  'ADS' => 
  array (
    'attributes' => 
    array (
      'id' => 'ADS',
      'name' => 'address',
      'desc' => 'To specify an address.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E817',
          'name' => 'addressUsage',
          'desc' => 'To describe the usage of an address.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3299',
              'name' => 'addressPurposeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the purpose of an address.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3131',
              'name' => 'addressTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the type of an address.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3475',
              'name' => 'addressStatusCode',
              'usage' => 'C',
              'desc' => 'Code specifying the status of an address.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E001',
          'name' => 'addressDetails',
          'desc' => 'To specify the details of an address.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3477',
              'required' => 'true',
              'name' => 'addressFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the format of an address.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3286',
              'required' => 'true',
              'name' => 'addressComponentDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the component of an address.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3286',
              'name' => 'addressComponentDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the component of an address.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3286',
              'name' => 'addressComponentDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the component of an address.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3286',
              'name' => 'addressComponentDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the component of an address.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3286',
              'name' => 'addressComponentDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the component of an address.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3286',
              'name' => 'addressComponentDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the component of an address.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3164',
          'name' => 'cityName',
          'usage' => 'C',
          'desc' => 'Name of a city.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3251',
          'name' => 'postalIdentificationCode',
          'usage' => 'C',
          'desc' => 'Code specifying the postal zone or address.',
          'type' => 'an',
          'maxlength' => '17',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3207',
          'name' => 'countryIdentifier',
          'usage' => 'C',
          'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E819',
          'name' => 'countrySubentityDetails',
          'desc' => 'To specify a part of a country (eg county or part of a city).',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3229',
              'name' => 'countrySubdivisionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a country subdivision, such as state, canton, county, prefecture.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3228',
              'name' => 'countrySubdivisionName',
              'usage' => 'C',
              'desc' => 'Name of a country subdivision, such as state, canton, county, prefecture.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E517',
          'name' => 'locationIdentification',
          'desc' => 'Identification of a location by code or name.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3224',
              'name' => 'locationName',
              'usage' => 'C',
              'desc' => 'Name of the location.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
    ),
  ),
  'ALS' => 
  array (
    'attributes' => 
    array (
      'id' => 'ALS',
      'name' => 'additionalLocationInformation',
      'desc' => 'To specify the type of location, the actual location in coded and full name text, and the country code of the location.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3227',
          'required' => 'true',
          'name' => 'locationFunctionCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code identifying the function of a location.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E975',
          'required' => 'true',
          'name' => 'location',
          'desc' => 'To identify a location.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3224',
              'name' => 'locationName',
              'usage' => 'C',
              'desc' => 'Name of the location.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3207',
              'name' => 'countryIdentifier',
              'usage' => 'C',
              'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3227',
              'name' => 'locationFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code identifying the function of a location.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6000',
          'name' => 'latitudeDegree',
          'usage' => 'C',
          'desc' => 'To specify  the angular distance, measured in degrees, minutes, and seconds, north or south from the equator.',
          'type' => 'an',
          'maxlength' => '10',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6002',
          'name' => 'longitudeDegree',
          'usage' => 'C',
          'desc' => 'To specify the value of longitude i.e. the angular distance east or west on the earth\'s surface, measured by the angle and expressed in degrees, minutes, and seconds, which the meridian passing through a particular place makes with a standard or prime meridian.',
          'type' => 'an',
          'maxlength' => '11',
        ),
      ),
    ),
  ),
  'APD' => 
  array (
    'attributes' => 
    array (
      'id' => 'APD',
      'name' => 'additionalTransportDetails',
      'desc' => 'To convey additional information concerning a means of transport.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E961',
          'name' => 'transportDetails',
          'desc' => 'Details describing a specific means of transport.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8179',
              'name' => 'transportMeansDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the means of transport.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8216',
              'name' => 'journeyStopsQuantity',
              'usage' => 'I',
              'desc' => 'To specify the number of stops in a journey.',
              'type' => 'n',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2162',
              'name' => 'journeyLegDurationQuantity',
              'usage' => 'I',
              'desc' => 'To specify the elapsed time between departure and arrival for a leg of a journey.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5482',
              'name' => 'percentage',
              'usage' => 'C',
              'desc' => 'To specify a percentage.',
              'type' => 'n',
              'maxlength' => '10',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2160',
              'name' => 'daysOfWeekSetIdentifier',
              'usage' => 'I',
              'desc' => 'String data representation of days of the week (Monday = 1).',
              'type' => 'an',
              'maxlength' => '7',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8215',
              'name' => 'transportMeansChangeIndicatorCode',
              'usage' => 'I',
              'desc' => 'Code indicating a change of means of transport.',
              'type' => 'an',
              'length' => '1',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          9 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E962',
          'name' => 'terminalInformation',
          'desc' => 'To specify departure or arrival information relative to a terminal.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3463',
              'name' => 'gateIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a gate.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3223',
              'name' => 'firstRelatedLocationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a first related location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3223',
              'name' => 'firstRelatedLocationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a first related location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E963',
          'name' => 'distanceOrTimeDetails',
          'desc' => 'Information about distance or duration.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6314',
              'name' => 'measure',
              'usage' => 'C',
              'desc' => 'To specify the value of a measurement.',
              'type' => 'an',
              'maxlength' => '18',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E964',
          'name' => 'travellerTimeDetails',
          'desc' => 'Gate departure time, gate arrival time, and check-in date and time, in this sequence relevant to a traveller.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2156',
              'name' => 'checkinTime',
              'usage' => 'I',
              'desc' => 'To specifiy a check-in date and time.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E965',
          'name' => 'facilities',
          'desc' => 'To convey information about the facilities of a service.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9039',
              'name' => 'facilityTypeDescriptionCode',
              'usage' => 'I',
              'desc' => 'Code specifying the facility type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9038',
              'name' => 'facilityTypeDescription',
              'usage' => 'I',
              'desc' => 'Free form description of the facility type.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7133',
              'name' => 'productDetailsTypeCodeQualifier',
              'usage' => 'I',
              'desc' => 'Code qualifying a type of product details.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7037',
              'name' => 'characteristicDescriptionCode',
              'usage' => 'C',
              'desc' => 'A code specifying a characteristic.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
        ),
      ),
    ),
  ),
  'ASD' => 
  array (
    'attributes' => 
    array (
      'id' => 'ASD',
      'name' => 'serviceDetails',
      'desc' => 'To specify date, time, location and additional characteristic information related to a service.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E959',
          'required' => 'true',
          'name' => 'additionalServiceDetails',
          'desc' => 'To specify additional service details, such as the reserved date, starting time, ending time and location information.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7161',
              'required' => 'true',
              'name' => 'specialServiceDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a special service.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3224',
              'name' => 'locationName',
              'usage' => 'C',
              'desc' => 'Name of the location.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3227',
              'name' => 'locationFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code identifying the function of a location.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7037',
              'name' => 'characteristicDescriptionCode',
              'usage' => 'C',
              'desc' => 'A code specifying a characteristic.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3223',
              'name' => 'firstRelatedLocationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a first related location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          9 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3207',
              'name' => 'countryIdentifier',
              'usage' => 'C',
              'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          10 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7160',
              'name' => 'specialServiceDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a special service.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          11 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7036',
              'name' => 'characteristicDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a characteristic.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          12 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1229',
              'name' => 'actionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the action to be taken or already taken.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          13 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3233',
              'name' => 'secondRelatedLocationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a second related location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          14 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3453',
              'name' => 'languageNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the language name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          15 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6072',
              'name' => 'frequencyRate',
              'usage' => 'C',
              'desc' => 'The number of repetitions in a given time.',
              'type' => 'n',
              'maxlength' => '9',
            ),
          ),
          16 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          17 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          18 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E013',
          'name' => 'dateAndTimeInformation',
          'desc' => 'To specify a date and time, and related text.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2005',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the function of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '2160',
          'name' => 'daysOfWeekSetIdentifier',
          'usage' => 'I',
          'desc' => 'String data representation of days of the week (Monday = 1).',
          'type' => 'an',
          'maxlength' => '7',
        ),
      ),
    ),
  ),
  'ATI' => 
  array (
    'attributes' => 
    array (
      'id' => 'ATI',
      'name' => 'tourInformation',
      'desc' => 'To convey information concerning a tour.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E993',
          'name' => 'tourDetails',
          'desc' => 'To provide details of a tour by code, name of the tour provider, length, number of stops, room occupancy and number of rooms.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7135',
              'name' => 'productIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a product.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6168',
              'name' => 'lengthMeasure',
              'usage' => 'C',
              'desc' => 'To specify the value of a length dimension.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8216',
              'name' => 'journeyStopsQuantity',
              'usage' => 'I',
              'desc' => 'To specify the number of stops in a journey.',
              'type' => 'n',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2160',
              'name' => 'daysOfWeekSetIdentifier',
              'usage' => 'I',
              'desc' => 'String data representation of days of the week (Monday = 1).',
              'type' => 'an',
              'maxlength' => '7',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6350',
              'name' => 'unitsQuantity',
              'usage' => 'C',
              'desc' => 'To specify the number of units.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E994',
          'name' => 'stopoverInformation',
          'desc' => 'To specify location of and number of nights at a stopover.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6350',
              'name' => 'unitsQuantity',
              'usage' => 'C',
              'desc' => 'To specify the number of units.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
        ),
      ),
    ),
  ),
  'ATR' => 
  array (
    'attributes' => 
    array (
      'id' => 'ATR',
      'name' => 'attribute',
      'desc' => 'To identify a specific attribute.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9017',
          'required' => 'true',
          'name' => 'attributeFunctionCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code qualifying an attribute function.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E003',
          'required' => 'true',
          'name' => 'attributeInformation',
          'desc' => 'To identify the type of attribute and the attribute.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9021',
              'required' => 'true',
              'name' => 'attributeTypeDescriptionCode',
              'usage' => 'C',
              'desc' => 'Coded specifying an attribute type.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9018',
              'name' => 'attributeDescription',
              'usage' => 'C',
              'desc' => 'Free form description of an attribute.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
    ),
  ),
  'BCD' => 
  array (
    'attributes' => 
    array (
      'id' => 'BCD',
      'name' => 'benefitAndCoverageDetail',
      'desc' => 'A segment to identify and provide information about benefit and coverage.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5267',
          'required' => 'true',
          'name' => 'serviceTypeCode',
          'usage' => 'I',
          'desc' => 'Code specifying the type of service.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7517',
          'required' => 'true',
          'name' => 'benefitAndCoverageCode',
          'usage' => 'I',
          'desc' => 'Code used to identify the benefit and coverage.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3507',
          'name' => 'benefitCoverageConstituentsCode',
          'usage' => 'I',
          'desc' => 'Code used to identify who is included in the benefit coverage.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '2151',
          'name' => 'periodTypeCode',
          'usage' => 'C',
          'desc' => 'Code specifying the type of period.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E017',
          'name' => 'monetaryAmount',
          'desc' => 'Amount of goods or services stated as a monetary amount in a specified currency.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5025',
              'name' => 'monetaryAmountTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of monetary amount.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6343',
              'name' => 'currencyTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of currency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5482',
          'name' => 'percentage',
          'usage' => 'C',
          'desc' => 'To specify a percentage.',
          'type' => 'n',
          'maxlength' => '10',
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6063',
          'name' => 'quantityTypeCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code qualifying the type of quantity.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      7 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6060',
          'name' => 'quantity',
          'usage' => 'C',
          'desc' => 'Alphanumeric representation of a quantity.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      8 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9607',
          'name' => 'yesOrNoIndicatorCode',
          'usage' => 'I',
          'desc' => 'Code specifying either a yes or no.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      9 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4497',
          'name' => 'insuranceCoverTypeCode',
          'usage' => 'C',
          'desc' => 'Code specifying the meaning of the insurance cover.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      10 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4440',
          'name' => 'freeText',
          'usage' => 'C',
          'desc' => 'Free form text.',
          'type' => 'an',
          'maxlength' => '512',
        ),
      ),
    ),
  ),
  'BLI' => 
  array (
    'attributes' => 
    array (
      'id' => 'BLI',
      'name' => 'billableInformation',
      'desc' => 'To provide billable information for a claim or encounter.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5004',
          'name' => 'monetaryAmount',
          'usage' => 'C',
          'desc' => 'To specify a monetary amount.',
          'type' => 'n',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E029',
          'name' => 'diagnosis',
          'desc' => 'To identify the diagnosis and its type.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7135',
              'required' => 'true',
              'name' => 'productIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a product.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9623',
              'name' => 'diagnosisTypeCode',
              'usage' => 'I',
              'desc' => 'Code specifying the type of diagnosis.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E507',
          'name' => 'datetimeperiod',
          'desc' => 'Date and/or time, or period relevant to the specified date/time/period type.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2005',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the function of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7402',
          'name' => 'objectIdentifier',
          'usage' => 'C',
          'desc' => 'Code specifying the unique identity of an object.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9607',
          'name' => 'yesOrNoIndicatorCode',
          'usage' => 'I',
          'desc' => 'Code specifying either a yes or no.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E028',
          'name' => 'relatedCause',
          'desc' => 'To identify a related cause and the date and location.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9625',
              'name' => 'relatedCauseCode',
              'usage' => 'I',
              'desc' => 'Code specifying a related cause.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3229',
              'name' => 'countrySubdivisionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a country subdivision, such as state, canton, county, prefecture.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
        ),
      ),
    ),
  ),
  'CLT' => 
  array (
    'attributes' => 
    array (
      'id' => 'CLT',
      'name' => 'clearTerminateInformation',
      'desc' => 'To specify information required to undo all or part of the previous actions in a business transaction.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1229',
          'required' => 'true',
          'name' => 'actionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the action to be taken or already taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1225',
          'name' => 'messageFunctionCode',
          'usage' => 'C',
          'desc' => 'Code indicating the function of the message.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4440',
          'name' => 'freeText',
          'usage' => 'C',
          'desc' => 'Free form text.',
          'type' => 'an',
          'maxlength' => '512',
        ),
      ),
    ),
  ),
  'CMN' => 
  array (
    'attributes' => 
    array (
      'id' => 'CMN',
      'name' => 'commissionInformation',
      'desc' => 'To specify information about a commission.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E002',
          'required' => 'true',
          'name' => 'commissionDetails',
          'desc' => 'To specify the commission conditions, amount, currency, party paying, and any related free text.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4439',
              'required' => 'true',
              'name' => 'paymentConditionsCode',
              'usage' => 'C',
              'desc' => 'Code specifying the payment conditions.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1229',
              'name' => 'actionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the action to be taken or already taken.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'CNX' => 
  array (
    'attributes' => 
    array (
      'id' => 'CNX',
      'name' => 'connectionDetails',
      'desc' => 'To specify a connection location, the designated supplier, the associated times, and the travel venue sequence.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E999',
          'name' => 'connectionDetails',
          'desc' => 'To specify a location for connections and stopovers, the designated supplier, associated times, and travel sequence.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3224',
              'name' => 'locationName',
              'usage' => 'C',
              'desc' => 'Name of the location.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3227',
              'name' => 'locationFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code identifying the function of a location.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3207',
              'name' => 'countryIdentifier',
              'usage' => 'C',
              'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
        ),
      ),
    ),
  ),
  'CNY' => 
  array (
    'attributes' => 
    array (
      'id' => 'CNY',
      'name' => 'countryInformation',
      'desc' => 'To specify country and related information, i.e. date and time of summer or winter time transition and related time variation, currency and language(s).',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3207',
          'required' => 'true',
          'name' => 'countryIdentifier',
          'usage' => 'C',
          'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E013',
          'name' => 'dateAndTimeInformation',
          'desc' => 'To specify a date and time, and related text.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2005',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the function of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '2031',
          'name' => 'timeVariationQuantity',
          'usage' => 'I',
          'desc' => 'To specify a time variation.',
          'type' => 'n',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6345',
          'name' => 'currencyIdentificationCode',
          'usage' => 'C',
          'desc' => 'Code specifying a monetary unit.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3453',
          'name' => 'languageNameCode',
          'usage' => 'C',
          'desc' => 'Code specifying the language name.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'CON' => 
  array (
    'attributes' => 
    array (
      'id' => 'CON',
      'name' => 'contactInformation',
      'desc' => 'To specify contact communication numbers and names.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E966',
          'name' => 'contactInformation',
          'desc' => 'To specify communication number, type of number, to whom the number belongs and a related reference number.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3035',
              'required' => 'true',
              'name' => 'partyFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code giving specific meaning to a party.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3148',
              'required' => 'true',
              'name' => 'communicationAddressIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a communication address.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3153',
              'name' => 'communicationMediumTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the type of communication medium.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1154',
              'name' => 'referenceIdentifier',
              'usage' => 'C',
              'desc' => 'Identifies a reference.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
        ),
      ),
    ),
  ),
  'CRI' => 
  array (
    'attributes' => 
    array (
      'id' => 'CRI',
      'name' => 'consumerReferenceInformation',
      'desc' => 'To specify consumer reference information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E967',
          'required' => 'true',
          'name' => 'consumerReferenceIdentification',
          'desc' => 'Identification of consumer references by type, company, number and reference to a traveller.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1153',
              'required' => 'true',
              'name' => 'referenceCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying a reference.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1154',
              'name' => 'referenceIdentifier',
              'usage' => 'C',
              'desc' => 'Identifies a reference.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1145',
              'name' => 'travellerReferenceIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a reference to a traveller.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'CUR' => 
  array (
    'attributes' => 
    array (
      'id' => 'CUR',
      'name' => 'currencies',
      'desc' => 'To specify currencies used in the transaction and relevant details for the rate of exchange.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E504',
          'name' => 'currencyDetails',
          'desc' => 'The usage to which a currency relates.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6347',
              'required' => 'true',
              'name' => 'currencyUsageCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the usage of a currency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6343',
              'name' => 'currencyTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of currency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6348',
              'name' => 'currencyRate',
              'usage' => 'C',
              'desc' => 'To specify the value of the multiplication factor used in expressing currency units.',
              'type' => 'n',
              'maxlength' => '4',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E504',
          'name' => 'currencyDetails',
          'desc' => 'The usage to which a currency relates.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6347',
              'required' => 'true',
              'name' => 'currencyUsageCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the usage of a currency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6343',
              'name' => 'currencyTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of currency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6348',
              'name' => 'currencyRate',
              'usage' => 'C',
              'desc' => 'To specify the value of the multiplication factor used in expressing currency units.',
              'type' => 'n',
              'maxlength' => '4',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5402',
          'name' => 'currencyExchangeRate',
          'usage' => 'C',
          'desc' => 'To specify the rate at which one specified currency is expressed in another specified currency.',
          'type' => 'n',
          'maxlength' => '12',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6341',
          'name' => 'exchangeRateCurrencyMarketIdentifier',
          'usage' => 'C',
          'desc' => 'To identify an exchange rate currency market.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'DAV' => 
  array (
    'attributes' => 
    array (
      'id' => 'DAV',
      'name' => 'dailyAvailability',
      'desc' => 'To specify availability on a daily basis.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7037',
          'required' => 'true',
          'name' => 'characteristicDescriptionCode',
          'usage' => 'C',
          'desc' => 'A code specifying a characteristic.',
          'type' => 'an',
          'maxlength' => '17',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E009',
          'required' => 'true',
          'name' => 'dailyAvailabilityInformation',
          'desc' => 'To specify availability on a daily basis.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'required' => 'true',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4510',
              'name' => 'requestedInformationDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the response information requested.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'DIS' => 
  array (
    'attributes' => 
    array (
      'id' => 'DIS',
      'name' => 'discountInformation',
      'desc' => 'To specify information about discounts.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E998',
          'required' => 'true',
          'name' => 'discountInformation',
          'desc' => 'To specify the reason for, amount, the company granting, and a number related to the reason for a discount.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4465',
              'required' => 'true',
              'name' => 'adjustmentReasonDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the adjustment reason.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5482',
              'name' => 'percentage',
              'usage' => 'C',
              'desc' => 'To specify a percentage.',
              'type' => 'n',
              'maxlength' => '10',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6350',
              'name' => 'unitsQuantity',
              'usage' => 'C',
              'desc' => 'To specify the number of units.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
        ),
      ),
    ),
  ),
  'DNT' => 
  array (
    'attributes' => 
    array (
      'id' => 'DNT',
      'name' => 'dentalInformation',
      'desc' => 'To provide specific tooth and oral cavity information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7402',
          'name' => 'objectIdentifier',
          'usage' => 'C',
          'desc' => 'Code specifying the unique identity of an object.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7383',
          'name' => 'surfaceOrLayerCode',
          'usage' => 'C',
          'desc' => 'Code specifying the surface or layer of an object.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9647',
          'name' => 'cavityZoneCode',
          'usage' => 'I',
          'desc' => 'Code specifying the zone of the cavity.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6060',
          'name' => 'quantity',
          'usage' => 'C',
          'desc' => 'Alphanumeric representation of a quantity.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'DTI' => 
  array (
    'attributes' => 
    array (
      'id' => 'DTI',
      'name' => 'dateAndTimeInformation',
      'desc' => 'To specify dates and times, related text and time references.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E013',
          'required' => 'true',
          'name' => 'dateAndTimeInformation',
          'desc' => 'To specify a date and time, and related text.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2005',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the function of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E014',
          'name' => 'timeReferenceDetails',
          'desc' => 'To specify a time reference to a corresponding time indication.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1154',
              'name' => 'referenceIdentifier',
              'usage' => 'C',
              'desc' => 'Identifies a reference.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1153',
              'name' => 'referenceCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying a reference.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'ERI' => 
  array (
    'attributes' => 
    array (
      'id' => 'ERI',
      'name' => 'applicationErrorInformation',
      'desc' => 'To identify the type of application error within a message.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E901',
          'required' => 'true',
          'name' => 'applicationErrorDetails',
          'desc' => 'Code assigned by the recipient of a message to indicate a data validation error condition.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9321',
              'required' => 'true',
              'name' => 'applicationErrorCode',
              'usage' => 'C',
              'desc' => 'Code specifying an application error.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'FRM' => 
  array (
    'attributes' => 
    array (
      'id' => 'FRM',
      'name' => 'followupAction',
      'desc' => 'To identify a follow-up action that should occur.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7402',
          'required' => 'true',
          'name' => 'objectIdentifier',
          'usage' => 'C',
          'desc' => 'Code specifying the unique identity of an object.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9013',
          'required' => 'true',
          'name' => 'statusReasonDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the reason for a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1229',
          'name' => 'actionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the action to be taken or already taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'FRQ' => 
  array (
    'attributes' => 
    array (
      'id' => 'FRQ',
      'name' => 'frequency',
      'desc' => 'To specify a frequency and the time window in which it applies.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E520',
          'required' => 'true',
          'name' => 'frequency',
          'desc' => 'To specify a frequency and the time window in which it applies.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6072',
              'required' => 'true',
              'name' => 'frequencyRate',
              'usage' => 'C',
              'desc' => 'The number of repetitions in a given time.',
              'type' => 'n',
              'maxlength' => '9',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'FTI' => 
  array (
    'attributes' => 
    array (
      'id' => 'FTI',
      'name' => 'frequentTravellerInformation',
      'desc' => 'To specify frequent traveller information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E970',
          'required' => 'true',
          'name' => 'frequentTravellerIdentification',
          'desc' => 'Identification of the frequent traveller by company with the capability to reference to a specific traveller.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'required' => 'true',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3459',
              'required' => 'true',
              'name' => 'frequentTravellerIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a frequent traveller.',
              'type' => 'an',
              'maxlength' => '25',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1145',
              'name' => 'travellerReferenceIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a reference to a traveller.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'HDI' => 
  array (
    'attributes' => 
    array (
      'id' => 'HDI',
      'name' => 'hardwareDeviceInformation',
      'desc' => 'To specify a hardware device line number, level of access, type and characteristics of the device.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3148',
          'name' => 'communicationAddressIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a communication address.',
          'type' => 'an',
          'maxlength' => '512',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3413',
          'name' => 'contactIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a contact, such as a department or employee.',
          'type' => 'an',
          'maxlength' => '17',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1511',
          'name' => 'computerEnvironmentNameCode',
          'usage' => 'C',
          'desc' => 'Code specifying a computer environment.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E003',
          'name' => 'attributeInformation',
          'desc' => 'To identify the type of attribute and the attribute.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9021',
              'required' => 'true',
              'name' => 'attributeTypeDescriptionCode',
              'usage' => 'C',
              'desc' => 'Coded specifying an attribute type.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9018',
              'name' => 'attributeDescription',
              'usage' => 'C',
              'desc' => 'Free form description of an attribute.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
    ),
  ),
  'HDR' => 
  array (
    'attributes' => 
    array (
      'id' => 'HDR',
      'name' => 'headerInformation',
      'desc' => 'To specify header information applicable to the entire message.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'required' => 'true',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E013',
          'required' => 'true',
          'name' => 'dateAndTimeInformation',
          'desc' => 'To specify a date and time, and related text.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2005',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the function of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1154',
          'name' => 'referenceIdentifier',
          'usage' => 'C',
          'desc' => 'Identifies a reference.',
          'type' => 'an',
          'maxlength' => '70',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4440',
          'name' => 'freeText',
          'usage' => 'C',
          'desc' => 'Free form text.',
          'type' => 'an',
          'maxlength' => '512',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7135',
          'name' => 'productIdentifier',
          'usage' => 'I',
          'desc' => 'To identify a product.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3453',
          'name' => 'languageNameCode',
          'usage' => 'C',
          'desc' => 'Code specifying the language name.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'HDS' => 
  array (
    'attributes' => 
    array (
      'id' => 'HDS',
      'name' => 'healthDiagnosisServiceAndDelivery',
      'desc' => 'A segment to provide specific information about covered benefit services, which is used to report a diagnosis to show necessity, the service or procedure being requested or provided, and service delivery instructions.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E029',
          'name' => 'diagnosis',
          'desc' => 'To identify the diagnosis and its type.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7135',
              'required' => 'true',
              'name' => 'productIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a product.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9623',
              'name' => 'diagnosisTypeCode',
              'usage' => 'I',
              'desc' => 'Code specifying the type of diagnosis.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E021',
          'name' => 'service',
          'desc' => 'To identify a service and any modifications.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7135',
              'required' => 'true',
              'name' => 'productIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a product.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9629',
              'name' => 'procedureModificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the procedure modification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9629',
              'name' => 'procedureModificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the procedure modification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9629',
              'name' => 'procedureModificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the procedure modification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9629',
              'name' => 'procedureModificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the procedure modification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E083',
          'name' => 'deliveryPattern',
          'desc' => 'To specify a delivery pattern that defines a quantity, delivered over a period of time, at a prescribed frequency.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6063',
              'required' => 'true',
              'name' => 'quantityTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of quantity.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2151',
              'name' => 'periodTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the type of period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2152',
              'name' => 'periodCountQuantity',
              'usage' => 'C',
              'desc' => 'Count of the number of periods.',
              'type' => 'n',
              'maxlength' => '3',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2015',
              'name' => 'despatchPatternCode',
              'usage' => 'C',
              'desc' => 'Code specifying a despatch pattern.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2017',
              'name' => 'despatchPatternTimingCode',
              'usage' => 'C',
              'desc' => 'Code specifying a set of dates/times within a despatch pattern.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'ICI' => 
  array (
    'attributes' => 
    array (
      'id' => 'ICI',
      'name' => 'insuranceCoverInformation',
      'desc' => 'To specify a type of insurance, if it is required, and the coverage, limit, and deductible amounts.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E016',
          'required' => 'true',
          'name' => 'insuranceCoverRequirement',
          'desc' => 'To specify the type of and requirement for insurance cover.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4497',
              'required' => 'true',
              'name' => 'insuranceCoverTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the meaning of the insurance cover.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7299',
              'name' => 'requirementDesignatorCode',
              'usage' => 'C',
              'desc' => 'Code specifying the requirement designator.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E017',
          'name' => 'monetaryAmount',
          'desc' => 'Amount of goods or services stated as a monetary amount in a specified currency.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5025',
              'name' => 'monetaryAmountTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of monetary amount.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6343',
              'name' => 'currencyTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of currency.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'IFT' => 
  array (
    'attributes' => 
    array (
      'id' => 'IFT',
      'name' => 'interactiveFreeText',
      'desc' => 'To provide free form information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E971',
          'name' => 'freeTextQualification',
          'desc' => 'To specify the type, purpose, status, and language of free text.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4451',
              'required' => 'true',
              'name' => 'textSubjectCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the subject of the text.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4473',
              'name' => 'informationTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying a type of information.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3453',
              'name' => 'languageNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the language name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4440',
          'name' => 'freeText',
          'usage' => 'C',
          'desc' => 'Free form text.',
          'type' => 'an',
          'maxlength' => '512',
        ),
      ),
    ),
  ),
  'ITC' => 
  array (
    'attributes' => 
    array (
      'id' => 'ITC',
      'name' => 'institutionalClaim',
      'desc' => 'To provide specific claim information for services performed while admitted to an institution.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E027',
          'required' => 'true',
          'name' => 'invoiceType',
          'desc' => 'To identify the type of invoice and its frequency.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9631',
              'required' => 'true',
              'name' => 'invoiceTypeCode',
              'usage' => 'I',
              'desc' => 'Code specifying the type of invoice.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2013',
              'name' => 'frequencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the rate of recurrence.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6060',
          'required' => 'true',
          'name' => 'quantity',
          'usage' => 'C',
          'desc' => 'Alphanumeric representation of a quantity.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E026',
          'required' => 'true',
          'name' => 'admission',
          'desc' => 'To identify admission information.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9445',
              'name' => 'admissionTypeDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the type of admission.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9627',
              'name' => 'admissionSourceCode',
              'usage' => 'I',
              'desc' => 'Code specifying the source of admission.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9447',
          'required' => 'true',
          'name' => 'dischargeTypeDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the type of discharge.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E025',
          'name' => 'basisOfServiceInformation',
          'desc' => 'To identify the basis of service including the type, date and charge.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9641',
              'required' => 'true',
              'name' => 'serviceBasisCodeQualifier',
              'usage' => 'I',
              'desc' => 'Code qualifying the basis on which a service is performed.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7135',
              'required' => 'true',
              'name' => 'productIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a product.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'ITD' => 
  array (
    'attributes' => 
    array (
      'id' => 'ITD',
      'name' => 'informationTypeData',
      'desc' => 'To indicate the category of data, the language, and the format of the data.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9601',
          'name' => 'informationCategoryCode',
          'usage' => 'I',
          'desc' => 'Code specifying the category of the information.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3453',
          'name' => 'languageNameCode',
          'usage' => 'C',
          'desc' => 'Code specifying the language name.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1503',
          'name' => 'dataFormatDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the data format.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'ITM' => 
  array (
    'attributes' => 
    array (
      'id' => 'ITM',
      'name' => 'itemNumber',
      'desc' => 'To specify an item number.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E212',
          'name' => 'itemNumberIdentification',
          'desc' => 'Goods identification for a specified source.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7140',
              'name' => 'itemIdentifier',
              'usage' => 'C',
              'desc' => 'To identify an item.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7143',
              'name' => 'itemTypeIdentificationCode',
              'usage' => 'C',
              'desc' => 'Coded identification of an item type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'LKP' => 
  array (
    'attributes' => 
    array (
      'id' => 'LKP',
      'name' => 'levelIndication',
      'desc' => 'To indicate a level in a hierarchical structure.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E778',
          'required' => 'true',
          'name' => 'positionIdentification',
          'desc' => 'To identify the position of an object in a structure containing the object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7164',
              'name' => 'hierarchicalStructureLevelIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a level within a hierarchical structure.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
        ),
      ),
    ),
  ),
  'LNG' => 
  array (
    'attributes' => 
    array (
      'id' => 'LNG',
      'name' => 'language',
      'desc' => 'To specify a language.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3455',
          'required' => 'true',
          'name' => 'languageCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code qualifying a language.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E033',
          'name' => 'languageDetails',
          'desc' => 'To identify a language.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3453',
              'name' => 'languageNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the language name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3452',
              'name' => 'languageName',
              'usage' => 'C',
              'desc' => 'Name of language.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'MAP' => 
  array (
    'attributes' => 
    array (
      'id' => 'MAP',
      'name' => 'messageApplicationProductInformation',
      'desc' => 'To indicate the instruction, the applicable supplier, and the message functions and applications affected.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E022',
          'name' => 'instructionInformation',
          'desc' => 'To specify an instruction.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4401',
              'required' => 'true',
              'name' => 'instructionDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an instruction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4403',
              'name' => 'instructionTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of instruction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3036',
          'name' => 'partyName',
          'usage' => 'C',
          'desc' => 'Name of a party.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E031',
          'name' => 'messageApplicationProductSpecification',
          'desc' => 'To specify a message function, a dialogue, or a scenario.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1225',
              'name' => 'messageFunctionCode',
              'usage' => 'C',
              'desc' => 'Code indicating the function of the message.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7191',
              'name' => 'processDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a process.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7191',
              'name' => 'processDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a process.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
        ),
      ),
    ),
  ),
  'MES' => 
  array (
    'attributes' => 
    array (
      'id' => 'MES',
      'name' => 'measurements',
      'desc' => 'To specify physical measurements.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E175',
          'required' => 'true',
          'name' => 'measurementValueAndDetails',
          'desc' => 'Specification of a measurement value and identification of its type.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6314',
              'required' => 'true',
              'name' => 'measure',
              'usage' => 'C',
              'desc' => 'To specify the value of a measurement.',
              'type' => 'an',
              'maxlength' => '18',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6313',
              'name' => 'measuredAttributeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the attribute measured.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6321',
              'name' => 'measurementSignificanceCode',
              'usage' => 'C',
              'desc' => 'Code specifying the significance of a measurement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'MOV' => 
  array (
    'attributes' => 
    array (
      'id' => 'MOV',
      'name' => 'carDeliveryInstruction',
      'desc' => 'To specify delivery and chauffeur drive details, including number of passengers and language of passengers for a car.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E995',
          'name' => 'movementDetails',
          'desc' => 'To specify information concerning delivery.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7273',
              'name' => 'serviceRequirementCode',
              'usage' => 'C',
              'desc' => 'Code specifying a service requirement.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6350',
          'name' => 'unitsQuantity',
          'usage' => 'C',
          'desc' => 'To specify the number of units.',
          'type' => 'n',
          'maxlength' => '15',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3453',
          'name' => 'languageNameCode',
          'usage' => 'C',
          'desc' => 'Code specifying the language name.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'MSD' => 
  array (
    'attributes' => 
    array (
      'id' => 'MSD',
      'name' => 'messageActionDetails',
      'desc' => 'To specify the message and business function and to provide a tracking mechanism.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E972',
          'name' => 'messageProcessingDetails',
          'desc' => 'To indicate message processing information.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4025',
              'name' => 'businessFunctionCode',
              'usage' => 'C',
              'desc' => 'Code describing the specific business function.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1225',
              'name' => 'messageFunctionCode',
              'usage' => 'C',
              'desc' => 'Code indicating the function of the message.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1225',
              'name' => 'messageFunctionCode',
              'usage' => 'C',
              'desc' => 'Code indicating the function of the message.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1225',
              'name' => 'messageFunctionCode',
              'usage' => 'C',
              'desc' => 'Code indicating the function of the message.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1225',
              'name' => 'messageFunctionCode',
              'usage' => 'C',
              'desc' => 'Code indicating the function of the message.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1225',
              'name' => 'messageFunctionCode',
              'usage' => 'C',
              'desc' => 'Code indicating the function of the message.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1225',
              'name' => 'messageFunctionCode',
              'usage' => 'C',
              'desc' => 'Code indicating the function of the message.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1225',
              'name' => 'messageFunctionCode',
              'usage' => 'C',
              'desc' => 'Code indicating the function of the message.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          9 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1225',
              'name' => 'messageFunctionCode',
              'usage' => 'C',
              'desc' => 'Code indicating the function of the message.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          10 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1225',
              'name' => 'messageFunctionCode',
              'usage' => 'C',
              'desc' => 'Code indicating the function of the message.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          11 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1225',
              'name' => 'messageFunctionCode',
              'usage' => 'C',
              'desc' => 'Code indicating the function of the message.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4343',
          'name' => 'responseTypeCode',
          'usage' => 'C',
          'desc' => 'Code specifying the type of acknowledgment required or transmitted.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E206',
          'name' => 'objectIdentification',
          'desc' => 'The identification of an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'NAA' => 
  array (
    'attributes' => 
    array (
      'id' => 'NAA',
      'name' => 'nameAndAddress',
      'desc' => 'To specify the name/address and their related function, either by E082 only and/or unstructured by E058 or structured by E080 through 3207.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3035',
          'required' => 'true',
          'name' => 'partyFunctionCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code giving specific meaning to a party.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E082',
          'name' => 'partyIdentificationDetails',
          'desc' => 'Identification of a transaction party by code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'required' => 'true',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3124',
          'name' => 'nameAndAddressDescription',
          'usage' => 'C',
          'desc' => 'Free form description of a name and address line.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E080',
          'name' => 'partyName',
          'desc' => 'Identification of a transaction party by name.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'required' => 'true',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3045',
              'name' => 'partyNameFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a party name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3164',
          'name' => 'cityName',
          'usage' => 'C',
          'desc' => 'Name of a city.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3229',
          'name' => 'countrySubdivisionIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a country subdivision, such as state, canton, county, prefecture.',
          'type' => 'an',
          'maxlength' => '9',
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3251',
          'name' => 'postalIdentificationCode',
          'usage' => 'C',
          'desc' => 'Code specifying the postal zone or address.',
          'type' => 'an',
          'maxlength' => '17',
        ),
      ),
      7 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3207',
          'name' => 'countryIdentifier',
          'usage' => 'C',
          'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'NME' => 
  array (
    'attributes' => 
    array (
      'id' => 'NME',
      'name' => 'name',
      'desc' => 'To identify the name of a person or entity.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E012',
          'required' => 'true',
          'name' => 'nameInformation',
          'desc' => 'To identify the type of name, the actual name or a code to identify the name, and the status of the name.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3035',
              'required' => 'true',
              'name' => 'partyFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code giving specific meaning to a party.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3397',
              'name' => 'nameStatusCode',
              'usage' => 'C',
              'desc' => 'Code specifying the status of a name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'NUN' => 
  array (
    'attributes' => 
    array (
      'id' => 'NUN',
      'name' => 'numberOfUnits',
      'desc' => 'To specify the number of units required.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E523',
          'required' => 'true',
          'name' => 'numberOfUnitDetails',
          'desc' => 'Identification of number of units and its purpose.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6350',
              'name' => 'unitsQuantity',
              'usage' => 'C',
              'desc' => 'To specify the number of units.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6353',
              'name' => 'unitTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'ODI' => 
  array (
    'attributes' => 
    array (
      'id' => 'ODI',
      'name' => 'originAndDestinationDetails',
      'desc' => 'To convey first the origin and then final destination of a journey.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3225',
          'name' => 'locationIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a location.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1050',
          'name' => 'sequencePositionIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a position in a sequence.',
          'type' => 'an',
          'maxlength' => '10',
        ),
      ),
    ),
  ),
  'ODS' => 
  array (
    'attributes' => 
    array (
      'id' => 'ODS',
      'name' => 'additionalProductDetails',
      'desc' => 'To specify additional details including the types of product data, the actual data, the number available, and the charges for usage.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9605',
          'required' => 'true',
          'name' => 'dataCodeQualifier',
          'usage' => 'I',
          'desc' => 'Code qualifying the data.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E015',
          'required' => 'true',
          'name' => 'productDataInformation',
          'desc' => 'To specify the product data in coded or text form, the number available, and the charge for usage.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7009',
              'name' => 'itemDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an item.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7008',
              'name' => 'itemDescription',
              'usage' => 'C',
              'desc' => 'Free form description of an item.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2155',
              'name' => 'chargePeriodTypeCode',
              'usage' => 'I',
              'desc' => 'Code specifying a type of a charge period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5261',
              'name' => 'chargeUnitCode',
              'usage' => 'I',
              'desc' => 'Code specifying a charge unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4473',
              'name' => 'informationTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying a type of information.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
    ),
  ),
  'ORG' => 
  array (
    'attributes' => 
    array (
      'id' => 'ORG',
      'name' => 'originatorOfRequestDetails',
      'desc' => 'To provide the originator of request details.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E973',
          'name' => 'deliveringSystemDetails',
          'desc' => 'To specify the system and its location that originates or delivers the message for a third party.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3224',
              'name' => 'locationName',
              'usage' => 'C',
              'desc' => 'Name of the location.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E974',
          'name' => 'originatorIdentificationDetails',
          'desc' => 'To identify the assigned agent identification code, the originating system identification, booking source and agent name, in that sequence.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3197',
              'name' => 'agentIdentifier',
              'usage' => 'I',
              'desc' => 'To identify an agent.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3465',
              'name' => 'inhouseIdentifier',
              'usage' => 'I',
              'desc' => 'A unique locally assigned identification.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3197',
              'name' => 'agentIdentifier',
              'usage' => 'I',
              'desc' => 'To identify an agent.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E975',
          'name' => 'location',
          'desc' => 'To identify a location.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3224',
              'name' => 'locationName',
              'usage' => 'C',
              'desc' => 'Name of the location.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3207',
              'name' => 'countryIdentifier',
              'usage' => 'C',
              'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3227',
              'name' => 'locationFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code identifying the function of a location.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3036',
          'name' => 'partyName',
          'usage' => 'C',
          'desc' => 'Name of a party.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3457',
          'name' => 'originatorTypeCode',
          'usage' => 'I',
          'desc' => 'Code specifying the type of originator.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E976',
          'name' => 'originatorDetails',
          'desc' => 'To specify details about the originator.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3207',
              'name' => 'countryIdentifier',
              'usage' => 'C',
              'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3453',
              'name' => 'languageNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the language name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3503',
          'name' => 'accessAuthorisationIdentifier',
          'usage' => 'I',
          'desc' => 'To identify an authorisation to access.',
          'type' => 'an',
          'maxlength' => '9',
        ),
      ),
    ),
  ),
  'OTI' => 
  array (
    'attributes' => 
    array (
      'id' => 'OTI',
      'name' => 'otherInsurance',
      'desc' => 'To provide payer, insured, and payment information when benefits are being coordinated between third party benefit carriers.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E206',
          'required' => 'true',
          'name' => 'objectIdentification',
          'desc' => 'The identification of an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9645',
          'required' => 'true',
          'name' => 'payerResponsibilityLevelCode',
          'usage' => 'I',
          'desc' => 'Code specifying the level of responsibility of a payer.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E507',
          'name' => 'datetimeperiod',
          'desc' => 'Date and/or time, or period relevant to the specified date/time/period type.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2005',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the function of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5267',
          'name' => 'serviceTypeCode',
          'usage' => 'I',
          'desc' => 'Code specifying the type of service.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5004',
          'name' => 'monetaryAmount',
          'usage' => 'C',
          'desc' => 'To specify a monetary amount.',
          'type' => 'n',
          'maxlength' => '35',
        ),
      ),
      5 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E030',
          'name' => 'adjustmentInformation',
          'desc' => 'To identify the adjustment category, reason and related monetary amount.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9619',
              'required' => 'true',
              'name' => 'adjustmentCategoryCode',
              'usage' => 'I',
              'desc' => 'Code specifying the general category of adjustment.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4465',
              'required' => 'true',
              'name' => 'adjustmentReasonDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the adjustment reason.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4497',
          'name' => 'insuranceCoverTypeCode',
          'usage' => 'C',
          'desc' => 'Code specifying the meaning of the insurance cover.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      7 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9143',
          'name' => 'relationshipDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a relationship.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      8 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9607',
          'name' => 'yesOrNoIndicatorCode',
          'usage' => 'I',
          'desc' => 'Code specifying either a yes or no.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'PDT' => 
  array (
    'attributes' => 
    array (
      'id' => 'PDT',
      'name' => 'productInformation',
      'desc' => 'To specify details related to a product such as configuration and availability.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7133',
          'name' => 'productDetailsTypeCodeQualifier',
          'usage' => 'I',
          'desc' => 'Code qualifying a type of product details.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E996',
          'name' => 'productClassDetails',
          'desc' => 'To specify details for a product class.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7037',
              'name' => 'characteristicDescriptionCode',
              'usage' => 'C',
              'desc' => 'A code specifying a characteristic.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4510',
              'name' => 'requestedInformationDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the response information requested.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7161',
              'name' => 'specialServiceDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a special service.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7009',
              'name' => 'itemDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an item.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7009',
              'name' => 'itemDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an item.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7009',
              'name' => 'itemDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an item.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7139',
              'name' => 'productCharacteristicIdentificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the identification of a product characteristic.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'PLI' => 
  array (
    'attributes' => 
    array (
      'id' => 'PLI',
      'name' => 'productLocationInformation',
      'desc' => 'To specify product location information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E008',
          'required' => 'true',
          'name' => 'geographicDetails',
          'desc' => 'To specify a type of location, the actual location, the direction, distance, travel time and transportation to the location.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3227',
              'required' => 'true',
              'name' => 'locationFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code identifying the function of a location.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3224',
              'required' => 'true',
              'name' => 'locationName',
              'usage' => 'C',
              'desc' => 'Name of the location.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5479',
              'name' => 'relationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a relation.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6063',
              'name' => 'quantityTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of quantity.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8179',
              'name' => 'transportMeansDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the means of transport.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8179',
              'name' => 'transportMeansDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the means of transport.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8179',
              'name' => 'transportMeansDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the means of transport.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          9 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8179',
              'name' => 'transportMeansDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the means of transport.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          10 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8179',
              'name' => 'transportMeansDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the means of transport.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          11 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6000',
              'name' => 'latitudeDegree',
              'usage' => 'C',
              'desc' => 'To specify  the angular distance, measured in degrees, minutes, and seconds, north or south from the equator.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          12 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6002',
              'name' => 'longitudeDegree',
              'usage' => 'C',
              'desc' => 'To specify the value of longitude i.e. the angular distance east or west on the earth\'s surface, measured by the angle and expressed in degrees, minutes, and seconds, which the meridian passing through a particular place makes with a standard or prime meridian.',
              'type' => 'an',
              'maxlength' => '11',
            ),
          ),
        ),
      ),
    ),
  ),
  'PMT' => 
  array (
    'attributes' => 
    array (
      'id' => 'PMT',
      'name' => 'paymentInformation',
      'desc' => 'To specify information concerning the payment.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E977',
          'name' => 'paymentDetails',
          'desc' => 'To identify the method, type, amount, currency and due date of payment.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4467',
              'name' => 'paymentMethodCode',
              'usage' => 'I',
              'desc' => 'Code specifying a method of payment.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4469',
              'name' => 'paymentPurposeCode',
              'usage' => 'I',
              'desc' => 'Code identifying the purpose of a payment.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5267',
              'name' => 'serviceTypeCode',
              'usage' => 'I',
              'desc' => 'Code specifying the type of service.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1154',
              'name' => 'referenceIdentifier',
              'usage' => 'C',
              'desc' => 'Identifies a reference.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E978',
          'name' => 'creditCardInformation',
          'desc' => 'To identify the relevant information of a credit card and relate it to a traveller.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'required' => 'true',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1154',
              'name' => 'referenceIdentifier',
              'usage' => 'C',
              'desc' => 'Identifies a reference.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3449',
              'name' => 'bankIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a bank.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1145',
              'name' => 'travellerReferenceIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a reference to a traveller.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'POP' => 
  array (
    'attributes' => 
    array (
      'id' => 'POP',
      'name' => 'periodOfOperation',
      'desc' => 'To specify date or time period with days of operation.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E013',
          'required' => 'true',
          'name' => 'dateAndTimeInformation',
          'desc' => 'To specify a date and time, and related text.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2005',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the function of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '2160',
          'name' => 'daysOfWeekSetIdentifier',
          'usage' => 'I',
          'desc' => 'String data representation of days of the week (Monday = 1).',
          'type' => 'an',
          'maxlength' => '7',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4405',
          'name' => 'statusDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a status.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'POR' => 
  array (
    'attributes' => 
    array (
      'id' => 'POR',
      'name' => 'locationAndorRelatedTimeInformation',
      'desc' => 'To provide information about a location, related times and sub-locations.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E517',
          'required' => 'true',
          'name' => 'locationIdentification',
          'desc' => 'Identification of a location by code or name.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3224',
              'name' => 'locationName',
              'usage' => 'C',
              'desc' => 'Name of the location.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E362',
          'name' => 'relatedTimeInformation',
          'desc' => 'To specify information about related times and their variation.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2116',
              'name' => 'timeZoneDifferenceQuantity',
              'usage' => 'I',
              'desc' => 'The difference between two defined time zones.',
              'type' => 'n',
              'maxlength' => '4',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2148',
              'name' => 'dateVariationNumber',
              'usage' => 'I',
              'desc' => 'A number to indicate the difference between two dates.',
              'type' => 'n',
              'maxlength' => '5',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E992',
          'name' => 'position',
          'desc' => 'To identify the position of an item.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3223',
              'name' => 'firstRelatedLocationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a first related location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3233',
              'name' => 'secondRelatedLocationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a second related location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3227',
          'name' => 'locationFunctionCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code identifying the function of a location.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1050',
          'name' => 'sequencePositionIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a position in a sequence.',
          'type' => 'an',
          'maxlength' => '10',
        ),
      ),
    ),
  ),
  'POS' => 
  array (
    'attributes' => 
    array (
      'id' => 'POS',
      'name' => 'pointOfSaleInformation',
      'desc' => 'To specify point of sale information by party identification or location identification.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E032',
          'name' => 'partyIdentification',
          'desc' => 'To specify a party identification.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3039',
              'name' => 'partyIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the identity of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3035',
              'name' => 'partyFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code giving specific meaning to a party.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E975',
          'name' => 'location',
          'desc' => 'To identify a location.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3224',
              'name' => 'locationName',
              'usage' => 'C',
              'desc' => 'Name of the location.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3207',
              'name' => 'countryIdentifier',
              'usage' => 'C',
              'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3227',
              'name' => 'locationFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code identifying the function of a location.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'PRD' => 
  array (
    'attributes' => 
    array (
      'id' => 'PRD',
      'name' => 'productIdentification',
      'desc' => 'To identify a product.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E989',
          'name' => 'productIdentificationDetails',
          'desc' => 'Code, number or name to identify a specific product or service and a code to identify the level or type of product or service.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7135',
              'name' => 'productIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a product.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7037',
              'name' => 'characteristicDescriptionCode',
              'usage' => 'C',
              'desc' => 'A code specifying a characteristic.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7139',
              'name' => 'productCharacteristicIdentificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the identification of a product characteristic.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7009',
              'name' => 'itemDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an item.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7009',
              'name' => 'itemDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an item.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7009',
              'name' => 'itemDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an item.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9608',
              'name' => 'productName',
              'usage' => 'I',
              'desc' => 'Name identifying a product.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3036',
          'name' => 'partyName',
          'usage' => 'C',
          'desc' => 'Name of a party.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
    ),
  ),
  'PRE' => 
  array (
    'attributes' => 
    array (
      'id' => 'PRE',
      'name' => 'priceDetails',
      'desc' => 'To specify price information.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E018',
          'name' => 'priceInformation',
          'desc' => 'Identification of price type, price and related details.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5125',
              'required' => 'true',
              'name' => 'priceCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying a price.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5118',
              'name' => 'priceAmount',
              'usage' => 'C',
              'desc' => 'To specify a price.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5375',
              'name' => 'priceTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the type of price.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5213',
          'name' => 'sublineItemPriceChangeOperationCode',
          'usage' => 'C',
          'desc' => 'Code specifying the price change operation for a sub- line item.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'PRO' => 
  array (
    'attributes' => 
    array (
      'id' => 'PRO',
      'name' => 'promotions',
      'desc' => 'To specify the promotion details.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E019',
          'required' => 'true',
          'name' => 'promotionDetails',
          'desc' => 'To specify the provider of a promotion, the promotion reference number, and associated text.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'required' => 'true',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9607',
              'name' => 'yesOrNoIndicatorCode',
              'usage' => 'I',
              'desc' => 'Code specifying either a yes or no.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1154',
              'name' => 'referenceIdentifier',
              'usage' => 'C',
              'desc' => 'Identifies a reference.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
    ),
  ),
  'PRT' => 
  array (
    'attributes' => 
    array (
      'id' => 'PRT',
      'name' => 'partyInformation',
      'desc' => 'To provide specific identification number and demographic information regarding the identity of the participating parties.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3035',
          'required' => 'true',
          'name' => 'partyFunctionCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code giving specific meaning to a party.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E206',
          'name' => 'objectIdentification',
          'desc' => 'The identification of an object.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'required' => 'true',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7405',
              'name' => 'objectIdentificationCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the identification of an object.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '2000',
          'name' => 'date',
          'usage' => 'I',
          'desc' => 'To specify a date.',
          'type' => 'an',
          'maxlength' => '14',
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E023',
          'name' => 'partyDemographicInformation',
          'desc' => 'To provide demographic information about a party.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9143',
              'name' => 'relationshipDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a relationship.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3499',
              'name' => 'genderCode',
              'usage' => 'C',
              'desc' => 'Code giving the gender of a person, animal or plant.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9005',
              'name' => 'employmentCategoryDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the employment category.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3479',
              'name' => 'maritalStatusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the marital status of a person.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9607',
              'name' => 'yesOrNoIndicatorCode',
              'usage' => 'I',
              'desc' => 'Code specifying either a yes or no.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'PSI' => 
  array (
    'attributes' => 
    array (
      'id' => 'PSI',
      'name' => 'serviceInformation',
      'desc' => 'To provide detail information about the service.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7402',
          'required' => 'true',
          'name' => 'objectIdentifier',
          'usage' => 'C',
          'desc' => 'Code specifying the unique identity of an object.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E507',
          'name' => 'datetimeperiod',
          'desc' => 'Date and/or time, or period relevant to the specified date/time/period type.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2005',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the function of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E021',
          'name' => 'service',
          'desc' => 'To identify a service and any modifications.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7135',
              'required' => 'true',
              'name' => 'productIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a product.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9629',
              'name' => 'procedureModificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the procedure modification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9629',
              'name' => 'procedureModificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the procedure modification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9629',
              'name' => 'procedureModificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the procedure modification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9629',
              'name' => 'procedureModificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the procedure modification.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6060',
          'name' => 'quantity',
          'usage' => 'C',
          'desc' => 'Alphanumeric representation of a quantity.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5004',
          'name' => 'monetaryAmount',
          'usage' => 'C',
          'desc' => 'To specify a monetary amount.',
          'type' => 'n',
          'maxlength' => '35',
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5030',
          'name' => 'indexText',
          'usage' => 'C',
          'desc' => 'To specify the value of an index.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9039',
          'name' => 'facilityTypeDescriptionCode',
          'usage' => 'I',
          'desc' => 'Code specifying the facility type.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      7 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5267',
          'name' => 'serviceTypeCode',
          'usage' => 'I',
          'desc' => 'Code specifying the type of service.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      8 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '4183',
          'name' => 'specialConditionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a special condition.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      9 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E024',
          'name' => 'supportingEvidence',
          'desc' => 'To identify the type of evidence, a unique reference number and the communication method.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9643',
              'required' => 'true',
              'name' => 'supportingEvidenceTypeCodeQualifier',
              'usage' => 'I',
              'desc' => 'Code qualifying the type of supporting evidence.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1154',
              'required' => 'true',
              'name' => 'referenceIdentifier',
              'usage' => 'C',
              'desc' => 'Identifies a reference.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3153',
              'name' => 'communicationMediumTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the type of communication medium.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'QTI' => 
  array (
    'attributes' => 
    array (
      'id' => 'QTI',
      'name' => 'quantity',
      'desc' => 'To convey information about a quantity.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E035',
          'required' => 'true',
          'name' => 'quantityDetails',
          'desc' => 'To convey information about a quantity.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6063',
              'required' => 'true',
              'name' => 'quantityTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of quantity.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'required' => 'true',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
        ),
      ),
    ),
  ),
  'RCI' => 
  array (
    'attributes' => 
    array (
      'id' => 'RCI',
      'name' => 'reservationControlInformation',
      'desc' => 'To specify a reference to a reservation.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E979',
          'name' => 'reservationControlInformation',
          'desc' => 'To specify information about a reservation such as identification, date and time, and reasons of modifications.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9040',
              'name' => 'reservationIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a reservation.',
              'type' => 'an',
              'maxlength' => '20',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9043',
              'name' => 'reservationIdentifierCodeQualifier',
              'usage' => 'I',
              'desc' => 'Code qualifying the reservation identifier.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2164',
              'name' => 'millisecondTime',
              'usage' => 'I',
              'desc' => 'To specify a time including milliseconds.',
              'type' => 'n',
              'length' => '9',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1154',
              'name' => 'referenceIdentifier',
              'usage' => 'C',
              'desc' => 'Identifies a reference.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4465',
              'name' => 'adjustmentReasonDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the adjustment reason.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'RFR' => 
  array (
    'attributes' => 
    array (
      'id' => 'RFR',
      'name' => 'reference',
      'desc' => 'To specify a reference.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E506',
          'required' => 'true',
          'name' => 'reference',
          'desc' => 'Identification of a reference.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1153',
              'required' => 'true',
              'name' => 'referenceCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying a reference.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1154',
              'name' => 'referenceIdentifier',
              'usage' => 'C',
              'desc' => 'Identifies a reference.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1156',
              'name' => 'documentLineIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a line of a document.',
              'type' => 'an',
              'maxlength' => '6',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4000',
              'name' => 'referenceVersionIdentifier',
              'usage' => 'I',
              'desc' => 'To identify the version of a reference.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'RLS' => 
  array (
    'attributes' => 
    array (
      'id' => 'RLS',
      'name' => 'relationship',
      'desc' => 'To identify relationships between objects.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '9141',
          'required' => 'true',
          'name' => 'relationshipTypeCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code qualifying a type of relationship.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E941',
          'name' => 'relationship',
          'desc' => 'Specification of a relationship in coded and/or free form.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9143',
              'name' => 'relationshipDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a relationship.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1131',
              'name' => 'codeListIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code identifying a user or association maintained code list.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9142',
              'name' => 'relationshipDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a relationship.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'RPI' => 
  array (
    'attributes' => 
    array (
      'id' => 'RPI',
      'name' => 'quantityAndActionDetails',
      'desc' => 'To indicate quantity and action required in relation to a product.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E958',
          'required' => 'true',
          'name' => 'quantityAndActionDetails',
          'desc' => 'To specify quantity and action required for a product or service.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'RTC' => 
  array (
    'attributes' => 
    array (
      'id' => 'RTC',
      'name' => 'rateTypes',
      'desc' => 'To specify the types of rates.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '5263',
          'required' => 'true',
          'name' => 'rateTypeIdentifier',
          'usage' => 'I',
          'desc' => 'To identify a type of rate.',
          'type' => 'an',
          'maxlength' => '20',
        ),
      ),
    ),
  ),
  'RTI' => 
  array (
    'attributes' => 
    array (
      'id' => 'RTI',
      'name' => 'rateDetails',
      'desc' => 'To identify a rate and to indicate how it should be processed.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E011',
          'required' => 'true',
          'name' => 'rateClassDetails',
          'desc' => 'To identify rate classes and how they should be processed.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5243',
              'required' => 'true',
              'name' => 'rateOrTariffClassDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an applicable rate or tariff class.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7365',
              'name' => 'processingIndicatorDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a processing indicator.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'RUL' => 
  array (
    'attributes' => 
    array (
      'id' => 'RUL',
      'name' => 'ruleInformation',
      'desc' => 'To specify rule information and rule status.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E004',
          'name' => 'ruleDetails',
          'desc' => 'To indicate the coded rule, a number and it\'s relation to the rule, a start day of service, a monetary amount associated to the rule, and additional information associated with the rule.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4183',
              'required' => 'true',
              'name' => 'specialConditionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a special condition.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6350',
              'name' => 'unitsQuantity',
              'usage' => 'C',
              'desc' => 'To specify the number of units.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6353',
              'name' => 'unitTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5479',
              'name' => 'relationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a relation.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2160',
              'name' => 'daysOfWeekSetIdentifier',
              'usage' => 'I',
              'desc' => 'String data representation of days of the week (Monday = 1).',
              'type' => 'an',
              'maxlength' => '7',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5025',
              'name' => 'monetaryAmountTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of monetary amount.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          9 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          10 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          11 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          12 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          13 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          14 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          15 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          16 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E005',
          'name' => 'ruleText',
          'desc' => 'To specify the text rule.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4183',
              'required' => 'true',
              'name' => 'specialConditionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a special condition.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4473',
              'name' => 'informationTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying a type of information.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E006',
          'name' => 'ruleStatus',
          'desc' => 'To specify the status of the rule.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4183',
              'required' => 'true',
              'name' => 'specialConditionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a special condition.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7365',
              'name' => 'processingIndicatorDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a processing indicator.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'SDT' => 
  array (
    'attributes' => 
    array (
      'id' => 'SDT',
      'name' => 'selectionDetails',
      'desc' => 'To specify the details for making a selection.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E010',
          'required' => 'true',
          'name' => 'selectionDetailsInformation',
          'desc' => 'To specify a selected option and associated information.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4009',
              'required' => 'true',
              'name' => 'optionCode',
              'usage' => 'I',
              'desc' => 'Code specifying an option.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4018',
              'name' => 'relatedInformationDescription',
              'usage' => 'I',
              'desc' => 'Free form description of the related information.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
    ),
  ),
  'SER' => 
  array (
    'attributes' => 
    array (
      'id' => 'SER',
      'name' => 'facilityInformation',
      'desc' => 'To provide facility information, followed by the period and days of operation.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E965',
          'name' => 'facilities',
          'desc' => 'To convey information about the facilities of a service.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9039',
              'name' => 'facilityTypeDescriptionCode',
              'usage' => 'I',
              'desc' => 'Code specifying the facility type.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9038',
              'name' => 'facilityTypeDescription',
              'usage' => 'I',
              'desc' => 'Free form description of the facility type.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7133',
              'name' => 'productDetailsTypeCodeQualifier',
              'usage' => 'I',
              'desc' => 'Code qualifying a type of product details.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7037',
              'name' => 'characteristicDescriptionCode',
              'usage' => 'C',
              'desc' => 'A code specifying a characteristic.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1229',
          'name' => 'actionCode',
          'usage' => 'C',
          'desc' => 'Code specifying the action to be taken or already taken.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6350',
          'name' => 'unitsQuantity',
          'usage' => 'C',
          'desc' => 'To specify the number of units.',
          'type' => 'n',
          'maxlength' => '15',
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E013',
          'name' => 'dateAndTimeInformation',
          'desc' => 'To specify a date and time, and related text.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2005',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the function of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2380',
              'required' => 'true',
              'name' => 'dateOrTimeOrPeriodText',
              'usage' => 'C',
              'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2379',
              'name' => 'dateOrTimeOrPeriodFormatCode',
              'usage' => 'C',
              'desc' => 'Code specifying the representation of a date, time or period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '2160',
          'name' => 'daysOfWeekSetIdentifier',
          'usage' => 'I',
          'desc' => 'String data representation of days of the week (Monday = 1).',
          'type' => 'an',
          'maxlength' => '7',
        ),
      ),
    ),
  ),
  'SSR' => 
  array (
    'attributes' => 
    array (
      'id' => 'SSR',
      'name' => 'specialRequirementDetails',
      'desc' => 'To specify special requirements on services, the quantity required, action to be taken and where the requirement should be administered.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E980',
          'required' => 'true',
          'name' => 'specialRequirementTypeDetails',
          'desc' => 'To specify special requirements on services, the quantity required, action to be taken and where the requirement should be administered.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4187',
              'required' => 'true',
              'name' => 'specialRequirementTypeCode',
              'usage' => 'I',
              'desc' => 'Code specifying a type of special requirement.',
              'type' => 'an',
              'maxlength' => '4',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7365',
              'name' => 'processingIndicatorDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a processing indicator.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7037',
              'name' => 'characteristicDescriptionCode',
              'usage' => 'C',
              'desc' => 'A code specifying a characteristic.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E981',
          'name' => 'specialRequirementDetails',
          'desc' => 'To specify requirements concerning a special request or requirement and to reference to a traveller.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4184',
              'name' => 'specialRequirementDescription',
              'usage' => 'I',
              'desc' => 'Free form description of a special requirement.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1145',
              'name' => 'travellerReferenceIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a reference to a traveller.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7111',
              'name' => 'characteristicValueDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the value of a characteristic.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7111',
              'name' => 'characteristicValueDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the value of a characteristic.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7111',
              'name' => 'characteristicValueDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the value of a characteristic.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7111',
              'name' => 'characteristicValueDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the value of a characteristic.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7111',
              'name' => 'characteristicValueDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the value of a characteristic.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'TCE' => 
  array (
    'attributes' => 
    array (
      'id' => 'TCE',
      'name' => 'timeAndCertainty',
      'desc' => 'To specify the time and certainty of an event.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '2380',
          'name' => 'dateOrTimeOrPeriodText',
          'usage' => 'C',
          'desc' => 'The value of a date, a date and time, a time or of a period in a specified representation.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E946',
          'name' => 'certainty',
          'desc' => 'To specify the certainty in coded and/or free form.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4049',
              'name' => 'certaintyDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a certainty.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4048',
              'name' => 'certaintyDescription',
              'usage' => 'C',
              'desc' => 'Free form description of a certainty.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3453',
              'name' => 'languageNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the language name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3055',
              'name' => 'codeListResponsibleAgencyCode',
              'usage' => 'C',
              'desc' => 'Code specifying the agency responsible for a code list.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'TDI' => 
  array (
    'attributes' => 
    array (
      'id' => 'TDI',
      'name' => 'travellerDocumentInformation',
      'desc' => 'To specify document information related to a traveller.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E968',
          'required' => 'true',
          'name' => 'documentInformation',
          'desc' => 'Identification of a document by coded name, number, classification and place of issue.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1001',
              'required' => 'true',
              'name' => 'documentNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the document name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1004',
              'name' => 'documentIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a document.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7111',
              'name' => 'characteristicValueDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying the value of a characteristic.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3207',
              'name' => 'countryIdentifier',
              'usage' => 'C',
              'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3207',
              'name' => 'countryIdentifier',
              'usage' => 'C',
              'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3164',
              'name' => 'cityName',
              'usage' => 'C',
              'desc' => 'Name of a city.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E969',
          'name' => 'validityDates',
          'desc' => 'Identification of the effective and expiration dates, effective date first.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'required' => 'true',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3500',
          'name' => 'familyName',
          'usage' => 'I',
          'desc' => 'Family name (synonym surname).',
          'type' => 'an',
          'maxlength' => '70',
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '3460',
          'name' => 'givenName',
          'usage' => 'I',
          'desc' => 'An individual\'s given name.',
          'type' => 'an',
          'maxlength' => '70',
        ),
      ),
    ),
  ),
  'TFF' => 
  array (
    'attributes' => 
    array (
      'id' => 'TFF',
      'name' => 'tariffInformation',
      'desc' => 'To specify tariff details relating to a service or product.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E982',
          'name' => 'tariffInformation',
          'desc' => 'To identify the rates or tariff details.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5263',
              'name' => 'rateTypeIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a type of rate.',
              'type' => 'an',
              'maxlength' => '20',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5501',
              'name' => 'ratePlanCode',
              'usage' => 'I',
              'desc' => 'Code specifying a rate plan.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5025',
              'name' => 'monetaryAmountTypeCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code qualifying the type of monetary amount.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2152',
              'name' => 'periodCountQuantity',
              'usage' => 'C',
              'desc' => 'Count of the number of periods.',
              'type' => 'n',
              'maxlength' => '3',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5377',
              'name' => 'priceChangeTypeCode',
              'usage' => 'C',
              'desc' => 'Code specifying the type of price change.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5160',
              'name' => 'totalMonetaryAmount',
              'usage' => 'I',
              'desc' => 'To specify a total monetary amount.',
              'type' => 'n',
              'maxlength' => '20',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
          9 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
          10 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4183',
              'name' => 'specialConditionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a special condition.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          11 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          12 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E983',
          'name' => 'rateInformation',
          'desc' => 'To identify the rate or tariff categories, rate or tariff range, processing information, and currency code.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5243',
              'name' => 'rateOrTariffClassDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an applicable rate or tariff class.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6162',
              'name' => 'rangeMinimumQuantity',
              'usage' => 'C',
              'desc' => 'To specify the minimum value of a range.',
              'type' => 'n',
              'maxlength' => '18',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6152',
              'name' => 'rangeMaximumQuantity',
              'usage' => 'C',
              'desc' => 'To specify the maximum value of a range.',
              'type' => 'n',
              'maxlength' => '18',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7365',
              'name' => 'processingIndicatorDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a processing indicator.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E984',
          'name' => 'associatedChargesInformation',
          'desc' => 'Identification of the additional charges that are associated to a product or service.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5261',
              'name' => 'chargeUnitCode',
              'usage' => 'I',
              'desc' => 'Code specifying a charge unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7008',
              'name' => 'itemDescription',
              'usage' => 'C',
              'desc' => 'Free form description of an item.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2155',
              'name' => 'chargePeriodTypeCode',
              'usage' => 'I',
              'desc' => 'Code specifying a type of a charge period.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6345',
              'name' => 'currencyIdentificationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a monetary unit.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4513',
              'name' => 'maintenanceOperationCode',
              'usage' => 'C',
              'desc' => 'Code specifying a maintenance operation.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          9 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7299',
              'name' => 'requirementDesignatorCode',
              'usage' => 'C',
              'desc' => 'Code specifying the requirement designator.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          10 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2018',
              'name' => 'age',
              'usage' => 'I',
              'desc' => 'To specify the length of time that a person or thing has existed.',
              'type' => 'n',
              'maxlength' => '3',
            ),
          ),
          11 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5482',
              'name' => 'percentage',
              'usage' => 'C',
              'desc' => 'To specify a percentage.',
              'type' => 'n',
              'maxlength' => '10',
            ),
          ),
        ),
      ),
    ),
  ),
  'TIF' => 
  array (
    'attributes' => 
    array (
      'id' => 'TIF',
      'name' => 'travellerInformation',
      'desc' => 'To specify traveller(s) and personal details.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E985',
          'required' => 'true',
          'name' => 'travellerSurnameAndRelatedInformation',
          'desc' => 'Identification of the surname of traveller, the type of traveller, number of travellers per surname, status of the surname, and surname language.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3500',
              'required' => 'true',
              'name' => 'familyName',
              'usage' => 'I',
              'desc' => 'Family name (synonym surname).',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3035',
              'name' => 'partyFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code giving specific meaning to a party.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6060',
              'name' => 'quantity',
              'usage' => 'C',
              'desc' => 'Alphanumeric representation of a quantity.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4405',
              'name' => 'statusDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying a status.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3453',
              'name' => 'languageNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the language name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E986',
          'name' => 'travellerDetails',
          'desc' => 'To identify the given or first name and title of a traveller, the traveller type, the traveller language, and the sex and age of the traveller.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3460',
              'name' => 'givenName',
              'usage' => 'I',
              'desc' => 'An individual\'s given name.',
              'type' => 'an',
              'maxlength' => '70',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3035',
              'name' => 'partyFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code giving specific meaning to a party.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1145',
              'name' => 'travellerReferenceIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a reference to a traveller.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3504',
              'name' => 'givenNameTitleDescription',
              'usage' => 'I',
              'desc' => 'Free form description of a title.',
              'type' => 'an',
              'maxlength' => '9',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8219',
              'name' => 'travellerAccompaniedByInfantIndicatorCode',
              'usage' => 'I',
              'desc' => 'Code indicating whether a traveller is accompanied by an infant.',
              'type' => 'an',
              'length' => '1',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3453',
              'name' => 'languageNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying the language name.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3499',
              'name' => 'genderCode',
              'usage' => 'C',
              'desc' => 'Code giving the gender of a person, animal or plant.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2018',
              'name' => 'age',
              'usage' => 'I',
              'desc' => 'To specify the length of time that a person or thing has existed.',
              'type' => 'n',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  'TIZ' => 
  array (
    'attributes' => 
    array (
      'id' => 'TIZ',
      'name' => 'timeZoneInformation',
      'desc' => 'To provide information about a time zone.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E034',
          'required' => 'true',
          'name' => 'timeZone',
          'desc' => 'To specify a time zone.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2029',
              'required' => 'true',
              'name' => 'timeZoneIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a time zone.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2116',
              'name' => 'timeZoneDifferenceQuantity',
              'usage' => 'I',
              'desc' => 'The difference between two defined time zones.',
              'type' => 'n',
              'maxlength' => '4',
            ),
          ),
        ),
      ),
    ),
  ),
  'TRF' => 
  array (
    'attributes' => 
    array (
      'id' => 'TRF',
      'name' => 'trafficRestrictionDetails',
      'desc' => 'To provide details which restrict traffic.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E007',
          'required' => 'true',
          'name' => 'trafficRestrictionDetails',
          'desc' => 'To provide details which restrict traffic.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8015',
              'name' => 'trafficRestrictionCode',
              'usage' => 'I',
              'desc' => 'Code specifying a traffic restriction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8017',
              'name' => 'trafficRestrictionApplicationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the application of a restriction to traffic.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8035',
              'name' => 'trafficRestrictionTypeCodeQualifier',
              'usage' => 'I',
              'desc' => 'Code qualifying a type of traffic restriction.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '4440',
              'name' => 'freeText',
              'usage' => 'C',
              'desc' => 'Free form text.',
              'type' => 'an',
              'maxlength' => '512',
            ),
          ),
        ),
      ),
    ),
  ),
  'TVL' => 
  array (
    'attributes' => 
    array (
      'id' => 'TVL',
      'name' => 'travelProductInformation',
      'desc' => 'To specify details related to a travel product.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E987',
          'name' => 'productDateAndTime',
          'desc' => 'To specify first the beginning date and time followed by the ending date and time associated with a product or service.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2000',
              'name' => 'date',
              'usage' => 'I',
              'desc' => 'To specify a date.',
              'type' => 'an',
              'maxlength' => '14',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2002',
              'name' => 'time',
              'usage' => 'I',
              'desc' => 'To specify a time.',
              'type' => 'n',
              'length' => '4',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '2148',
              'name' => 'dateVariationNumber',
              'usage' => 'I',
              'desc' => 'A number to indicate the difference between two dates.',
              'type' => 'n',
              'maxlength' => '5',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E975',
          'name' => 'location',
          'desc' => 'To identify a location.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3225',
              'name' => 'locationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3224',
              'name' => 'locationName',
              'usage' => 'C',
              'desc' => 'Name of the location.',
              'type' => 'an',
              'maxlength' => '256',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3207',
              'name' => 'countryIdentifier',
              'usage' => 'C',
              'desc' => 'Identification of the name of the country or other geographical entity as defined in ISO 3166-1 and UN/ECE Recommendation 3.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3227',
              'name' => 'locationFunctionCodeQualifier',
              'usage' => 'C',
              'desc' => 'Code identifying the function of a location.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E988',
          'name' => 'companyIdentification',
          'desc' => 'To identify the company and any associated companies.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'required' => 'true',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3036',
              'name' => 'partyName',
              'usage' => 'C',
              'desc' => 'Name of a party.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E989',
          'name' => 'productIdentificationDetails',
          'desc' => 'Code, number or name to identify a specific product or service and a code to identify the level or type of product or service.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7135',
              'name' => 'productIdentifier',
              'usage' => 'I',
              'desc' => 'To identify a product.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7037',
              'name' => 'characteristicDescriptionCode',
              'usage' => 'C',
              'desc' => 'A code specifying a characteristic.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7139',
              'name' => 'productCharacteristicIdentificationCode',
              'usage' => 'I',
              'desc' => 'Code specifying the identification of a product characteristic.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7009',
              'name' => 'itemDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an item.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7009',
              'name' => 'itemDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an item.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7009',
              'name' => 'itemDescriptionCode',
              'usage' => 'C',
              'desc' => 'Code specifying an item.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '9608',
              'name' => 'productName',
              'usage' => 'I',
              'desc' => 'Name identifying a product.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E990',
          'name' => 'sequenceNumberDetails',
          'desc' => 'To specify sequence number information about a product or service.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'required' => 'true',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          4 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          5 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          6 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          7 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
          8 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '1050',
              'name' => 'sequencePositionIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a position in a sequence.',
              'type' => 'an',
              'maxlength' => '10',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1082',
          'name' => 'lineItemIdentifier',
          'usage' => 'C',
          'desc' => 'To identify a line item.',
          'type' => 'an',
          'maxlength' => '6',
        ),
      ),
      6 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '7365',
          'name' => 'processingIndicatorDescriptionCode',
          'usage' => 'C',
          'desc' => 'Code specifying a processing indicator.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
    ),
  ),
  'TXS' => 
  array (
    'attributes' => 
    array (
      'id' => 'TXS',
      'name' => 'taxes',
      'desc' => 'To specify tax details.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E020',
          'required' => 'true',
          'name' => 'taxDetails',
          'desc' => 'To specify the type of tax, the tax amount and the rate.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5153',
              'required' => 'true',
              'name' => 'dutyOrTaxOrFeeTypeNameCode',
              'usage' => 'C',
              'desc' => 'Code specifying a type of duty, tax or fee.',
              'type' => 'an',
              'maxlength' => '3',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5004',
              'name' => 'monetaryAmount',
              'usage' => 'C',
              'desc' => 'To specify a monetary amount.',
              'type' => 'n',
              'maxlength' => '35',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '5278',
              'name' => 'dutyOrTaxOrFeeRate',
              'usage' => 'C',
              'desc' => 'Rate of a duty or tax or fee.',
              'type' => 'an',
              'maxlength' => '17',
            ),
          ),
        ),
      ),
    ),
  ),
  'VEH' => 
  array (
    'attributes' => 
    array (
      'id' => 'VEH',
      'name' => 'vehicle',
      'desc' => 'To convey information about a vehicle.',
    ),
    'details' => 
    array (
      0 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '8053',
          'name' => 'equipmentTypeCodeQualifier',
          'usage' => 'C',
          'desc' => 'Code qualifying a type of equipment.',
          'type' => 'an',
          'maxlength' => '3',
        ),
      ),
      1 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E991',
          'name' => 'vehicleInformation',
          'desc' => 'To identify a vehicle by make or model and vehicle identification number.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '8154',
              'name' => 'equipmentSizeAndTypeDescription',
              'usage' => 'C',
              'desc' => 'Free form description of the size and type of equipment.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '7402',
              'name' => 'objectIdentifier',
              'usage' => 'C',
              'desc' => 'Code specifying the unique identity of an object.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E211',
          'name' => 'dimensions',
          'desc' => 'Specification of the dimensions of a transportable unit.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6411',
              'required' => 'true',
              'name' => 'measurementUnitCode',
              'usage' => 'C',
              'desc' => 'Code specifying the unit of measurement.',
              'type' => 'an',
              'maxlength' => '8',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6168',
              'name' => 'lengthMeasure',
              'usage' => 'C',
              'desc' => 'To specify the value of a length dimension.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          2 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6140',
              'name' => 'widthMeasure',
              'usage' => 'C',
              'desc' => 'To specify the value of a width dimension.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
          3 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '6008',
              'name' => 'heightMeasure',
              'usage' => 'C',
              'desc' => 'To specify the value of a height dimension.',
              'type' => 'n',
              'maxlength' => '15',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '6314',
          'name' => 'measure',
          'usage' => 'C',
          'desc' => 'To specify the value of a measurement.',
          'type' => 'an',
          'maxlength' => '18',
        ),
      ),
      4 => 
      array (
        'type' => 'composite_data_element',
        'attributes' => 
        array (
          'id' => 'E992',
          'name' => 'position',
          'desc' => 'To identify the position of an item.',
        ),
        'details' => 
        array (
          0 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3223',
              'name' => 'firstRelatedLocationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a first related location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
          1 => 
          array (
            'type' => 'data_element',
            'attributes' => 
            array (
              'id' => '3233',
              'name' => 'secondRelatedLocationIdentifier',
              'usage' => 'C',
              'desc' => 'To identify a second related location.',
              'type' => 'an',
              'maxlength' => '35',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'type' => 'data_element',
        'attributes' => 
        array (
          'id' => '1145',
          'name' => 'travellerReferenceIdentifier',
          'usage' => 'I',
          'desc' => 'To identify a reference to a traveller.',
          'type' => 'an',
          'maxlength' => '35',
        ),
      ),
    ),
  ),
);