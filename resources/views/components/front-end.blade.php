<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="--theme-deafult:#275edd;">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="multikart">
  <meta name="keywords" content="multikart">
  <meta name="author" content="multikart">
  <link rel="icon" href="{{ asset('assets/images/favicon/1.png') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon/1.png') }}" type="image/x-icon">
  <title>Multikart - Multi-purpopse E-commerce Html Template</title>

  <!--Google font-->
  <link href="{{ url('https://fonts.googleapis.com/css?family=Lato:300,400,700,900') }}" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">

  <!--Slick slider css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">

  <!-- Animate icon -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

  <!-- Themify icon -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}">

  <!-- Bootstrap css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">

  <!-- Theme css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color1.css') }}" media="screen" id="color">


</head>

<body class="{{ Session::get('gbColor') }}">

<x-front-end-header/>

@yield('content')

<!-- footer -->
<footer class="footer-light">
  <section class="section-b-space light-layout">
    <div class="container">
      <div class="row footer-theme partition-f">
        <div class="col-lg-4 col-md-6">
          <div class="footer-title footer-mobile-title">
            <h4>about</h4>
          </div>
          <div class="footer-contant">
            <div class="footer-logo"><img src="{{ asset('assets/images/icon/logo.png') }}" alt=""></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            <div class="footer-social">
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col offset-xl-1">
          <div class="sub-title">
            <div class="footer-title">
              <h4>my account</h4>
            </div>
            <div class="footer-contant">
              <ul>
                <li><a href="#">Men</a></li>
                <li><a href="#">women</a></li>
                <li><a href="#">clothing</a></li>
                <li><a href="#">accessories</a></li>
                <li><a href="#">featured</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="sub-title">
            <div class="footer-title">
              <h4>why we choose</h4>
            </div>
            <div class="footer-contant">
              <ul>
                <li><a href="#">shipping & return</a></li>
                <li><a href="#">secure shopping</a></li>
                <li><a href="#">gallary</a></li>
                <li><a href="#">affiliates</a></li>
                <li><a href="#">contacts</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="sub-title">
            <div class="footer-title">
              <h4>store information</h4>
            </div>
            <div class="footer-contant">
              <ul class="contact-list">
                <li><i class="fa fa-map-marker"></i>Multikart Demo Store, Demo store India 345-659
                </li>
                <li><i class="fa fa-phone"></i>Call Us: 123-456-7898</li>
                <li><i class="fa fa-envelope-o"></i>Email Us: <a href="#">Support@Fiot.com</a></li>
                <li><i class="fa fa-fax"></i>Fax: 123456</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-end">
            <p><i class="fa fa-copyright" aria-hidden="true"></i> 2017-18 themeforest powered by pixelstrap</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer end -->


<!--modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog"
     aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body modal1">
        <div class="container-fluid p-0">
          <div class="row">
            <div class="col-12">
              <div class="modal-bg">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                      aria-hidden="true">&times;</span></button>
                <div class="offer-content"><img src="{{ asset('assets/images/Offer-banner.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                  <h2>newsletter</h2>
                  <form
                      action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda"
                      class="auth-form needs-validation" method="post"
                      id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                      target="_blank">
                    <div class="form-group mx-sm-3">
                      <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL"
                             placeholder="Enter your email" required="required">
                      <button type="submit" class="btn btn-solid"
                              id="mc-submit">subscribe
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--modal popup end-->


<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog"
     aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content quick-view-modal">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <div class="quick-view-img"><img src="{{ asset('assets/images/pro3/1.jpg') }}" alt=""
                                             class="img-fluid blur-up lazyload"></div>
          </div>
          <div class="col-lg-6 rtl-text">
            <div class="product-right">
              <h2>Women Pink Shirt</h2>
              <h3>$32.96</h3>
              <ul class="color-variant">
                <li class="bg-light0"></li>
                <li class="bg-light1"></li>
                <li class="bg-light2"></li>
              </ul>
              <div class="border-product">
                <h6 class="product-title">product details</h6>
                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                  doloremque laudantium</p>
              </div>
              <div class="product-description border-product">
                <div class="size-box">
                  <ul>
                    <li class="active"><a href="#">s</a></li>
                    <li><a href="#">m</a></li>
                    <li><a href="#">l</a></li>
                    <li><a href="#">xl</a></li>
                  </ul>
                </div>
                <h6 class="product-title">quantity</h6>
                <div class="qty-box">
                  <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                                                     class="btn quantity-left-minus" data-type="minus" data-field=""><i
                            class="ti-angle-left"></i></button> </span>
                    <input type="text" name="quantity" class="form-control input-number"
                           value="1"> <span class="input-group-prepend"><button type="button"
                                                                                class="btn quantity-right-plus" data-type="plus" data-field=""><i
                            class="ti-angle-right"></i></button></span></div>
                </div>
              </div>
              <div class="product-buttons"><a href="#" class="btn btn-solid">add to cart</a> <a
                    href="#" class="btn btn-solid">view detail</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Quick-view modal popup end-->

<!-- exit modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal exit-modal" id="exit_popup" tabindex="-1" role="dialog"
     aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body modal1">
        <div class="container-fluid p-0">
          <div class="row">
            <div class="col-12">
              <div class="modal-bg">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="media">
                  <img src="{{ asset('assets/images/stop.png') }}"
                       class="stop img-fluid blur-up lazyload mr-3" alt="">
                  <div class="media-body text-left align-self-center">
                    <div>
                      <h2>wait!</h2>
                      <h4>We want to give you
                        <b>10% discount</b>
                        <span>for your first order</span>
                      </h4>
                      <h5>Use discount code at checkout</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Add to cart modal popup end-->


<!-- tap to top -->
<div class="tap-top top-cls">
  <div>
    <i class="fa fa-angle-double-up"></i>
  </div>
</div>
<!-- tap to top end -->


<!-- latest jquery-->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

<!-- fly cart ui jquery-->
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

<!-- exitintent jquery-->
<script src="{{ asset('assets/js/jquery.exitintent.js') }}"></script>
<script src="{{ asset('assets/js/exit.js') }}"></script>

<!-- popper js-->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>

<!-- slick js-->
<script src="{{ asset('assets/js/slick.js') }}"></script>

<!-- menu js-->
<script src="{{ asset('assets/js/menu.js') }}"></script>

<!-- lazyload js-->
<script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>

<!-- Bootstrap Notification js-->
<script src="{{ asset('assets/js/bootstrap-notify.min.js') }}"></script>

<!-- Fly cart js-->
<script src="{{ asset('assets/js/fly-cart.js') }}"></script>

<!-- Theme js-->
<script src="{{ asset('assets/js/script.js') }}"></script>

<script>
  $(window).on('load', function () {
    setTimeout(function () {
      // $('#exampleModal').modal('show');
    }, 2500);
  });

  function openSearch() {
    document.getElementById("search-overlay").style.display = "block";
  }

  function closeSearch() {
    document.getElementById("search-overlay").style.display = "none";
  }

  (function () {
    $('<div class="sidebar-btn dark-light-btn">' +
      '<div class="dark-light">' +
      '<div class="theme-layout-version">' +
      "{{ Session::get('gbColor') == 'dark' ? 'light' : 'dark' }}" +
      '</div>' +
      '</div>' +
      '</div>').appendTo($('body'));
  })();

  const body_event = $("body");
  body_event.on("click", ".theme-layout-version", function () {
    window.location.href = "{{ route('frontEnd.setBackground') }}";
    return false;
  });
</script>

</body>

</html>