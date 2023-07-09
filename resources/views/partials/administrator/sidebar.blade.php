<div class="sidebar-menu">
    <ul class="menu">
        <li
            class="sidebar-item {{ Request::is('admin/dashboard') ? 'active' : '' }} ">
            <a href="/administrator/dashboard" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        
        <li class="sidebar-item {{ Request::is('admin/pembeli') ? 'active' : '' }}">
            <a href="/administrator/dataPembeli" class='sidebar-link'>
                <i class="bi bi-person-lines-fill"></i>
                <span>Data Pembeli</span>
            </a>
        </li>
        
        <li class="sidebar-item {{ Request::is('admin/riwayat-pengajuan-garansi') ? 'active' : '' }}">
            <a href="/admin/data-pengajuan-garansi" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Data Pengajuan Garansi</span>
            </a>
        </li>
        
        <li class="sidebar-item {{ Request::is('admin/riwayat-tindakan') ? 'active' : '' }}">
            <a href="/admin/data-riwayat-tindakan" class='sidebar-link'>
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>Data Riwayat Tindakan</span>
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