<div class='convert_currency_inline_div'>
    <form class='convert_currency_inline_form' action="" method="post">
    <p class="note">Prices are in {$base_currency} and converted at current bank rates to
    <select class='note convert_currency_to' name='to' onchange="$(this).closest('form').submit();" title = "Currency conversion rates by Yahoo">
    {html_options options=$currencies selected=$to}
    </select>
    <input type="submit" name="convert" class="button convert_currency_inline_convert" value="Convert" />  (in brackets)</p>
    </form>
</div>