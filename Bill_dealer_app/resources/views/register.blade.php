<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/register.css" />
    <title>Bill Dealer</title>
</head>

<body>
<form action="" method="POST">
    <div class="container-fluid">
        <div class="view" style="background-image: url({{url('images/background_register.png')}});">
        <div class="row">
            <div class="col-7">
                    <div class="card text-black">
                        <div class="card-body text-start">
                            <div class="row">
                                <h6>CONTACT INFORMATION</h6>
                            </div>
                            <p class="text-muted"> Please fill the fields below.</p>
                            <HR/>
                            <form action="/action_page.php" class="was-validated" method="POST">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="first_name" class="form-control form-control-sm" placeholder="First name"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="last_name" class="form-control form-control-sm" placeholder="Last name"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline">
                                    <input type="email" id="email" class="form-control form-control-sm" placeholder="Email"/>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="password" id="password" class="form-control form-control-sm" placeholder="Password"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="password" id="password_confirm" class="form-control form-control-sm" placeholder="Password confirm"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="address" class="form-control form-control-sm" placeholder="Address"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="zip_code" class="form-control form-control-sm" placeholder="Zip code"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="postal_code" class="form-control form-control-md" placeholder="Phone"/>
                                        </div>
                                    </div>
                                    <div class="col-md-7 mb-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="juridical"
                                               value="option2" />
                                            <label class="form-check-label text-muted types" for="maleGender">Authorized juridical person</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="legal"
                                               value="option2" />
                                            <label class="form-check-label text-muted types" for="maleGender">Authorized legal person</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col d-flex justify-content-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                            <label class="form-check-label text-muted" for="form2Example31"> Agree with <a href="#!">Terms and Conditions </a></label>
                                        </div>
                                    </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-3" name="sign_in">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            <div class="col-4">
                <img src="{{'images/Logo_aplicatie_facturi.png'}}" class="rounded-circle img">
            </div>

            </div>
        </div>
        </div>
</form>
</body>

</html>
