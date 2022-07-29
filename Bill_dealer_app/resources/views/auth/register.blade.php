@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 pr-0 bg-org">
            </div>
            <div class="col-sm-6 px-0">
                <div class="card text-black">
                    <div class="card-body text-start pb-0">
                        <div class="row">
                            <div class="col-11"> <h6>ADD EMPLOYEE</h6></div>
                            <div class="col-1"><button type="button" class="btn-close" aria-label="Close"></button></div>
                        </div>
                        <p class="text-muted"> Please fill the fields below.</p>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="first_name" class="form-control form-control-md" placeholder="First name"/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="last_name" class="form-control form-control-md" placeholder="Last name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="password" id="password" class="form-control form-control-md" placeholder="Password"/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="password" id="password_confirm" class="form-control form-control-md" placeholder="Password confirm"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <div class="form-outline">
                                    <textarea id="address" class="form-control form-control-md" rows="4" placeholder="Address"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="phone" class="form-control form-control-md" placeholder="Phone"/>
                                    </div>
                                </div>
                                <div class="col-md-7 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="cnp" class="form-control form-control-md" placeholder="CNP"/>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-1 mb-2" name="sign_in">Add employee</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 px-0 bg-blue">
            </div>
        </div>
    </div>
@endsection
