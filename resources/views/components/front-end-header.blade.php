<!-- header start -->
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-menu">
          <div class="menu-left">
          </div>
          <div class="menu-right pull-right">
            <div>
              <nav id="main-nav">
                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                  <li>
                    <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                  </li>
                  <li>
                    <a href="#">shop</a>
                    <ul>
                      <li><a href="category-page.html">left sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
            <div>
              <div class="icon-nav">
                <ul>
                  <li class="onhover-div mobile-search">
                    <div>
                      <img src="{{ asset('assets/images/icon/search.png') }}" onclick="openSearch()" class="img-fluid blur-up lazyload" alt="">
                      <i class="ti-search" onclick="openSearch()"></i>
                    </div>
                    <div id="search-overlay" class="search-overlay">
                      <div>
                        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                        <div class="overlay-content">
                          <div class="container">
                            <div class="row">
                              <div class="col-xl-12">
                                <form>
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                  </div>
                                  <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- header end -->