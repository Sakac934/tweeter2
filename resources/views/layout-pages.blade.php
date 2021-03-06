<!DOCTYPE html>
<html class="about-bg" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link rel="icon" type="image/x-icon" href="../images/favicon.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/tweeter.css')}}">
    </head>
    <body class="about-bg">
        <div>
            <ul>
                <li><a href="/about"><i class="fab fa-twitter"></i>About</a></li>
                <li><a href="/">Let's go Tweeter</a></li>
                <li><a href="/about">Company</a></li>
                <li><a href="/">Values</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/">Blog</a></li>
                <li><a href="/terms">Terms</a></li>
                <div id="myNav" class="overlay">
            </ul>
        </div>
        <article>
            <h1 class="about-article">
                What's happening in the world and what are people talking about right now.
            </h1>
            <a class="twitter-moment" href="https://twitter.com/i/moments/625792726546558977?ref_src=twsrc%5Etfw">Michelle Obama Opens Special Olympics</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </article>
        @hasSection('legend')
            <div style="border: 3px solid #ccc; border-left: none;">
            @yield('legend')
            </div>
            @endif


            @yield('pages-content')

    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
    @include('partials.footer')
    </body>
</html>
