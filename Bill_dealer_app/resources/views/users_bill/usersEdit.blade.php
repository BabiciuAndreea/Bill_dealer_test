@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 pr-0 bg-org">
            </div>
            <div class="col-sm-6 px-0">
                <div class="card text-black">
                    <div class="card-body text-start pb-0">
                        <form method="GET" action="">
                            {{-- {{method_field('post')}} --}}
                            @csrf
                            
                            <div class="row">
                                <div class="col-11">
                                       <h6>Edit {{ $user->first_name ?? 'Name not found' }}</h6>  
                                </div>
                                <div class="col-1"><button type="button" class="btn-close" aria-label="Close"></button></div>
                            </div>
                            <p class="text-muted"> Please fill the fields below.</p>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $user->first_name ?? 'Fiert name not found' }}" required autocomplete="first_name" autofocus >

                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name ?? 'Last name not found'}}" required autocomplete="last_name" autofocus >

                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email?? 'Email not found' }}" required autocomplete="email" >

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
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Cofirm Password">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <div class="form-outline">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address ?? 'Address not found' }}" required autocomplete="address" >

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-4">
                                    <div class="form-outline">
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone ?? 'Phone not found' }}" required autocomplete="phone" >

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-7 mb-4">
                                    <div class="form-outline">
                                        <input id="cnp" type="text" class="form-control @error('cnp') is-invalid @enderror" name="cnp" value="{{ $user->cnp ?? 'CNP not found' }}" required autocomplete="cnp" >

                                        @error('cnp')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" href="{{ route('users_bill.update', $user->id) }}" class="btn btn-primary mt-1 mb-2" name="sign_in">Edit employee</button>
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
