<!DOCTYPE html>
<html lang="sr">
    @include('layouts.header')
        <body class="template-basketball">
            <div class="site-wrapper clearfix">
                <div class="site-overlay"></div>
                    @include('layouts.nav')
                    @include('layouts.pushy')
                    @if(Route::current()->getName() != 'home')
                        {{--Breadcrumbs--}}
                        @include('layouts.heading')
                    @endif
                    @if(Route::current()->getName() == 'home')
                        @include('layouts.hero')
                    @endif
                        @yield('team-pages-filter')
                        <div class="site-content">
                            <div class="container">
                                    @yield('content')
                            </div>
                        </div>
                    @include('layouts.footer')
            </div>
            @include('layouts.footer-scripts')
        </body>
</html>