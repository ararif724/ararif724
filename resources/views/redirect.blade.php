<!DOCTYPE html>
<html lang="en">

<head>
    @include('/partials/googleAnalytics')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Redirecting in <span></span> seconds</p>
    <script>
        gtag('event', 'page_view', {
            'event_callback': function() {
                window.location = '{{($link)}}';
            }
        });

        let fallBackRedirectTimeout = 5;

        setTimeout(function() {
            window.location = '{{($link)}}';
        }, fallBackRedirectTimeout * 1000);

        document.querySelector("p span").innerHTML = fallBackRedirectTimeout--;
        setInterval(function() {
            document.querySelector("p span").innerHTML = fallBackRedirectTimeout--;
        }, 1000);
    </script>
</body>

</html>