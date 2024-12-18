<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Menarra Finance Dashboard Page" />
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap, Chart JS" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Rachma | @rachmadzii" />

    <title>Menarra Finance - Dashboard</title>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- External CSS -->
    <link rel="stylesheet" href="assets/css/styles.css" type="text/css" media="screen" />

    <!-- CDN Fontawesome -->
    <script src="https://kit.fontawesome.com/32f82e1dca.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @livewireStyles

</head>

<body>
    <!-- Nav Sidebar -->
    <nav class="sidebar offcanvas-md offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false">
        <div class="d-flex justify-content-end m-3 d-block d-md-none">
            <button aria-label="Close" data-bs-dismiss="offcanvas" data-bs-target=".sidebar"
                class="btn p-0 border-0 fs-4">
                <i class="fas fa-close"></i>
            </button>
        </div>
        <div class="d-flex justify-content-center mt-md-5 mb-5">
            {{-- <img src="assets/images/logo.svg" alt="Logo" width="140px" height="40px" /> --}}
        </div>
        <div class="pt-2 d-flex flex-column gap-5">
            <div class="menu p-0">
                <p>Daily Use</p>
                {{-- <a href="#" class="item-menu">
                    <i class="icon ic-stats"></i>
                    Overview
                </a> --}}
                <a href="{{ route('beranda') }}" class="item-menu {{ Request::is('beranda') ? 'active' : '' }}">
                    <i class="icon ic-account"></i>
                    User
                </a>
                <a href="{{ route('rekening') }}" class="item-menu {{ Request::is('rekening') ? 'active' : '' }}">
                    <i class="icon ic-trans"></i>
                    Account
                </a>
                {{-- <a href="#" class="item-menu">
                    <i class="icon ic-msg"></i>
                    Messages
                </a> --}}
                {{-- <a href="#" class="item-menu">
                    <i class="icon ic-stats"></i>
                    Stats
                </a> --}}

            </div>
            <div class="menu">
                <p>Others</p>
                {{-- <a href="#" class="item-menu">
                    <i class="icon ic-settings"></i>
                    Settings
                </a>
                <a href="#" class="item-menu">
                    <i class="icon ic-help"></i>
                    Help
                </a> --}}
                <a href="{{ route('logout') }}" class="item-menu">
                    <i class="icon ic-logout"></i>
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div>
                    <button class="sidebarCollapseDefault btn p-0 border-0 d-none d-md-block"
                        aria-label="Hamburger Button">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <button data-bs-toggle="offcanvas" data-bs-target=".sidebar" aria-controls="sidebar"
                        aria-label="Hamburger Button" class="sidebarCollapseMobile btn p-0 border-0 d-block d-md-none">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
                <div class="d-flex align-items-center justify-content-end gap-4">
                    <input type="text" placeholder="Search report or product" class="search form-control" />
                    <button class="btn btn-search d-flex justify-content-center align-items-center p-0" type="button">
                        <img src="assets/images/ic_search.svg" width="20px" height="20px" />
                    </button>
                    <img src="assets/images/avatar.jpg" alt="Photo Profile" class="avatar" />
                </div>
            </div>
        </nav>
        @yield('content')
        {{-- <section class="p-3">
            <header>
                <h3>Overview</h3>
                <p>Manage data for growth</p>
            </header>
            <div class="information d-flex flex-column gap-5">
                <div class="row px-1 mb-2 gap-5">
                    <div class="col-xl-4 col-12 card debit">
                        <img src="assets/images/ic_card.svg" alt="Debit" width="54px" />
                        <p class="number">•••• &nbsp;&nbsp; 2208 &nbsp;&nbsp; 1996</p>
                        <div>
                            <p class="fw-semibold m-0">Shayna Qowy</p>
                            <p class="fw-light m-0">20/24</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12 card balance">
                        <p>My Balance</p>
                        <h2>$90,500,000</h2>
                        <div>
                            <p class="m-0 fw-bold">+22%</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12 card donut-chart m-lg-0 p-2">
                        <div>
                            <canvas id="chart-budget" style="height: 226px; width: 100%">
                            </canvas>
                        </div>
                    </div>
                </div>
                <div class="row px-1 d-flex justify-content-between">
                    <div class="col-xl-6 col-12 p-0 mb-5 mb-xl-0 revenue">
                        <h5>Revenue Past 6 Months</h5>
                        <div>
                            <canvas id="chart-revenue" width="100%"></canvas>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12 p-0 ps-xl-4 transaction">
                        <h5>Latest Transactions</h5>
                        <div class="d-flex flex-column gap-4">
                            <div class="d-flex flex-row gap-3">
                                <div class="icon-history">
                                    <img src="assets/images/ic_spotify.svg" width="32" height="32" />
                                </div>
                                <div class="trans-history flex-fill">
                                    <div>
                                        <p class="m-0 title">Spotify</p>
                                        <p class="m-0 date">12 Jan</p>
                                    </div>
                                    <p class="m-0 outcome">- $20,000</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row gap-3">
                                <div class="icon-history">
                                    <img src="assets/images/ic_receive_act.svg" width="32" height="32" />
                                </div>
                                <div class="trans-history flex-fill">
                                    <div>
                                        <p class="m-0 title">Top Up BCA</p>
                                        <p class="m-0 date">12 Jan</p>
                                    </div>
                                    <p class="m-0 income">+ $120,000</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row gap-3">
                                <div class="icon-history">
                                    <img src="assets/images/ic_send_act.svg" width="32" height="32" />
                                </div>
                                <div class="trans-history flex-fill">
                                    <div>
                                        <p class="title m-0">Send to @anggapro</p>
                                        <p class="date m-0">12 Jan</p>
                                    </div>
                                    <p class="outcome m-0">- $6,000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </main>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.sidebarCollapseDefault').on('click', function() {
                $('.sidebar').toggleClass('active');
                $('.content').toggleClass('active');
            });
        });
    </script>
    @yield('js')
    @livewireScripts

</body>

</html>
