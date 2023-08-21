<li class="header">Menu</li>
<li class="{{ Route::is('dashboard') ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}">
        <i class="fa fa-dashcube"><span class="path1"></span><span class="path2"></span></i>
        <span>Dashboard</span>
    </a>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-table" data-bs-toggle="tooltip" title="Post Berita Terkini">
            <span class="path1"></span><span class="path2"></span>
        </i>
        <span>Posts</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-right pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Route::is('berita_terkini_page') ? 'active' : '' }}">
            <a href="{{ route('berita_terkini_page') }}">
                <i class="fa fa-newspaper-o" data-bs-toggle="tooltip" title="Post Berita Terkini">
                    <span class="path1"></span><span class="path2"></span>
                </i>
                <span>Berita Terkini</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-calendar" data-bs-toggle="tooltip" title="Post Event">
                    <span class="path1"></span><span class="path2"></span>
                </i>
                <span>Post Event</span>
            </a>
        </li>
    </ul>
</li>
<li class="#">
    <a href="#">
        <i class="fa fa-th-large"><span class="path1"></span><span class="path2"></span></i>
        <span>Kategori</span>
    </a>
</li>
<li class="#">
    <a href="#">
        <i class="fa fa-tags"><span class="path1"></span><span class="path2"></span></i>
        <span>Tags</span>
    </a>
</li>
<li class="treeview">
    <a href="#">
        <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
        <span>Management Users</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-right pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Route::is('berita_terkini_page') ? 'active' : '' }}">
            <a href="{{ route('berita_terkini_page') }}">
                <i class="fa fa-user-circle" data-bs-toggle="tooltip" title="Post Berita Terkini">
                    <span class="path1"></span><span class="path2"></span>
                </i>
                <span>List Users</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-key" data-bs-toggle="tooltip" title="Post Event">
                    <span class="path1"></span><span class="path2"></span>
                </i>
                <span>Change Password</span>
            </a>
        </li>
    </ul>
</li>
