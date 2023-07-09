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