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
                   <div class="card-body text-start pb-0">
                       <div class="row">
                           <div class="col-11"> <h6>ADD EMPLOYEE</h6></div>
                           <div class="col-1"><button type="button" class="btn-close" aria-label="Close"></button></div>
                       </div>
                       <p class="text-muted"> Please fill the fields below.</p>

                       <form action="" class="was-validated" method="POST">
                           <div class="row">
                               <div class="col-md-6 mb-4">
                                   <div class="form-outline">
                                       <input type="text" id="first_name" class="form-control form-control-md" placeholder="First name"/>
                                   </div>
                               </div>
                               <div class="col-md-6 mb-4">
                                   <div class="form-outline">
                                       <input type="text" id="last_name" class="form-control form-control-md" placeholder="Last name"/>
                                   </div>
                               </div>
                           </div>
                           <div class="form-outline">
                               <input type="email" id="email" class="form-control form-control-md" placeholder="Email"/>
                           </div>
                           <br>
                           <div class="row">
                               <div class="col-md-6 mb-4">
                                   <div class="form-outline">
                                       <input type="password" id="password" class="form-control form-control-md" placeholder="Password"/>
                                   </div>
                               </div>
                               <div class="col-md-6 mb-4">
                                   <div class="form-outline">
                                       <input type="password" id="password_confirm" class="form-control form-control-md" placeholder="Password confirm"/>
                                   </div>
                               </div>
                           </div>

                               <div class="col-md-12 mb-4">
                                   <div class="form-outline">
                                       <textarea id="address" class="form-control form-control-md" rows="4" placeholder="Address"></textarea>
                                   </div>
                               </div>
                               <div class="col-md-12 mb-4">
                                   <div class="form-outline">
                                       <input type="text" id="zip_code" class="form-control form-control-md" placeholder="Zip code"/>
                                   </div>
                               </div>
                           <div class="row">
                               <div class="col-md-5 mb-4">
                                   <div class="form-outline">
                                       <input type="text" id="phone" class="form-control form-control-md" placeholder="Phone"/>
                                   </div>
                               </div>
                               <div class="col-md-7 mb-4">
                                       <div class="form-outline">
                                           <input type="text" id="cnp" class="form-control form-control-md" placeholder="CNP"/>
                                       </div>
                               </div>
                           </div>
                           <div class="text-center">
                               <button type="submit" class="btn btn-primary mt-1 mb-2" name="sign_in">Add employee</button>
                           </div>
                       </form>
                   </div>
                   </div>
               </div>
               <div class="col-sm-3 px-0 bg-blue">
               </div>
           </div>
    </div>
</body>

</html>
