<hr class="my-2" />
<li class="menu-item {{ request()->routeIs('pembeli.index') ? 'active' : '' }}">
    <a href="{{ route('pembeli.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
    </a>
</li>
<li class="menu-item {{ request()->routeIs('pembeli.ajukan_komplain.index') ? 'active' : '' }}">
    <a href="{{ route('pembeli.ajukan_komplain.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-paper-plane"></i>
        <div data-i18n="Basic">Ajukan Komplain</div>
    </a>
</li>
<li class="menu-item {{ request()->routeIs('pembeli.status_ajuan.index') ? 'active' : '' }}">
    <a href="{{ route('pembeli.status_ajuan.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-comment-check"></i>
        <div data-i18n="Tables">Status Pengajuan</div>
    </a>
</li>
<li class="menu-item">
    <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-log-out"></i>
        <div data-i18n="Support">Log out</div>
    </a>
</li>
