<div id='convert_currency_inline_div'>
    <form id='convert_currency_inline_form' action="" method="post">
    <p class="note">Prices shown are in {$base_currency}. Calculate in  
    <select id='convert_currency_to' name='to' onchange="$('#convert_currency_inline_form').submit();" title = "Currency conversion rates by Yahoo" class="note">
    {html_options options=$currencies selected=$to}
    </select>
    <input type="submit" name="convert" id="convert_currency_inline_convert" value="Convert" class="button" /></p>
    </form>
    <script type='text/javascript'>{literal}
        $('#convert_currency_inline_convert').hide();
    {/literal}</script>
</div>