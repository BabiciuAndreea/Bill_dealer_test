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
    <title>
        Laravel App
    </title>
    <link
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    />
</head>
<body class="w-full h-full bg-gray-100">
    <div class="w-4/5 mx-auto">
        <div class="text-center pt-20">
            <h1 class="text-3xl text-gray-700">
            
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>

        <div class="py-10 sm:py-20">
          
        </div>
    </div>

    
        <div class="w-4/5 mx-auto pb-10">
            <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-10 sm:pb-0">
                <div class="w-11/12 mx-auto pb-10">
                    <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                            {{ $user->first_name }} {{ $user->last_name }}
                    </h2>
                    <p class="text-gray-900 text-lg py-8 w-full break-words">
                        tel: {{ $user->phone }}
                    </p>
                    <p class="text-gray-900 text-lg py-8 w-full break-words">
                        email: {{ $user->email }}
                    </p>
                    <p class="text-gray-900 text-lg py-8 w-full break-words">
                        address: {{ $user->address }}
                    </p>
                    <p class="text-gray-900 text-lg py-8 w-full break-words">
                        role: {{ $user->role }}
                    </p>

                </div>
            </div>
        </div>
   
</body>
</html>