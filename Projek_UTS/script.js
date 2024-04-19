    $(document).ready(function() {
        $('.increment-btn').click(function() {
            var input = $(this).prevAll('.quantity-input').first();
            var newValue = parseInt(input.val()) + 1;
            input.val(newValue);
        });

        $('.decrement-btn').click(function() {
            var input = $(this).nextAll('.quantity-input').first();
            var newValue = parseInt(input.val()) - 1;
            if (newValue >= 0) {
                input.val(newValue);
            }
        });
    });
