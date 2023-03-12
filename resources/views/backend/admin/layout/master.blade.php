<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.admin.includes.head')
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            @include('backend.admin.includes.nav')
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('backend.admin.includes.sidenav')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield('page_title')</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">@yield('page_title')</li>
                        </ol>
                        @yield('content')
                    </div>
                </main>

                <footer class="py-4 bg-light mt-auto">
                    @include('backend.admin.includes.footer')
                </footer>
            </div>
        </div>
        @include('backend.admin.includes.script')
    </body>
</html>
