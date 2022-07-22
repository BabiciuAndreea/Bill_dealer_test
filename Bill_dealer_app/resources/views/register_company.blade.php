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
    <link rel="stylesheet" type="text/css" href="/css/register_company.css" />
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
                                    <h6>ADD YOUR COMPANY</h6>
                            </div>
                            <HR/>
                            <form action="/action_page.php" class="was-validated" method="POST">
                                <div class="form-outline">
                                    <input type="text" id="company_name" class="form-control form-control-sm" placeholder="Company name"/>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="cif" class="form-control form-control-sm" placeholder="TIN (CIF ro)"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="region" class="form-control form-control-sm" placeholder="Trade region"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="city" class="form-control form-control-sm" placeholder="City"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="county" id="password_confirm" class="form-control form-control-sm" placeholder="County"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline">
                                    <input type="text" id="address" class="form-control form-control-md" placeholder="Street address"/>
                                </div>
                                <br>
                                <div class="form-outline">
                                    <input type="text" id="capital" class="form-control form-control-sm" placeholder="Social capital"/>
                                </div>
                                <br>
                                <div class="row text-muted">
                                    <div class="col-3">
                                        <div class="form-outline size"> VAT (TVA) payer? </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-outline form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="yes" value="option1" />
                                            <label class="form-check-label text-muted types size" for="yes">YES</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-outline form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="no" value="option2" />
                                            <label class="form-check-label text-muted types size" for="yes">NO</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row space">
                                    <div class="col d-flex justify-content-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                            <label class="form-check-label text-muted" for="form2Example31"> Agree with <a href="#!">Terms and Conditions </a></label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-3" name="sign_in">Sign in</button>
                                    </div>
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
