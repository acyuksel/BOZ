<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route("dashboard")}}">
        <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
        <div class="mx-3 sidebar-brand-text">BOZ</div>
    </a>

    <hr class="my-0 sidebar-divider">

    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{route("dashboard")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li> --}}

    <li class="nav-item active">
        <a dusk="NavProjecten" class="nav-link" href="{{route("project")}}">
            <i class="fas fa-folder"></i>
            <span>Projecten</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{route("media")}}">
            <i class="fas fa-solid fa-images"></i>
            <span>Media</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="border-0 rounded-circle" id="sidebarToggle"></button>
    </div>
</ul>
