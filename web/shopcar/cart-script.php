<script>
    function showCartCount(cart) {
        let total = 0;
        for (let i in cart) {
            total += cart[i].quantity;
            // total ++;
        }
        $('.cart-count').text(total);
        $('.shopCount-CL').text(total);
        $('.carCount-CL').text(total);
    }
    $.get('/Upick/web/shopcar/cart-api.php', function(data) {
        showCartCount(data);
    }, 'json');
</script>