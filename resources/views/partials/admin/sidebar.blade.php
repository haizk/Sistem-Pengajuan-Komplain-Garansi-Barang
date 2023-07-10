<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>
        
        <li
            class="sidebar-item {{ Request::is('admin/dashboard') ? 'active' : '' }} ">
            <a href="/admin" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item {{ Request::is('admin/riwayat-pengajuan-garansi') ? 'active' : '' }}">
            <a href="/admin/data-pengajuan-garansi" class='sidebar-link'>
                <i class="bi bi-file-earmark-bar-graph-fill"></i>
                <span>Data Pengajuan Garansi</span>
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