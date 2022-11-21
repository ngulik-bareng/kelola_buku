<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

      @if (Auth::user())
          
      {{-- Admin --}}
      @if(Auth::user()->role_id == 1)
      <li class="nav-item">
        <a href="/dashboard" class="nav-link @if(request()->route()->uri == 'dashboard') active @endif">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/category" class="nav-link @if(request()->route()->uri == 'category') active @endif" >
          <i class="far fa-circle nav-icon"></i>
          <p>Categories</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/books" class="nav-link @if(request()->route()->uri == 'books') active @endif">
          <i class="far fa-circle nav-icon"></i>
          <p>Books</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/user" class="nav-link @if(request()->route()->uri == 'user') active @endif">
          <i class="far fa-circle nav-icon"></i>
          <p>Users</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/rentlogs" class="nav-link @if(request()->route()->uri == 'rentlogs') active @endif">
          <i class="far fa-circle nav-icon"></i>
          <p>Rent Logs</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/logout" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Logout</p>
        </a>
      </li>
      {{-- End Admin --}}
      @else
      {{-- User --}}
      <li class="nav-item">
        <a href="/profile" class="nav-link @if(request()->route()->uri == 'profile') active @endif">
          <i class="far fa-circle nav-icon"></i>
          <p>Profile</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/" class="nav-link @if(request()->route()->uri == '/') active @endif">
          <i class="far fa-circle nav-icon"></i>
          <p>List-Books</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/logout" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Logout</p>
        </a>
      </li>
      {{-- End User --}}
      @endif

      @else
      <li class="nav-item">
        <a href="/login" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Login</p>
        </a>
      </li>

      @endif

     
    </ul>
  </nav>