@include('layouts.app')

<body>

    @include('layouts.menu');

    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0" id="client" role="tabpanel"
            aria-labelledby="employee-tab">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pull-left">
                        <h3>Clients</h3>
                    </div>
                    <div class="pull-right">
                        <a href="#addProductModal" class="btn add-button my-3" data-toggle="modal"> <i
                                class="bi bi-person-plus"></i> <span class="py-1 px-1">Add client</span></a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-striped table-hover w-100">
                <thead>
                    <tr>
                        <th class="px-1">ID</th>
                        <th class="px-4">Client name</th>
                        <th class="px-4">CIF</th>
                        <th class="px-4">Trade register</th>
                        <th class="px-4">City</th>
                        <th class="px-4">County</th>
                        <th class="px-4">Address</th>
                        <th class="px-4">Phone</th>
                        <th class="px-4">Email</th>
                        <th class="px-5">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->client_name }}</td>
                            <td>{{ $client->cif }}</td>
                            <td>{{ $client->nr_reg }}</td>
                            <td>{{ $client->city }}</td>
                            <td>{{ $client->county }}</td>
                            <td>{{ $client->address }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>{{ $client->email }}</td>
                            <td>
                                <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                                    <a class="btn-sm edit-buttons"
                                        href="{{ route('client.edit', $client->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $clients->links('vendor.pagination.custom') !!}

            <div id="addProductModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content px-5 py-5">
                        <form method="POST" action="{{ route('client.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-11">
                                    <h6 class="text-start">Add Client</h6>
                                </div>
                                <div class="col-1"> <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                </div>
                            </div>
                            <p class="text-muted text-start"> Please fill the fields below.</p>
                            <div class="form-outline">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="client_name" required
                                    autocomplete="client_name" autofocus placeholder="Client name">

                                @error('client_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-outline">
                                <input id="cif" type="text"
                                    class="form-control @error('cif') is-invalid @enderror" name="cif" required
                                    autocomplete="cif" autofocus placeholder="Cif">

                                @error('cif')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-outline">
                                <input id="nr_reg" type="text"
                                    class="form-control @error('nr_reg') is-invalid @enderror" name="nr_reg" required
                                    autocomplete="nr_reg" placeholder="Trade register">

                                @error('nr_reg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>


                            <div class="form-outline">
                                <input id="city" type="text"
                                    class="form-control @error('city') is-invalid @enderror" name="city" required
                                    autocomplete="city" placeholder="City">

                                @error('paquantityssword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <br>

                            <div class="form-outline">
                                <input id="county" type="text" class="form-control" name="county" required
                                    autocomplete="county" placeholder="County">
                            </div>
                            <br>
                            <div class="form-outline">
                                <input id="address" type="text" class="form-control" name="address" required
                                    autocomplete="address" placeholder="Address">
                            </div>
                            <br>
                            <div class="form-outline">
                                <input id="phone" type="text" class="form-control" name="phone" required
                                    autocomplete="phone" placeholder="Phone">
                            </div>
                            <br>
                            <div class="form-outline">
                                <input id="email" type="text" class="form-control" name="email" required
                                    autocomplete="email" placeholder="Email">
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3" name="sign_in">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


</body>
