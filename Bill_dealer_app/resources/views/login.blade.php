<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bill Dealer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/login.scss" />
</head>

<body>
    <div class="container">
        <div class="row mt-5">
                <img src="{{url('images/upper_image_good2.jpg')}}" alt="" class="img-fluid px-0">
        </div>
        <div class="row background">
            <div class="col-sm-1"></div>
            <div class="col-sm-6 text-white text-center ml-5">
                <h1 class="heading mt-5 ml-5" >Bill <br>
                    Dealer <br>
                    values  <br>
                    technology</h1>

                <h5 class="subtitle mt-5 ml-5">
                    Bill Dealer ensure the least likelihood of <br>human error, and to keep client data safe <br>and secure.
                </h5>
                <br>
                <h6 class="note mt-2 ml-5 mb-">
                    By using the latest in fintech.
                </h6>
            </div>
            <div class="col-sm-5 text-white text-center mt-4">
                <div class="card text-black">
                    <div class="card-body text-start">
                        <form action="/action_page.php" class="was-validated">
                            <div class="mb-3 mt-3 ">
                                <label for="uname" class="form-label">Email:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                        <label class="form-check-label text-muted" for="form2Example31"> Remember me </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <a href="">Forgot password?</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3" name="login">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
