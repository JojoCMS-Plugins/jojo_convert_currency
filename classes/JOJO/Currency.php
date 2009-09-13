<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007 Harvey Kane <code@ragepank.com>
 * Copyright 2007 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

class JOJO_Currency
{
    function getCurrencies()
    {
        return array(
            'NZD'  => "New Zealand Dollar",
            'USD'  => "U.S. Dollar",
            'EUR'  => "Euro",
            'GBP'  => "British Pound",

            'AFA'  => "Afghanistan Afghani",
            'ALL'  => "Albanian Lek",
            'DZD'  => "Algerian Dinar",
            'ARS'  => "Argentine Peso",
            'AWG'  => "Aruba Florin",
            'AUD'  => "Australian Dollar",
            'BSD'  => "Bahamian Dollar",
            'BHD'  => "Bahraini Dinar",
            'BDT'  => "Bangladesh Taka",
            'BBD'  => "Barbados Dollar",
            'BZD'  => "Belize Dollar",
            'BMD'  => "Bermuda Dollar",
            'BTN'  => "Bhutan Ngultrum",
            'BOB'  => "Bolivian Boliviano",
            'BWP'  => "Botswana Pula",
            'BRL'  => "Brazilian Real",
            'GBP'  => "British Pound",
            'BND'  => "Brunei Dollar",
            'BIF'  => "Burundi Franc",
            'XOF'  => "CFA Franc (BCEAO)",
            'XAF'  => "CFA Franc (BEAC)",
            'KHR'  => "Cambodia Riel",
            'CAD'  => "Canadian Dollar",
            'CVE'  => "Cape Verde Escudo",
            'KYD'  => "Cayman Islands Dollar",
            'CLP'  => "Chilean Peso",
            'CNY'  => "Chinese Yuan",
            'COP'  => "Colombian Peso",
            'KMF'  => "Comoros Franc",
            'CRC'  => "Costa Rica Colon",
            'HRK'  => "Croatian Kuna",
            'CUP'  => "Cuban Peso",
            'CYP'  => "Cyprus Pound",
            'CZK'  => "Czech Koruna",
            'DKK'  => "Danish Krone",
            'DJF'  => "Dijibouti Franc",
            'DOP'  => "Dominican Peso",
            'XCD'  => "East Caribbean Dollar",
            'EGP'  => "Egyptian Pound",
            'SVC'  => "El Salvador Colon",
            'EEK'  => "Estonian Kroon",
            'ETB'  => "Ethiopian Birr",
            'EUR'  => "Euro",
            'FKP'  => "Falkland Islands Pound",
            'GMD'  => "Gambian Dalasi",
            'GHC'  => "Ghanian Cedi",
            'GIP'  => "Gibraltar Pound",
            'XAU'  => "Gold Ounces",
            'GTQ'  => "Guatemala Quetzal",
            'GNF'  => "Guinea Franc",
            'GYD'  => "Guyana Dollar",
            'HTG'  => "Haiti Gourde",
            'HNL'  => "Honduras Lempira",
            'HKD'  => "Hong Kong Dollar",
            'HUF'  => "Hungarian Forint",
            'ISK'  => "Iceland Krona",
            'INR'  => "Indian Rupee",
            'IDR'  => "Indonesian Rupiah",
            'IQD'  => "Iraqi Dinar",
            'ILS'  => "Israeli Shekel",
            'JMD'  => "Jamaican Dollar",
            'JPY'  => "Japanese Yen",
            'JOD'  => "Jordanian Dinar",
            'KZT'  => "Kazakhstan Tenge",
            'KES'  => "Kenyan Shilling",
            'KRW'  => "Korean Won",
            'KWD'  => "Kuwaiti Dinar",
            'LAK'  => "Lao Kip",
            'LVL'  => "Latvian Lat",
            'LBP'  => "Lebanese Pound",
            'LSL'  => "Lesotho Loti",
            'LRD'  => "Liberian Dollar",
            'LYD'  => "Libyan Dinar",
            'LTL'  => "Lithuanian Lita",
            'MOP'  => "Macau Pataca",
            'MKD'  => "Macedonian Denar",
            'MGF'  => "Malagasy Franc",
            'MWK'  => "Malawi Kwacha",
            'MYR'  => "Malaysian Ringgit",
            'MVR'  => "Maldives Rufiyaa",
            'MTL'  => "Maltese Lira",
            'MRO'  => "Mauritania Ougulya",
            'MUR'  => "Mauritius Rupee",
            'MXN'  => "Mexican Peso",
            'MDL'  => "Moldovan Leu",
            'MNT'  => "Mongolian Tugrik",
            'MAD'  => "Moroccan Dirham",
            'MZM'  => "Mozambique Metical",
            'MMK'  => "Myanmar Kyat",
            'NAD'  => "Namibian Dollar",
            'NPR'  => "Nepalese Rupee",
            'ANG'  => "Neth Antilles Guilder",
            'NIO'  => "Nicaragua Cordoba",
            'NGN'  => "Nigerian Naira",
            'KPW'  => "North Korean Won",
            'NOK'  => "Norwegian Krone",
            'OMR'  => "Omani Rial",
            'XPF'  => "Pacific Franc",
            'PKR'  => "Pakistani Rupee",
            'XPD'  => "Palladium Ounces",
            'PAB'  => "Panama Balboa",
            'PGK'  => "Papua New Guinea Kina",
            'PYG'  => "Paraguayan Guarani",
            'PEN'  => "Peruvian Nuevo Sol",
            'PHP'  => "Philippine Peso",
            'XPT'  => "Platinum Ounces",
            'PLN'  => "Polish Zloty",
            'QAR'  => "Qatar Rial",
            'ROL'  => "Romanian Leu",
            'RUB'  => "Russian Rouble",
            'WST'  => "Samoa Tala",
            'STD'  => "Sao Tome Dobra",
            'SAR'  => "Saudi Arabian Riyal",
            'SCR'  => "Seychelles Rupee",
            'SLL'  => "Sierra Leone Leone",
            'XAG'  => "Silver Ounces",
            'SGD'  => "Singapore Dollar",
            'SKK'  => "Slovak Koruna",
            'SIT'  => "Slovenian Tolar",
            'SBD'  => "Solomon Islands Dollar",
            'SOS'  => "Somali Shilling",
            'ZAR'  => "South African Rand",
            'LKR'  => "Sri Lanka Rupee",
            'SHP'  => "St Helena Pound",
            'SDD'  => "Sudanese Dinar",
            'SRG'  => "Surinam Guilder",
            'SZL'  => "Swaziland Lilageni",
            'SEK'  => "Swedish Krona",
            'TRY'  => "Turkey Lira",
            'CHF'  => "Swiss Franc",
            'SYP'  => "Syrian Pound",
            'TWD'  => "Taiwan Dollar",
            'TZS'  => "Tanzanian Shilling",
            'THB'  => "Thai Baht",
            'TOP'  => "Tonga Pa'anga",
            'TTD'  => "Trinidad&amp;Tobago Dollar",
            'TND'  => "Tunisian Dinar",
            'TRL'  => "Turkish Lira",
            'USD'  => "U.S. Dollar",
            'AED'  => "UAE Dirham",
            'UGX'  => "Ugandan Shilling",
            'UAH'  => "Ukraine Hryvnia",
            'UYU'  => "Uruguayan New Peso",
            'VUV'  => "Vanuatu Vatu",
            'VEB'  => "Venezuelan Bolivar",
            'VND'  => "Vietnam Dong",
            'YER'  => "Yemen Riyal",
            'YUM'  => "Yugoslav Dinar",
            'ZMK'  => "Zambian Kwacha",
            'ZWD'  => "Zimbabwe Dollar"
        );
    }

    function getRate($from, $to)
    {
        return false;
    }
}


class JOJO_Currency_webservicex extends JOJO_Currency
{
    function getRate($from, $to, $snoopy = true)
    {
        /* Set the $snoopy option to true to avoid any fopen file security issues on some shared hosts */

        $url = sprintf("http://www.webservicex.net/CurrencyConvertor.asmx/ConversionRate?FromCurrency=%s&ToCurrency=%s",
                $from,
                $to);

        if ($snoopy) {
            require_once(_PLUGINDIR . "/jojo_convert_currency/external/Snoopy/Snoopy.class.php");
            $snoopy = new Snoopy;
            $snoopy->fetch($url);
            $res = trim(strip_tags($snoopy->results));
        } else {
            $res = trim(strip_tags(implode('', file($url))));
        }
        return $res;
    }
}

class JOJO_Currency_yahoo extends JOJO_Currency {
    /**
     * Currency conversion API function
     *
     * This function converts two currencies using exchange rates from Yahoo Finance.
     * The currency codes are standard ISO 3-letter codes, and you can find the details
     * here:
     *  http://www.oanda.com/site/help/iso_code.shtml
     *
     * Here is an example on how to use it:
     *
     *   $from = 'CAD';
     *   $to   = 'USD';
     *   $amt  = 20;
     *   $ret = currency_exchange($from, $to, $amt);
     *   if ($ret['status'] == FALSE)
     *   {
     *     drupal_set_message(t('An error occured: '). $ret['message']);
     *   }
     *   else
     *   {
     *     print $amt .' '. $from .' = '. $ret['value'];
     *   }
     *
     * @param $currency_from
     *   Currency to convert from
     *
     * @param $currency_to
     *   Currency to convert to
     *
     * @param $amount
     *   Option amount to convert. If not supplied, 1 is assumed.
     *
     * @return $result
     *   An associative array that contains the following:
     *    $result['status'] TRUE or FALSE
     *    $result['message']'success' when status is TRUE, otherwise, contains a
     *                      descriptive error text
     *   The following items are only returned when status is TRUE
     *    $result['value']  $amount * exchange rate of $currency_from into $currency_to
     *    $result['date']   Date of the last update to the rates (Format is "m/d/yyyy")
     *    $result['time']   Time of the last update to the rates (Format is "h:mmpm")
     */
     function _currency_api_get_desc($currency)
     {
        foreach ($this->getCurrencies() as $key => $description) {
            if ($key == $currency) {
                return $description;
            }
        }
        return FALSE;
     }

     function getRate($currency_from, $currency_to, $snoopy = true)
     {
         $amount = 1;
         $currency_array = array(
             's'  => 'Currencies',
             'l1' => 'Last',
             'd1' => 'Date',
             't1' => 'Time'
             );

         $result = array();
         $result['status']  = FALSE;
         $result['message'] = '';
         $result['value']   = '';
         $result['date']    = '';
         $result['time']    = '';

         $from = strtoupper($currency_from);
         $to   = strtoupper($currency_to);

         $url = 'http://finance.yahoo.com/d/quotes.csv?e=.csv&f='. $this->_currency_api_get_fields($currency_array) .'&s='. $from . $to .'=X';

         // Validate the passed currency codes, to make sure they are valid
         if (FALSE == $this->_currency_api_get_desc($from)) {
             $msg = "currency: Invalid currency_from=$from";
             $result['message'] = $msg;
             $result['status'] = FALSE;
         }

         if (FALSE == $this->_currency_api_get_desc($currency_to)) {
             $msg = "currency: Invalid currency_to=$to";
             return FALSE;
             $result['message'] = $msg;
             $result['status'] = FALSE;
         }

         if (!is_numeric($amount)) {
             $msg = "currency: Invalid amount=$amount";
             $result['message'] = $msg;
             $result['status'] = FALSE;
         }

         $handle = @fopen($url, 'r');
         if ($handle) {
             if ($record = fgets($handle, 4096)) {
                 fclose($handle);
                 $currency_data = explode(',', $record);
                 $rate = $currency_data[1];
                 $date = $currency_data[2];
                 $time = $currency_data[3];

                 // Calculate the result
                 $value = $amount * $rate;

                 // Log it

                 // Got what we need
                 $result['value']  = $value;
                 $result['date']   = $date;
                 $result['time']   = $time;
                 $result['status'] = TRUE;
                 $result['message']= 'success';
             } else {
                 $msg = 'currency: fgets failed';
                 $result['status'] = FALSE;
                 $result['message'] = $msg;
             }
         } else {
             $msg = 'currency: cannot contact Yahoo Finance host';
             $result['status'] = FALSE;
             $result['message'] = $msg;
         }

         return $result['value'];
     }


     function _currency_api_get_fields($array) {
         $field_string = '';
         while (list($field, $header) = each($array)) {
             $field_string .= $field;
         }

         return $field_string;
     }
}