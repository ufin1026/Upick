<script>
    function showFollowCount(follow) {
        let total = 0;
        for (let i in follow) {
            total += follow[i].quantity;
            // total ++;
        }
    }
    $.get('/Upick/web/member/follow-api.php', function(data) {
        showFollowCount(data);
    }, 'json');
</script>