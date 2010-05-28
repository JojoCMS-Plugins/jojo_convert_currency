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

class JOJO_Plugin_jojo_convert_currency extends JOJO_Plugin
{
    public static function inpageconverter($content)
    {
        if (strpos($content, '[[convert_currency]]') === false) {
            return $content;
        }

        global $smarty;
        foreach (Jojo::listPlugins('classes/JOJO/Currency.php') as $pluginfile) {
            require_once($pluginfile);
            break;
        }

        $c = new JOJO_Currency_yahoo();

        $amount = Util::getFormData('amount', 1);
        $smarty->assign('from',   isset($_SESSION['jojo_currency_from'])   ? $_SESSION['jojo_currency_from'] : Jojo::getOption('currency_convert_from'));
        $smarty->assign('to',     isset($_SESSION['jojo_currency_to'])     ? $_SESSION['jojo_currency_to']   : Jojo::getOption('currency_convert_to'));
        $smarty->assign('amount', isset($_SESSION['jojo_currency_amount']) ? $_SESSION['jojo_currency_amount'] : 1);

        $smarty->assign('currencies', $c->getCurrencies()); //adds an empty element to the start of the array
        return str_replace('[[convert_currency]]', $smarty->fetch('convert-currency.tpl'), $content);
    }

    public static function inlineconverter($content)
    {
        if (strpos($content, '[[convert_currency_inline') === false) {
            return $content;
        }

        global $smarty;

        preg_match_all('/\[\[convert_currency_inline:([^\]]*)\]\]/', $content, $filters);
        $replacestring = $filters[0] ? $filters[0] : '[[convert_currency_inline]]';
        $defaulttocurrency = isset($filters[1][0]) ? $filters[1][0] : '';
        foreach (Jojo::listPlugins('classes/JOJO/Currency.php') as $pluginfile) {
            require_once($pluginfile);
            break;
        }
        $c = new JOJO_Currency_yahoo();

        /* Get Exchange Rate */
        $from   = Jojo::getOption('currency_convert_from');
        $to     = Util::getFormData('to', isset($_SESSION['jojo_currency_to']) ? $_SESSION['jojo_currency_to'] : ($defaulttocurrency ? $defaulttocurrency : Jojo::getOption('currency_convert_to')));
        $_SESSION['jojo_currency_to'] = $to;

        if ($to != $from) {
            $cacheFile = _CACHEDIR . "/currency/$from-$to";
            if (!file_exists($cacheFile) || ((time() - filemtime($cacheFile)) > 1800 )) {
                /* Update cached copy */
                foreach (Jojo::listPlugins('classes/JOJO/Currency.php') as $pluginfile) {
                    require_once($pluginfile);
                    break;
                }
                $c = new JOJO_Currency_yahoo();
                $rate = $c->getRate($from, $to, true);
                file_put_contents($cacheFile, $rate);
            } else {
                /* Use cached copy */
                $rate = file_get_contents($cacheFile);
            }

            /* Location prices in html */
            preg_match_all('#\$([0-9]+[0-9,.]*)#', $content, $prices);

            /* Sort results */
            uasort($prices[1], create_function('$a,$b','return strlen($b) - strlen($a);'));

            $done = array();
            foreach ($prices[1] as $k => $value) {
                $original = $prices[0][$k];
                if (in_array($original, $done)) {
                    continue;
                }
                $new = str_replace(',', '', $value) * $rate;

                $currencies = array(
                                    'USD' => '$',
                                    'NZD' => '$',
                                    'AUD' => '$',
                                    'CAD' => '$',
                                    'GBP' => '&pound;',
                                    'EUR' => '&euro;',
                                    'JPY' => '&yen;',
                                   );

                $decimals      = (strpos($original, '.') && $rate < 10) ? 2 : 0;
                $thousands_sep = strpos($original, ',') ? ',' : '';
                $currencysymbol = isset($currencies[$to]) ? $currencies[$to] : ' ';
                $new_string = sprintf( '%s <span class="converted-currency">(%s%s%s)</span>',
                                    $original,
                                    $to,
                                    $currencysymbol,
                                    number_format($new, $decimals, '.', $thousands_sep)
                                );
                $new_string = str_replace('$', '\$', $new_string) . '$1';
                $pattern = str_replace('$', '\$', "#$original([^0-9])#");
                $content = preg_replace($pattern, $new_string, $content);
                $done[] = $original;
            }
        }

        $smarty->assign('to',     isset($_SESSION['jojo_currency_to']) ? $_SESSION['jojo_currency_to']   : Jojo::getOption('currency_convert_to'));
        $smarty->assign('currencies', $c->getCurrencies());
        $smarty->assign('base_currency', Jojo::getOption('currency_convert_from'));

        return str_replace($replacestring, $smarty->fetch('convert-currency-inline.tpl'), $content);
    }

    public function _getContent()
    {
        global $smarty;

        foreach (Jojo::listPlugins('classes/JOJO/Currency.php') as $pluginfile) {
            require_once($pluginfile);
            break;
        }
        $c = new JOJO_Currency_yahoo();

        $from = Util::getFormData('from', Jojo::getOption('currency_convert_from'));
        $to = Util::getFormData('to', Jojo::getOption('currency_convert_to'));
        $amount = Util::getFormData('amount', 1);

        if (!is_numeric($amount)) {
            $amount = 1;
        }

        if ($from != '' && $to != '') {
            $rate = $c->getRate($from, $to, true);
            $smarty->assign('rate', $rate);
        }
        $converted = sprintf("%0.2f", $amount * $rate);

        $smarty->assign('from', $from);
        $smarty->assign('to', $to);
        $smarty->assign('amount', $amount);
        $smarty->assign('converted', $converted);

        $smarty->assign('currencies', $c->getCurrencies());

        $content = array();
        $content['content'] = $smarty->fetch('convert-currency.tpl');
        return $content;
    }
}