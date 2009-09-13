function convert_currency() {
    if (!$('#convert_currency_from').val() || !$('#convert_currency_to').val()) {
        return;
    }
    $('#convert_currency_result').html('<img src="images/ajax-loader.gif" alt="Loading"/>');
    $.getJSON('json/convertcurrency.php', {
            'from': $('#convert_currency_from').val(),
            'to': $('#convert_currency_to').val(),
            'amount': $('#convert_currency_amount').val()},
            function(data) {
                $('#convert_currency_result').html(data);
            });
}