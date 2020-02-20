<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="/backend/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Gitick</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item ">
            <a class="nav-link {{ Request::segment(1) == 'admin/artikel' ? 'active':''}}" href="{{url('/admin/artikel')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>Blog Artikel</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) == '/admin/kategori'? 'active':''}}" href="{{url('/admin/kategori')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>Kategori</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) == '/admin/data-penjual'? 'active':''}}" href="{{url('/admin/data-penjual')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>Penjual</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) == '/admin/pesan-publik'? 'active':''}}" href="{{url('/admin/pesan-publik')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>Pesan Publik</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
