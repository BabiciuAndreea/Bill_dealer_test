<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container m-5"> 
        <div class="row">
            <div class="col col-sm-2"> 
                <a href="{{route('company.create')}}" type="button" class="btn btn-primary" role="button">Create company</a>
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-2"> 
                <a href="{{route('client.create')}}" type="button" class="btn btn-primary" role="button">Create client</a>
            </div>
        </div>
       <div class="row"> 
            <div class="col col-sm-2"> 
                <a href="{{route('comanda.create')}}" type="button" class="btn btn-primary" role="button">Create comanda</a>
            </div>
        </div>
       <div class="row">
            <div class="col col-sm-2"> 
                <a href="{{route('inv')}}" type="button" class="btn btn-primary" role="button">Create invoice</a>
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-2">
                <a href="{{route('produs.create')}}" type="button" class="btn btn-primary" role="button">Create produs</a>
            </div>
        </div>
        <div class="row">
            <p>butoanele de edit si delete o sa fie pe fiecare usr in parte iar butonul de create ma gandesc ca o sa fie pe pagina de index unde se gasesc listati toti useri</p>
            <div class="col col-sm-2"> 
                <a href="{{ route('users_bill.index') }}" type="button" class="btn btn-primary" role="button">Index user</a>
            </div>
            <div class="col col-sm-2"> 
                <a href="{{ route('users_bill.create') }}" type="button" class="btn btn-primary" role="button">Create user</a>
            </div>
            <div class="col col-sm-2">
                <a href="{{ route('users_bill.edit',1) }}" type="button" class="btn btn-primary" role="button">Edit user</a>
            </div>
        </div>
      
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>