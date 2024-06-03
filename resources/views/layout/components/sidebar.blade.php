<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index" class="text-nowrap logo-img">
                <img src="{{ asset('images/logos/logo1.png') }}" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./dashboard" aria-expanded="false">
                        <iconify-icon icon="solar:widget-add-line-duotone"></iconify-icon>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li>
                    <span class="sidebar-divider lg"></span>
                </li>
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu"> Konfiguration Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./heater" aria-expanded="false">
                        <iconify-icon icon="solar:layers-minimalistic-bold-duotone"></iconify-icon>
                        <span class="hide-menu">Heater</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./lamp" aria-expanded="false">
                        <iconify-icon icon="solar:layers-minimalistic-bold-duotone"></iconify-icon>
                        <span class="hide-menu">Lamp</span>
                    </a>
                </li>
                <span class="sidebar-divider lg"></span>
                </li>
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">Admin Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./user" aria-expanded="false">
                        <iconify-icon icon="solar:login-3-line-duotone"></iconify-icon>
                        <span class="hide-menu">Manage Users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./device" aria-expanded="false">
                        <iconify-icon icon="solar:user-plus-rounded-line-duotone"></iconify-icon>
                        <span class="hide-menu">Manage Devices</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
