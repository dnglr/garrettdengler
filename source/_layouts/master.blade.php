<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Garrett Dengler | Charlotte, NC Web Developer</title>
        <meta name="description" content="Garrett Dengler is a Charlotte, NC based Senior Full Stack Web Developer focused on Laravel PHP development.">
        <meta name="keywords" content="web developer, charlotte nc, charlotte web developer, laravel, php">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
        <script type="text/javascript">
            var supportsWoff2=function(){if(!("FontFace"in window))return!1;var A=new FontFace("t",'url( "data:font/woff2;base64,d09GMgABAAAAAADwAAoAAAAAAiQAAACoAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAABmAALAogOAE2AiQDBgsGAAQgBSAHIBuDAciO1EZ3I/mL5/+5/rfPnTt9/9Qa8H4cUUZxaRbh36LiKJoVh61XGzw6ufkpoeZBW4KphwFYIJGHB4LAY4hby++gW+6N1EN94I49v86yCpUdYgqeZrOWN34CMQg2tAmthdli0eePIwAKNIIRS4AGZFzdX9lbBUAQlm//f262/61o8PlYO/D1/X4FrWFFgdCQD9DpGJSxmFyjOAGUU4P0qigcNb82GAAA" ) format( "woff2" )',{});return A.load().catch(function(){}),"loading"==A.status||"loaded"==A.status}();
            var fontPath = supportsWoff2 ? "{{ mix('css/font.woff2.css', 'assets/build') }}" : "{{ mix('css/font.woff.css', 'assets/build') }}";
            !function(){"use strict";function e(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function t(e){return window.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===e}function n(){if(window.localStorage&&window.XMLHttpRequest)if(t(o))c(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",o,!0),e(n,"load",function(){4===n.readyState&&(c(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=o)}),n.send()}else{var a=document.createElement("link");a.href=o,a.rel="stylesheet",a.type="text/css",document.getElementsByTagName("head")[0].appendChild(a),document.cookie="font_css_cache"}}function c(e){var t=document.createElement("style");t.innerHTML=e,document.getElementsByTagName("head")[0].appendChild(t)}var o=fontPath;window.localStorage&&localStorage.font_css_cache||document.cookie.indexOf("font_css_cache")>-1?n():e(window,"load",n)}();
        </script>
        <noscript><link rel="stylesheet" href="{{ mix('css/font.woff.css', 'assets/build') }}"></noscript>
    </head>
    <body>
        @include('_partials.header', ['page_name' => $page_name])
        <main class="main main--{{$page_name ?? 'generic'}}">
            @yield('body')
        </main>
        @include('_partials.footer')
        <script   src="https://code.jquery.com/jquery-3.3.1.slim.min.js"   integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="   crossorigin="anonymous"></script>
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
