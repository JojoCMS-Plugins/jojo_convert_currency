<?php

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past

$from   = Jojo::getFormData('from', '');
$to     = Jojo::getFormData('to', '');
$amount = Jojo::getFormData('amount', 1);

if (!$from || !$to) {
    exit;
}

if (!is_numeric($amount)) {
    $amount = 1;
}

$_SESSION['jojo_currency_from']   = $from;
$_SESSION['jojo_currency_to']     = $to;
$_SESSION['jojo_currency_amount'] = $amount;

/* Get Exchange Rate */
$cacheFile = _CACHEDIR . "/currency/$from-$to";
if (!file_exists($cacheFile) || ((time() - filemtime($cacheFile)) > 1800 )) {
    /* Update cached copy */
    require_once(_PLUGINDIR . '/jojo_convert_currency/classes/JOJO/Currency.php');
    $c = new Jojo_Currency_yahoo();
    $rate = $c->getRate($from, $to, true);
    file_put_contents($cacheFile, $rate);
} else {
    /* Use cached copy */
    $rate = file_get_contents($cacheFile);
}

echo json_encode(sprintf('%s %s = <strong>%0.2f %s</strong>', $amount, $from, $amount * $rate, $to));