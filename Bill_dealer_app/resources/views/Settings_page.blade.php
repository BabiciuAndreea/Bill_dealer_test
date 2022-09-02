<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Settings</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Edit/style.css">
</head>
<style>
    .column {
        float: left;
        width: 33.33%;
        padding: 5px;
    }

    /* Clear floats after image containers */
    .row::after {
        content: "";
        clear: both;
        display: table;
    }
</style>

<body>

    <section class="py-5 my-5">

        <div class="container ">
            <div class=" srounded-lg d-block d-sm-flex settings_container">
                <div class="profile-tab-nav border-right profile_tab">
                    <div class="p-4">
                        <div class="img-circle text-center mb-3">
                            <img src="{{ 'storage/' . Auth::user()->avatar }}" alt="Image" class="shadow">
                        </div>
                        <h4 class="text-center " style="color:white">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h4>
                    </div>
                    <div class="text_nav nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="text_part nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true" style="color:white;">
                            <i class="text_btn fa fa-home text-center mr-1" style="color:white;"></i>
                            Account
                        </a>
                        <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false" style="color:white;">
                            <i class="fa fa-key text-center mr-1 " style="color:white;"></i>
                            Password
                        </a>
                        <a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false" style="color:white;">
                            <i class="fa fa-tv text-center mr-1" style="color:white;"></i>
                            Company
                        </a>

                    </div>
                </div>
                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <h3 class="mb-4">Account Settings</h3>
                        <form action="{{ route('update') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="{{Auth::user()->first_name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="{{Auth::user()->last_name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="{{Auth::user()->email}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone number</label>
                                        <input type="text" class="form-control" name="phone" placeholder="{{Auth::user()->phone}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>CNP</label>
                                        <input type="text" class="form-control" name="cnp" placeholder="{{Auth::user()->cnp}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="{{Auth::user()->address}}">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                        <button class="btn btn-light">Cancel</button>
                        <div class="pull-center">
                            <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm mt-3 mx-3">
                                BACK
                            </a>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                    <h3 class="mb-4">Password Settings</h3>
                    <form action="{{ route('updatepass') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old password</label>
                                    <input type="password" class="form-control" name="old_password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New password</label>
                                    <input type="password" class="form-control" name="new_password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm new password</label>
                                    <input type="password" class="form-control" name="confirm_password">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary">Update</button>
                    </form>
                    <button class="btn btn-light">Cancel</button>
                    <div class="pull-center">
                            <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm mt-3 mx-3">
                                BACK
                            </a>
                        </div>
                </div>
            </div>

            <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
                <h3 class="mb-4">Company Setting </h3>
                <form action="{{ route('downloadPDF') }}" method="post">
                    @csrf


                    <!-- <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1">
                                <label class="form-check-label" for="flexRadioDefault1">
								<img src="{{ url('images/invoice1.PNG') }}" alt="" class="img-fluid px-0">
                                   PDF  Template nr 1
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
								<img src="{{ url('images/invoice2.PNG') }}" alt="" class="img-fluid px-0">
                                    PDF Template nr 2
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="3">
                                <label class="form-check-label" for="flexRadioDefault2">
								<img src="{{ url('images/invoice3.PNG') }}" alt="" class="img-fluid px-0">
                                PDF Template nr 3
                                </label>
                                </div> -->
                    <div class="row">
                        <div class="column">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <img src="{{ url('images/invoice1.PNG') }}" alt="" class="img-fluid px-0">
                                    PDF Template nr 1
                                </label>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <img src="{{ url('images/invoice2.PNG') }}" alt="" class="img-fluid px-0">
                                    PDF Template nr 2
                                </label>
                            </div>
                        </div>


                        <div class="column">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="3">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <img src="{{ url('images/invoice3.PNG') }}" alt="" class="img-fluid px-0">
                                    PDF Template nr 3
                                </label>
                            </div>
                        </div>

                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">Update</button>
                </form>

                <button class="btn btn-light">Cancel</button>
                <div class="pull-center">
                            <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm mt-3 mx-3">
                                BACK
                            </a>
                        </div>
            </div>
        </div>

        </div>

    </section>
    <!--java script code for the dark theme-->
    <script>
        var icon = document.getElementById("check");
        check.onclick = function() {
            document.body.classList.toggle("dark-theme");
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
