<a href="/" class="brand-link">
  <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<!-- Sidebar -->
<div class="sidebar">

  <!-- Sidebar Menu -->
  <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item">
              <a href="/" class="nav-link {{ request()->is('/') ? 'active' : ''}}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                      Dashboard
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="/user" class="nav-link {{ request()->is('user') ? 'active' : ''}}">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                      User
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="/klien" class="nav-link {{ request()->is('klien') ? 'active' : ''}}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                      Klien
                  </p>
              </a>
          </li>
      </ul>
  </nav>

</div>
