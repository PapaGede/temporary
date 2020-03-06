<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index.html"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard</a>
                    <a class="nav-link" href="index.html"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Students</a>
                    <a class="nav-link" href="index.html"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Rooms</a>

                </div>
            </div>

        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                @yield('content')


            </div>
        </main>
        @include('partials._dashFooter')
    </div>
</div>
