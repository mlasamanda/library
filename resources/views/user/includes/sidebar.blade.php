<!-- Brand Logo -->

<a href="#" class="brand-link">
      <img src="{{asset('assets/dist/img/logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>LIBRARY SYSTEM</b></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div> -->
      <!-- Sidebar Menu -->

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('bookuser.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>BookList Available</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sugg.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Suggest New Book</p>
                </a>
              </li>
            </ul>
          </li>
<li class="nav-item has-treeview"></li>
            <a href="{{route('cpass')}}" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                change Password
              </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                {{ __('Logout') }}
              </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
             </form>
          </li>


        </ul>
      </nav>

    </div>
    <!-- /.sidebar -->
