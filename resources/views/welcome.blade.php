<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>apiNG Advanced Demo</title>

    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>

    <!-- apiNG -->
    <script src="//cdn.jsdelivr.net/aping/latest/aping.min.js"></script>

    <!-- apiNG config for api keys (only for plugins, that needs api keys) -->
    <script src="js/socialwall/aping-config.js"></script>

    <!-- apiNG plugins -->
    <script src="//cdn.jsdelivr.net/aping.plugin-flickr/latest/aping-plugin-flickr.min.js"></script>
    <script src="//cdn.jsdelivr.net/aping.plugin-dailymotion/latest/aping-plugin-dailymotion.min.js"></script>
    <script src="//cdn.jsdelivr.net/aping.plugin-rss/latest/aping-plugin-rss.min.js"></script>
    <script src="//cdn.jsdelivr.net/aping.plugin-wikipedia/latest/aping-plugin-wikipedia.min.js"></script>

    <!-- apiNG design -->
    <script src="js/socialwall/aping-design-default.js"></script>
    <link rel="stylesheet" href="js/socialwall/aping-design-default.css">

    <!-- apiNG design dependencies -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-sanitize.min.js"></script>
    <script src="//cdn.jsdelivr.net/angular.masonry-packed/0.14.5/angular-masonry-packed.min.js"></script>
    <script src="//cdn.jsdelivr.net/angular.linkify/1.2.0/angular-linkify.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment-with-locales.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-moment/0.10.3/angular-moment.min.js"></script>

    <!-- angular module -->
    <script src="js/socialwall/app.js"></script>

    <link href='//fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>

</head>

<body ng-app="app" style="background-color:#fed;">

<div class="container">
    <br>

    <!-- apiNG: http://johnnythetank.github.io/apiNG/ -->
    <!-- configure flickr: https://github.com/JohnnyTheTank/apiNG-plugin-flickr -->
    <!-- configure dailymotion: https://github.com/JohnnyTheTank/apiNG-plugin-dailymotion -->
    <!-- configure rss: https://github.com/JohnnyTheTank/apiNG-plugin-rss -->
    <!-- configure wikipedia: https://github.com/JohnnyTheTank/apiNG-plugin-wikipedia -->
    <!-- add more plugins: https://aping.readme.io/docs/all-plugins -->

    <aping
            template-url="js/socialwall/social_template.html"
            items="500"
            model="social"
            order-by="timestamp"
            order-reverse="true"
            aping-jsonloader="[{'path':'json/events.json'}]">
    </aping>

    <script type="text/javascript">

    </script>



</div>

</body>

</html>