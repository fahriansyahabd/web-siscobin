<div class="header">
    <div class="header-left">
      <a href="index-2.html" class="logo">
        <img src="assets/img/logo.png" width="35" height="35" alt="" />
        <span>SISCOBIN</span>
      </a>
    </div>
    <a id="toggle_btn" href="javascript:void(0);"
      ><i class="fa fa-bars"></i
    ></a>
    <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"
      ><i class="fa fa-bars"></i
    ></a>
    <ul class="nav user-menu float-right">
      <li class="nav-item dropdown has-arrow">
        <a
          href="#"
          class="dropdown-toggle nav-link user-link"
          data-toggle="dropdown"
        >
          <span class="user-img">
            <img
              class="rounded-circle"
              src="assets/img/user.jpg"
              width="24"
              alt="Admin"
            />
            <span class="status online"></span>
          </span>
          <span>Admin</span>
        </a>
        <div class="dropdown-menu">
          {{-- <a class="dropdown-item" href="profile.html">My Profile</a>
          <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
          <a class="dropdown-item" href="settings.html">Settings</a> --}}
          <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
        </div>
      </li>
    </ul>
    {{-- <div class="dropdown mobile-user-menu float-right">
      <a
        href="#"
        class="dropdown-toggle"
        data-toggle="dropdown"
        aria-expanded="false"
        ><i class="fa fa-ellipsis-v"></i
      ></a>
      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="profile.html">My Profile</a>
        <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
        <a class="dropdown-item" href="settings.html">Settings</a>
        <a class="dropdown-item" href="login.html">Logout</a>
      </div>
    </div> --}}
  </div>
  <div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
      <div id="sidebar-menu" class="sidebar-menu">
        <ul>
          <li class="menu-title">Main</li>
          <li class="active">
            <a href="index-2.html"
              ><i class="fa fa-dashboard"></i> <span>Dashboard</span></a
            >
          </li>
          <li>
            <a href="{{route('display.codeblu')}}"
              ><i class="fa fa-bell-o"></i> <span>Display</span></a
            >
          </li>
          {{-- <li class="submenu">
            <a href="#">
              <i class="fa fa-laptop"></i> 
              <span> Display Code Blue</span>
              <span class="menu-arrow"></span></a>
          </li> --}}
          <li class="submenu">
            <a href="#"><i class="fa fa-edit"></i> <span> Forms</span>
              <span class="menu-arrow"></span></a>
            <ul style="display: none">
              <li><a href="{{route('ews.view')}}">Passien</a></li>
              <li><a href="{{route('create-ruangan')}}">Ruangan</a></li>
            </ul>
          </li>
          <li>
            <a href="calendar.html">
              <i class="fa fa-calendar"></i> 
              <span>Calendar</span></a>
          </li>
          <li class="menu-title">Extras</li>
          <li class="submenu">
            <a href="javascript:void(0);"><i class="fa fa-share-alt"></i> <span>Multi Level</span>
              <span class="menu-arrow"></span></a>
            <ul style="display: none">
              <li>
                <a href="javascript:void(0);"><span>Level 1</span></a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>