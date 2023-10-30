@extends('layouts.main')
@section('container')




<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->





<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            
                                <a class="text-center" href="#"> <h4>Register</h4></a>
    
                            <form  action="/register" method="POST" class="mt-5 mb-5 login-input">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control @error('name')
                                    is-invalid
                                    @enderror " id="name" name="name" placeholder="Name" value="{{old('name')}}" required>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('username')
                                    is-invalid
                                    @enderror "  name="username" id="username" placeholder="Username" value="{{old('username')}}" required>
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email')
                                    is-invalid
                                    @enderror" name="email" id="email" placeholder="Email" value="{{old('email')}}" required>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control  @error('password')
                                    is-invalid
                                    @enderror" name="password" id="password" placeholder="Password"  required>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                                        @enderror
                                </div>
                                <button  class="btn login-form__btn submit w-100">Register</button>
                            </form>
                                <p class="mt-5 login-form__footer">Have account <a href="/login" class="text-primary">Login </a> now</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--**********************************
    Scripts
***********************************-->
<script src="/assets/plugins/common/common.min.js"></script>
<script src="/assets/js/custom.min.js"></script>
<script src="/assets/js/settings.js"></script>
<script src="/assets/js/gleek.js"></script>
<script src="/assets/js/styleSwitcher.js"></script>
@endsection