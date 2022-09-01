@include('layouts.app')

<body>

    @include('layouts.menu')

    <div class="pull-left">
        <a href="{{ route('client.index') }}" class="btn btn-secondary btn-sm mt-3 mx-3">
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
    </div>

    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0" id="client" role="tabpanel" aria-labelledby="employee-tab">
            <div class="container mx-5 mt-5">
                <h1> Client information </h1>
                
                <div class="row mt-5 mx-2 text-start">
                    <div class="col"><strong class="text-start text-size">Client name:</strong></div>
                    <div class="col"> <p class="text-start text-size">{{ $client->client_name }}</p></div>
                </div>

                <div class="row mx-2 text-start">
                    <div class="col"><strong class="text-start text-size">CIF:</strong></div>
                    <div class="col"> <p class="text-start text-size">{{ $client->cif }}</p></div>
                </div>

                <div class="row mx-2 text-start">
                    <div class="col"><strong class="text-start text-size">Trade register:</strong></div>
                    <div class="col"> <p class="text-start text-size">{{ $client->nr_reg }}</p></div>
                </div>

                <div class="row mx-2 text-start">
                    <div class="col"><strong class="text-start text-size">Address:</strong></div>
                    <div class="col"> <p class="text-start text-size">{{ $client->address }}, {{ $client->city }}, {{ $client->county }}</p></div>
                </div>

                <div class="row mx-2 text-start">
                    <div class="col"><strong class="text-start text-size">Phone:</strong></div>
                    <div class="col"> <p class="text-start text-size">{{ $client->phone }}</p></div>
                </div>
                
                <div class="row mx-2 text-start">
                    <div class="col"><strong class="text-start text-size">Email:</strong></div>
                    <div class="col"> <p class="text-start text-size">{{ $client->email }}</p></div>
                </div>
            </div>
        </div>
    </div>
</body>
