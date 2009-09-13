<?php
/**
 *
 * Copyright 2007 Michael Cochrane <code@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

Jojo::addFilter('output', 'inpageconverter', 'jojo_convert_currency');
Jojo::addFilter('output', 'inlineconverter', 'jojo_convert_currency');

$_provides['pluginClasses'] = array(
        'JOJO_Plugin_jojo_convert_currency' => 'Currency - Currency Converter',
        );
        
        
/* Get list of available currencies */
foreach (Jojo::listPlugins('classes/JOJO/Currency.php') as $pluginfile) {
            require_once($pluginfile);
            break;
        }
$c = new JOJO_Currency_yahoo();
$currencies = array_keys($c->getCurrencies());


$_options[] = array(
    'id'          => 'currency_convert_from',
    'category'    => 'Config',
    'label'       => 'Site Currency',
    'description' => 'The base currency for prices on the site and the default currency to convert from',
    'type'        => 'select',
    'default'     => 'NZD',
    'options'     => implode(',', $currencies),
    'category'    => 'Currency Converter',
    'plugin'      => 'jojo_convert_currency'
);

$_options[] = array(
    'id'          => 'currency_convert_to',
    'category'    => 'Config',
    'label'       => 'Default Convert To Currency',
    'description' => 'Default currency to convert to for this site',
    'type'        => 'select',
    'default'     => 'USD',
    'options'     => implode(',', $currencies),
    'category'    => 'Currency Converter',
    'plugin'      => 'jojo_convert_currency'
);
