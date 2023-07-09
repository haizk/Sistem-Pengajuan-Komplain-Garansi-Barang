<<<<<<< HEAD
<hr class="my-2" />
<li class="menu-item {{ request()->routeIs('administrator.index') ? 'active' : '' }}">
    <a href="{{ route('administrator.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
    </a>
</li>
<li class="menu-item {{ request()->routeIs('administrator.merk.index') ? 'active' : '' }}">
    <a href="{{ route('administrator.merk.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-paper-plane"></i>
        <div data-i18n="Basic">Merk</div>
    </a>
</li>
<li class="menu-item {{ request()->routeIs('administrator.barang.index') ? 'active' : '' }}">
    <a href="{{ route('administrator.barang.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-comment-check"></i>
        <div data-i18n="Tables">Barang</div>
    </a>
</li>
<li class="menu-item">
        <a href="#" onclick="document.getElementById('logout').click();" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-log-out"></i>
        <div data-i18n="Support">Log out</div>
    <form action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        <input type="submit" id="logout">
    </form>
</li>
=======
<div class="sidebar-menu">
    <ul class="menu">
        <li
            class="sidebar-item {{ Request::is('administrator/dashboard') ? 'active' : '' }} ">
            <a href="/administrator/dashboard" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        
        <li class="sidebar-item {{ Request::is('administrator/dataPembeli') ? 'active' : '' }}">
            <a href="/administrator/dataPembeli" class='sidebar-link'>
                <i class="bi bi-person-lines-fill"></i>
                <span>Data Pembeli</span>
            </a>
        </li>
        
        <li class="sidebar-item {{ Request::is('administrator/merk') ? 'active' : '' }}">
            <a href="/administrator/merk" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Data Merk</span>
            </a>
        </li>
        
        <li class="sidebar-item {{ Request::is('administrator/barang') ? 'active' : '' }}">
            <a href="/administrator/barang" class='sidebar-link'>
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>Data Barang</span>
            </a>
        </li>
>>>>>>> 378279bf6e3113f003c7a54701f5f2c5600a7f3f

        <li class="sidebar-item">
            <a href="#" onclick="document.getElementById('logout').click();" class='sidebar-link'>
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
                <form action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    <input type="submit" id="logout">
            </a>
        </li>
        
    
        
    </ul>
</div>