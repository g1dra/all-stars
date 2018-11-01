<!DOCTYPE html>
<html lang="sr">
    @include('layouts.header')
        <body class="template-basketball">
            <div class="site-wrapper clearfix">
                <div class="site-overlay"></div>
                    @include('layouts.nav')
                    @include('layouts.pushy')
                    @include('layouts.hero')
                    @include('layouts.content')
                    @include('layouts.sidebar')
                    @include('layouts.footer')
            </div>
        @include('layouts.footer-scripts')
        </body>
</html>