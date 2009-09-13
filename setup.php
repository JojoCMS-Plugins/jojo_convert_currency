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

/* Add convert currency page if it does not exist */
$data = JOJO::selectQuery("SELECT * FROM {page} WHERE pg_link='JOJO_Plugin_jojo_convert_currency'");
if (count($data) == 0) {
    echo "Adding <b>convert currency</b> Page to menu<br />";
    JOJO::insertQuery("INSERT INTO {page} SET pg_title='Convert Currency', pg_link='JOJO_Plugin_jojo_convert_currency', pg_url='convert_currency'");
}

/* Ensure there is a folder for caching the currency rates  */
$res = JOJO::RecursiveMkdir(_CACHEDIR . '/currency');
if ($res === true) {
    echo "jojo_convert_currency: Created folder: " . _CACHEDIR . '/currency';
} elseif($res === false) {
    echo 'jojo_convert_currency: Could not automatically create ' .  _CACHEDIR . '/currency' . 'folder on the server. Please create this folder and assign 777 permissions.';
}