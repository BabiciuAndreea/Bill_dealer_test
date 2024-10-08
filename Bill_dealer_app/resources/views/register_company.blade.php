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
<div class="container mt-5">
    <div class="row mt-2">
        <div class="col-sm-3 pr-0 bg-org">
            <img src="{{'images/Logo_aplicatie_facturi.png'}}" class="rounded-circle img mt-3 ml-5 mb-3">
        </div>
        <div class="col-sm-6 px-0">
            <div class="card text-black">
                <div class="card-body text-start">
                    <div class="row">
                        <h6>ADD YOUR COMPANY</h6>
                    </div>
                    <p class="text-muted"> Please fill the fields below.</p>
                    <HR/>
                    <form action="/action_page.php" class="was-validated" method="POST">
                        <div class="form-outline">
                            <input type="text" id="company_name" class="form-control form-control-md" placeholder="Company name"/>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="cif" class="form-control form-control-md" placeholder="TIN (CIF ro)"/>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="region" class="form-control form-control-md" placeholder="Trade region"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="city" class="form-control form-control-md" placeholder="City"/>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="county" id="password_confirm" class="form-control form-control-md" placeholder="County"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-outline">
                            <textarea id="address" class="form-control form-control-md" rows="2" placeholder="Street address"></textarea>
                        </div>
                        <br>
                        <div class="form-outline">
                            <input type="text" id="capital" class="form-control form-control-md" placeholder="Social capital"/>
                        </div>
                        <br>
                        <div class="row text-muted">
                            <div class="col-4">
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
                        <div class="row space mt-3">
                            <div class="col d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label text-muted" for="form2Example31"> Agree with <a href="#!">Terms and Conditions </a></label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3" name="sign_in">Add company</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3 px-0 bg-blue"></div>
    </div>
</div>
</body>

</html>
