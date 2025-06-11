$(document).ready(function() {
    $('#search').on('keyup', function() {
        var query = $(this).val();
        if (query.length > 0) {
            $.ajax({
                url: 'search.php',
                method: 'POST',
                data: { query: query },
                success: function(data) {
                    $('#result').html(data);
                }
            });
        } else {
            $('#result').html('');
        }
    });
});
