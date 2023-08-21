<!DOCTYPE html>
<html lang="en">

<head>
    @include('/partials/googleAnalytics')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Redirecting....</p>
    <script>
        gtag('event', 'page_view', {
            'event_callback': function() {
                window.location = '{{($link)}}';
            }
        });
    </script>
</body>

</html>