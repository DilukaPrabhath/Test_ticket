    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar" >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin/dashbord')}}">
        <div class="">

          {{-- <img src="{{asset('image/exam2.png')}}"  width="224" height="71"> --}}
        </div>
        <div class=""></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Functions
      </div>

      <!-- Nav Item - Pages Collapse Menu -->

      <li class="nav-item active">

        <a class="nav-link" href="{{url('admin/ticket')}}">
          <i class="fas fa-ticket-alt"></i>
          <span>Ticket</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">

      </div>

    </ul>
    <!-- End of Sidebar -->
