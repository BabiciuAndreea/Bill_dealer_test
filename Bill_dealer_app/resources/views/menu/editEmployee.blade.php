@include('layouts.app')

<body>

    @include('layouts.menu')


    <div class="tab-content mt-5 mx-5 " id="v-pills-tabContent">
    <br>
        <div class="pull-left">
            <a href="{{ route('addEmployee') }}" class="btn btn-secondary btn-sm">
            <i class="fa-solid fa-arrow-left-long"></i>
            </a>
        </div>
        <div class="tab-pane fade mx-5 show active" id="employee" role="tabpanel" aria-labelledby="employee-tab">
            <div class="container mx-5">
                <form action="{{ route('employees.update',$employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-11 my-3">
                            <h6>EDIT EMPLOYEE</h6>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input id="first_name" type="text" class="form-control " name="first_name" value="{{ $employee->first_name }}"
                                placeholder="First name">

                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input id="last_name" type="text" class="form-control " value="{{ $employee->last_name }}" name="last_name"
  placeholder="Last name">

                            </div>
                        </div>
                    </div>
                    <div class="form-outline">
                        <input id="email" type="email" class="form-control " name="email"
                        value="{{ $employee->email}}"   placeholder="Email">

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input id="password" type="password" class="form-control " name="password"
                                     placeholder="Password">

                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation"
                                    placeholder="Cofirm Password">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <input id="address" type="text" class="form-control " name="address" value="{{ $employee->address }}"
                                placeholder="Address">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-4">
                            <div class="form-outline">
                                <input id="phone" type="text" class="form-control " name="phone" value="{{ $employee->phone }}"
                                     placeholder="Phone">

                            </div>
                        </div>
                        <div class="col-md-7 mb-4">
                            <div class="form-outline">
                                <input id="cnp" type="text" class="form-control " name="cnp" value="{{ $employee->cnp }}"
                                    placeholder="CNP">

                            </div>
                        </div>
                    </div>

                    <div class="form-group row mx-5">
                        <label for="avatar" class="col-md-3 col-form-label text-md-right"> Profile picture
                        </label>
                        <div class="col-md-6">
                            <input id="avatar" type="file" name="avatar">
                        </div>
                    </div>

                    <div class="text-center mx-0 px-0">
                        <button type="submit" class="btn btn-primary mt-3" name="sign_in">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
