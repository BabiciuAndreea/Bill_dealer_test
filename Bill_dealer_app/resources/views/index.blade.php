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

        <div class="row col-sm-2"> <a href="{{route('cmp')}}" type="button" class="btn btn-primary" role="button">Create company</a></div>
        <div class="row col-sm-2"> <a href="{{route('cli')}}" type="button" class="btn btn-primary" role="button">Create client</a></div>
        <div class="row col-sm-2"> <a href="{{route('cmd')}}" type="button" class="btn btn-primary" role="button">Create comanda</a></div>
        <div class="row col-sm-2"> <a href="{{route('inv')}}" type="button" class="btn btn-primary" role="button">Create invoice</a></div>
        <div class="row col-sm-2"> <a href="{{route('prod')}}" type="button" class="btn btn-primary" role="button">Create produs</a></div>
        <div class="row col-sm-2"> <a href="{{route('user')}}" type="button" class="btn btn-primary" role="button">Create user</a></div>
      
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>