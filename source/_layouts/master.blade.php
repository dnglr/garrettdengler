<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">
        <meta name="keywords" content="{{ $page->siteKeywords }} ">
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Roboto+Mono|Roboto:500" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script type="text/javascript">
            var supportsWoff2=function(){if(!("FontFace"in window))return!1;var A=new FontFace("t",'url( "data:font/woff2;base64,d09GMgABAAAAAADwAAoAAAAAAiQAAACoAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAABmAALAogOAE2AiQDBgsGAAQgBSAHIBuDAciO1EZ3I/mL5/+5/rfPnTt9/9Qa8H4cUUZxaRbh36LiKJoVh61XGzw6ufkpoeZBW4KphwFYIJGHB4LAY4hby++gW+6N1EN94I49v86yCpUdYgqeZrOWN34CMQg2tAmthdli0eePIwAKNIIRS4AGZFzdX9lbBUAQlm//f262/61o8PlYO/D1/X4FrWFFgdCQD9DpGJSxmFyjOAGUU4P0qigcNb82GAAA" ) format( "woff2" )',{});return A.load().catch(function(){}),"loading"==A.status||"loaded"==A.status}();
            var fontPath = supportsWoff2 ? "{{ mix('css/font.woff2.css', 'assets/build') }}" : "{{ mix('css/font.woff.css', 'assets/build') }}";
            !function(){"use strict";function e(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function t(e){return window.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===e}function n(){if(window.localStorage&&window.XMLHttpRequest)if(t(o))c(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",o,!0),e(n,"load",function(){4===n.readyState&&(c(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=o)}),n.send()}else{var a=document.createElement("link");a.href=o,a.rel="stylesheet",a.type="text/css",document.getElementsByTagName("head")[0].appendChild(a),document.cookie="font_css_cache"}}function c(e){var t=document.createElement("style");t.innerHTML=e,document.getElementsByTagName("head")[0].appendChild(t)}var o=fontPath;window.localStorage&&localStorage.font_css_cache||document.cookie.indexOf("font_css_cache")>-1?n():e(window,"load",n)}();
        </script>
        <noscript><link rel="stylesheet" href="{{ mix('css/font.woff.css', 'assets/build') }}"></noscript>
    </head>
    <body class="body body--{{$page_name ?? 'generic'}} " >
        @include('_partials.header', ['page_name' => $page_name ?? 'generic'])
        <main class="main">
            @yield('body')
        </main>
        @include('_partials.footer')
        <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script type="application/ld+json">
            {
              "@context": "http://schema.org",
              "@type": "Person",
              "image": "assets/images/garrett.jpg",
              "jobTitle": "Senior Developer",
              "name": "Garrett Dengler",
              "alumniOf": "UNC Charlotte",
              "gender": "male",
              "url": "https://garrett.dnglr.com",
                "sameAs" : ["https://www.linkedin.com/in/garrettdengler",
              "https://twitter.com/garrettdengler",
              "https://instagram.com/garrettdengler",
              "https://github.com/dnglr"]
            }
        </script>
    </body>
</html>
