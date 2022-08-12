<html>
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    />
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>
        Laravel App
    </title>
    <link
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    />
</head>
<body class="w-full h-full bg-gray-100">
    <div class="container">
    <div class="w-4/5 mx-auto">
        <div class="text-center pt-20">
            <h1 class="text-3xl text-gray-700">
                All Users
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>
    </div>

    @if (session()->has('message'))
        <div class="mx-auto w-4/5 pb-10">
            <div class="bg-red-500 text-white font-bold ronded-t px-4 py-2">
                Warning
            </div>
            <div class="borde boreder-t-1 boreder-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                {{ session()->get('message') }}
            </div>
        </div>
    @endif

    @foreach($users as $user)
        <div class="w-4/5 mx-auto pb-10">
            <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-10 sm:pb-0">
                <div class="w-11/12 mx-auto pb-10">
                    <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                        <a href="{{ route('users_bill.show', $user->id) }}">
                            {{ $user->first_name }} {{ $user->last_name }}
                        </a>
                    </h2>

                   
                    <p class="text-gray-900 text-lg py-8 w-full break-words">
                        email:{{ $user->email }}
                    </p>
                    <div class="row">
                        <div class="col col-sm-2">
                            <a href="{{ route('users_bill.edit', $user->id) }}" type="button" class="btn btn-info" role="button">Edit user</a>
                        </div>
                        <div class="col col-sm-2">
                            <form action="{{ route('users_bill.destroy',$user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type ="submit" class="btn btn-danger" role="button">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
</div>
</body>
</html>