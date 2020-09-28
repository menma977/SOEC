@extends('components.login')

@section('content')
  <div class="row">
    <div class="col-md-5 p-0 card-left">
      <div class="card bg-primary">
        <div class="svg-icon">
          <img class="img-80 rounded-circle blur-up lazyloaded" src="{{ asset('assets/images/dashboard/man.png') }}" alt="#">
        </div>
        <div class="single-item">
          <div>
            <div>
              <h3>Welcome to Multikart</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                dummy.</p>
            </div>
          </div>
          <div>
            <div>
              <h3>Welcome to Multikart</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                dummy.</p>
            </div>
          </div>
          <div>
            <div>
              <h3>Welcome to Multikart</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                dummy.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7 p-0 card-right">
      <div class="card tab2-card">
        <div class="card-body">
          <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true">
                <span class="icon-user mr-2"></span>Login
              </a>
            </li>
          </ul>
          <div class="tab-content" id="top-tabContent">
            <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
              <form class="form-horizontal auth-form" action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                  <input required="" name="username" type="text" class="form-control" placeholder="Username" id="username">
                </div>
                <div class="form-group">
                  <input required="" name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-terms">
                  <div class="custom-control custom-checkbox mr-sm-2">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                    <a href="#" class="btn btn-default forgot-pass">lost your password</a>
                  </div>
                </div>
                <div class="form-button">
                  <button class="btn btn-primary" type="submit">Login</button>
                </div>
                <div class="form-footer">
                  <span>Or Login up with social platforms</span>
                  <ul class="social">
                    <li><a class="icon-facebook" href=""></a></li>
                    <li><a class="icon-twitter" href=""></a></li>
                    <li><a class="icon-instagram" href=""></a></li>
                    <li><a id="toastr-success-bottom-right" class="icon-pinterest" href="#"></a></li>
                  </ul>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('addCss')
  <link href="{{ asset('assets/js/toastr/build/toastr.css') }}" rel="stylesheet">
@endsection

@section('addJs')
  <!-- scripit init-->
  <script src="{{ asset('assets/js/toastr/toastr.js') }}"></script>

  <script>
    $(function () {
      @error('username')
      toastr.error('{{ $message }}');
      @enderror
      @error('password')
      toastr.error('{{ $message }}');
      @enderror
    })
  </script>
@endsection