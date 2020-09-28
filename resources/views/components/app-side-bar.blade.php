<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper">
      <a href="{{ url('/') }}">
        <img class="blur-up lazyloaded" src="{{ asset('assets/images/dashboard/multikart-logo.png') }}" alt="">
      </a>
    </div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div>
        <img class="img-60 rounded-circle blur-up lazyloaded" src="{{ asset('assets/images/dashboard/man.png') }}" alt="#">
      </div>
      <h6 class="mt-3 f-14">JOHN</h6>
      <p>general manager.</p>
    </div>
    <ul class="sidebar-menu">
      <li><a class="sidebar-header" href="#">
          <i data-feather="home"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a class="sidebar-header">
          <i data-feather="dollar-sign"></i>
          <span>Sales</span>
          <i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="#">
              <i class="fa fa-circle"></i>
              Orders
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-circle"></i>
              Transactions
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>