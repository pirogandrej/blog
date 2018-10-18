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
                    <ul class="sidebar-menu">
                        <li><a href="{{route('users.index')}}"><i class="fa fa-users"></i> <span>Пользователи</span></a></li>
                        <li><a href="{{route('categories.index')}}"><i class="fa fa-list-ul"></i> <span>Категории</span></a></li>
                        <li><a href="#"><i class="fa fa-sticky-note-o"></i> <span>Посты</span></a></li>
                        <li><a href="#"><i class="fa fa-commenting"></i><span>Комментарии</span></a></li>
                        <li><a href="{{route('tags.index')}}"><i class="fa fa-tags"></i> <span>Теги</span></a></li>
                    </ul>
                </section>
            </aside>

            @yield('content')

        </div>

        @include('admin.layouts.scripts')

    </body>
</html>
