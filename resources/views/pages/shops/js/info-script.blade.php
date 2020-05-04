<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<script>
    var id = @json(auth::user()->id);

    const getLink = () => {
        $("textarea[name='link']").val('https://www.suksamarket.com/agent/' + id);
    }

    const copyLink = () => {
        $("textarea[name='link']").select();
        document.execCommand('copy');

    }

</script>
