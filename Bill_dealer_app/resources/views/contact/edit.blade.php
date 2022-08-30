@include('layouts.app')

<body>

    @include('layouts.menu')

    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">

    <br>
    <div class="pull-left">
        <a href="{{ route('invoice.index') }}" class="btn btn-secondary btn-sm mx-5">
        <i class="fa-solid fa-arrow-left-long"></i>
        </a>
    </div>

        <div class="tab-pane fade show active px-5 py-0 my-0" id="client" role="tabpanel" aria-labelledby="employee-tab">
            <div class="container mx-5 mt-5 w-100">
                <div class="row mx-5">
                    <div class="col-6 mx-5 px-5 w-100">
                    </div>
                    <div class="col-6 w-100">
                        <form method="POST" action="{{ route('contact.update', $id) }}" enctype="multipart/form-data">
                            @csrf
                            <h6 class="text-start">Edit Contact</h6>
                            <p class="text-muted text-start"> Please fill the fields below.</p>
                            <div class="form-outline">
                                <input id="name" type="text"

                                    class="form-control @error('name') is-invalid @enderror" name="name"

                                    class="form-control @error('name') is-invalid @enderror" name="name" 

                                    autocomplete="name" autofocus placeholder="Contact name">
                            </div>
                            <br>
                            <div class="form-outline">

                                <input id="phone" type="text" class="form-control" name="phone"

                                <input id="phone" type="text" class="form-control" name="phone" 

                                    autocomplete="phone" autofocus placeholder="Phone number">
                            </div>
                            <br>
                            <div class="form-outline">

                                <input id="email" type="text" class="form-control" name="email"

                                <input id="email" type="text" class="form-control" name="email" 

                                    autocomplete="email" placeholder="Email">
                            </div>
                            <br>

                            <div class="form-outline">

                                <input id="department" type="text" class="form-control" name="department"

                                <input id="department" type="text" class="form-control" name="department" 

                                    autocomplete="department" placeholder="Department">
                            </div>
                            <br>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3" name="sign_in">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
