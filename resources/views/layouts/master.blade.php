<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials._head')
    </head>

    <body>

        <div id='app'>

            {{-- Main page content will be yielded here --}}
            @yield('content')

        </div>

        @include('partials._javascript')

        @yield('scripts')

    </body>

    <!-- Matomo -->
    <script type="text/javascript">
      var _paq = _paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//analytics.scotfavorite.com/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- End Matomo Code -->

</html>
