<form id='convert_currency_form' action="{$SITEURL}/convert_currency" method="post">
<h5>Convert&nbsp;<input type="text" id='convert_currency_amount' style="margin-bottom: 2px;" name="amount" value="{if $amount}{$amount}{else}1{/if}" size="5" onchange="convert_currency(); return false;" />
 <select id='convert_currency_from' name='from' onchange="convert_currency();">
{html_options options=$currencies selected=$from}
</select></h5>

<h5>To <select id='convert_currency_to' name='to' onchange="convert_currency();">
{html_options options=$currencies selected=$to}
</select></h5>

<div id='convert_currency_result'>
    {if $rate}
    {$amount} {$from} = <strong>{$converted} {$to}</strong>
    {/if}
</div>
<br />

<input type="submit" name="convert" id="convert_currency_convert" value="Convert"  class="button" />
</form>
<script type='text/javascript'>{literal}
    $('#convert_currency_convert').hide();
    $('#convert_currency_form').submit(function() { return false; });
    convert_currency();
{/literal}</script>