@extends('layouts.app')

@section('content')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="POST" action="{{ route('register') }}">
                        @csrf
                <div class="form-group">
                  
                  <input id="name" type="text" 
                  class="form-control form-control-lg @error('name') is-invalid @enderror" 
                  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                  placeholder="Username" id="exampleInputUsername1">

                        @error('name')  
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                </div>
                <div class="form-group">
                  
                  <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" 
                  name="email" value="{{ old('email') }}" required autocomplete="email"
                  id="exampleInputEmail1" placeholder="Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
               
            
                <div class="form-group">
            
                  <input id="password" type="password" 
                  class="form-control form-control-lg @error('password') is-invalid @enderror" 
                  name="password" required autocomplete="new-password"  id="exampleInputPassword1" 
                  placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror




                </div>
                
                  <div class="form-group">
                                <input id="password-confirm" type="password" 
                                class="form-control form-control-lg" name="password_confirmation" 
                                required autocomplete="new-password" id="exampleInputPassword1" 
                  placeholder="Re- Password">
                           


                  </div>
               
                <div class="mt-3">
                  
    
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                    {{ __('Register') }}
                                </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>


  
@endsection
