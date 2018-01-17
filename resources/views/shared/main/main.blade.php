<!doctype html>
<html lang="en" class="scheme_original">
<head>
    @include('shared.main.head')

    @yield('head')
</head>

<body class="@yield('body-class', 'page body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_over sidebar_hide')">
    <a id="toc_home" class="sc_anchor" title="Home" data-description="<i>Return to Home</i> - <br>navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="<i>Back to top</i> - <br>scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
    <!-- Body wrap -->
    <div class="body_wrap">
        <!-- Page wrap -->
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>

            @include('shared.main.navbar')

            @yield('content')

            @include('shared.main.footer')

        </div>

    </div>

    <a href="coming-soon.html" class="scroll_to_top icon-up" title="Scroll to top"></a>

    @yield('scripts')

    @include('shared.main.scripts')

</body>
</html>