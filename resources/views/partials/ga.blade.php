<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138230003-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}

    gtag('js', new Date());

    gtag('config', 'UA-138230003-1');
    gtag('config', 'UA-28804977-42');

    @auth
        gtag('set', {'user_id': '{{ auth()->user()->id }}'});
    @endauth

    window.onload = function() {
        $('a').on('click', function() {
            $this = $(this);

            gtag('event', 'click', {
                'event_category': $this.text(),
                'event_label': window.location.pathname,
                'value': $this.attr('href')
            });
        });
    }
</script>
