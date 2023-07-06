<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>
        
        <li
            class="sidebar-item {{ Request::is('admin/dashboard') ? 'active' : '' }} ">
            <a href="/admin/dashboard" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        
        <li class="sidebar-item {{ Request::is('admin/pembeli') ? 'active' : '' }}">
            <a href="/admin/pembeli" class='sidebar-link'>
                <i class="bi bi-person-lines-fill"></i>
                <span>Data Pembeli</span>
            </a>
        </li>
        
        <li class="sidebar-item {{ Request::is('admin/riwayat-pengajuan-garansi') ? 'active' : '' }}">
            <a href="/admin/riwayat-pengajuan-garansi" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Data Pengajuan Garansi</span>
            </a>
        </li>
        
        <li class="sidebar-item {{ Request::is('admin/riwayat-tindakan') ? 'active' : '' }}">
            <a href="/admin/riwayat-tindakan" class='sidebar-link'>
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>Data Riwayat Tindakan</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li>
        
    </ul>
</div>