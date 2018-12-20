<!doctype html>
<html>

    <head>
        @include('admin.layouts.head')
    </head>

    <body class="hold-transition skin-blue sidebar-mini">

        <div class="wrapper">

            <header class="main-header">

                <a href="{{route('dashboard.index')}}" class="logo">
                    <span class="logo-mini"><b>A</b></span>
                    <span class="logo-lg"><b>Admin</b></span>
                </a>

                <nav class="navbar navbar-static-top">

                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                </nav>
            </header>

            <aside class="main-sidebar">

                <section class="sidebar">

                    @include('admin.layouts._sidebar')

                </section>

            </aside>

            @yield('content')

            <div class="control-sidebar-bg"></div>
        </div>

        @include('admin.layouts.scripts')

    </body>
</html>
