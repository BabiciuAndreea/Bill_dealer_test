@section('content')
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content px-5 py-5">
            <form method="POST" action="{{ url('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-11">
                        <h6>ADD EMPLOYEE</h6>
                    </div>
                    <div class="col-1"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                </div>
                <p class="text-muted"> Please fill the fields below.</p>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input id="first_name" type="text"
                                class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                value="{{ old('first_name') }}" required autocomplete="first_name" autofocus
                                placeholder="First Name">

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input id="last_name" type="text"
                                class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                value="{{ old('last_name') }}" required autocomplete="last_name" autofocus
                                placeholder="Last Name">

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-outline">
                    <input id="email" type="email"
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

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
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="new-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Cofirm Password">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="form-outline">
                        <input id="address" type="text"
                            class="form-control @error('address') is-invalid @enderror" name="address"
                            value="{{ old('address') }}" required autocomplete="address" placeholder="Address">

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
                            <input id="phone" type="text"
                                class="form-control @error('phone') is-invalid @enderror" name="phone"
                                value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-7 mb-4">
                        <div class="form-outline">
                            <input id="cnp" type="text"
                                class="form-control @error('cnp') is-invalid @enderror" name="cnp"
                                value="{{ old('cnp') }}" required autocomplete="cnp" placeholder="CNP">

                            @error('cnp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="avatar" class="col-md-4 col-form-label text-md-right"> Profile picture </label>
                    <div class="col-md-6">
                        <input id="avatar" type="file" name="avatar">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3" name="sign_in">Add
                        employee</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection