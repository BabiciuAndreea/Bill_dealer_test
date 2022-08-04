@extends('layouts.app')

@section('content')
    <div class="container px-0">
        <div class="row ">
            <img src="{{url('images/upper_image_good2.jpg')}}" alt="" class="img-fluid px-0">
        </div>
        <div class="row background">
            <div class="col-sm-1 px-0"></div>
            <div class="col-sm-5 text-white text-center ml-5 px-0">
                <h1 class="heading mt-5 ml-5" >Bill <br>
                    Dealer <br>
                    values  <br>
                    technology</h1>

                <h5 class="subtitle mt-5 ml-5">
                    Bill Dealer ensure the least likelihood of <br>human error, and to keep client data safe <br>and secure.
                </h5>
                <br>
                <h6 class="note mt-2 ml-5 mb-">
                    By using the latest in fintech.
                </h6>
            </div>
            <div class="col-sm-5 text-white text-center mt-4 px-0">
                <div class="card card-design text-black">
                    <div class="card-body text-start">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3 mt-3 ">
                                <label for="email" class="form-label">Email:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder={{ __('Enter email') }}>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder={{ __('Enter password') }}>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label text-muted" for="remember"> Remember me </label>
                                    </div>
                                </div>
                                <div class="col">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3" name="login">{{ __('Login') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 px-0"></div>
        </div>
    </div>
@endsection
