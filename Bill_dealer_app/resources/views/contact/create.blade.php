@include('layouts.app')

<body>

    @include('layouts.menu')

    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0" id="client" role="tabpanel"
            aria-labelledby="employee-tab">
            <form method="POST" action="{{ route('contact.store', $id)}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-11">
                        <h6 class="text-start">Add Contact</h6>
                    </div>
                </div>
                <p class="text-muted text-start"> Please fill the fields below.</p>
                <div class="form-outline">
                    <input id="name" type="text"
                        class="form-control @error('name') is-invalid @enderror" name="name" required
                        autocomplete="name" autofocus placeholder="Contact name">

                    @error('client_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-outline">
                    <input id="phone" type="text"
                        class="form-control" name="phone" required
                        autocomplete="phone" autofocus placeholder="Phone number">
                </div>
                <br>
                <div class="form-outline">
                    <input id="email" type="text" class="form-control" name="email" required
                        autocomplete="email" placeholder="Email">
                </div>
                <br>

                <div class="form-outline">
                    <input id="department" type="text" class="form-control" name="department" required
                        autocomplete="department" placeholder="Department">
                </div>
                <br>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3" name="sign_in">Add</button>
                </div>
            </form>
        </div>
    </div>
</body>