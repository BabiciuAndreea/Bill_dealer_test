@include('layouts.app')

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">
</head>


<body>

    @include('layouts.menu')

    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0" id="client" role="tabpanel" aria-labelledby="employee-tab">
            <div class="container px-0 mx-5 text-size">

                <div class="row mx-5 mt-5">
                    <div class="col-lg-12">
                        <div class="pull-left">
                            <h3>Clients</h3>
                        </div>
                        <div class="pull-right">
                            <a href="#addProductModal" class="btn add-button" data-toggle="modal"> <i
                                    class="bi bi-person-plus"></i> <span class="py-1 px-1">Add client</span></a>
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <table class="table table-striped table-hover w-100 mx-5 mt-2">
                    <thead>
                        <tr>
                            <th class="px-1">ID</th>
                            <th class="px-4">Client name</th>
                            {{-- <th class="px-4">CIF</th>
                            <th class="px-4">Trade register</th>
                            <th class="px-4">City</th>
                            <th class="px-4">County</th>
                            <th class="px-4">Address</th> --}}
                            <th class="px-4">Phone</th>
                            <th class="px-4">Email</th>
                            <th class="px-4">Contact person</th>
                            <th class="px-5">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($clients) > 0)
                            @foreach ($clients as $client)

                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td><a href="{{ route('show.client',$client->id) }}" class="text-decoration-underline">{{ $client->client_name }}<a></td>
                                    {{-- <td>{{ $client->cif }}</td>
                                    <td>{{ $client->nr_reg }}</td>
                                    <td>{{ $client->city }}</td>
                                    <td>{{ $client->county }}</td>
                                    <td>{{ $client->address }}</td> --}}
                                    <td>{{ $client->phone }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>

                                        <a href="{{ route('contact_create', $client->id) }}"> <i
                                                class="bi bi-person-plus mx-2"></i></a>

                                        <a href="{{ route('contact.index', $client->id) }}"> <i
                                                class="bi bi-list"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                                            <a class="btn-sm edit-buttons"
                                                href="{{ route('client.edit', $client->id) }}">Edit</a>


                                            @csrf
                                            @method('DELETE')


                                            <button type="submit"
                                                class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm"
                                                data-toggle="tooltip" title='Delete'>Delete</button>
                                            <!-- <button type="submit" class="btn btn-sm btn-danger">Delete</button> -->
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="11" align="center">No Records Found.</td>
                            </tr>
                        @endif
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
                                        class="form-control @error('name') is-invalid @enderror" name="client_name"
                                        required autocomplete="client_name" autofocus placeholder="Client name">

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
                                        class="form-control @error('nr_reg') is-invalid @enderror" name="nr_reg"
                                        required autocomplete="nr_reg" placeholder="Trade register">

                                    @error('nr_reg')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>


                                <div class="form-outline">
                                    <input id="city" type="text"
                                        class="form-control @error('city') is-invalid @enderror" name="city"
                                        required autocomplete="city" placeholder="City">

                                    @error('paquantityssword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <br>

                                <div class="form-outline">
                                    <input id="county" type="text" class="form-control" name="county"
                                        required autocomplete="county" placeholder="County">
                                </div>
                                <br>
                                <div class="form-outline">
                                    <input id="address" type="text" class="form-control" name="address"
                                        required autocomplete="address" placeholder="Address">
                                </div>
                                <br>
                                <div class="form-outline">
                                    <input id="phone" type="text" class="form-control" name="phone"
                                        required autocomplete="phone" placeholder="Phone">
                                </div>
                                <br>
                                <div class="form-outline">
                                    <input id="email" type="text" class="form-control" name="email"
                                        required autocomplete="email" placeholder="Email">
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-3" name="sign_in">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

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
                                        class="form-control @error('name') is-invalid @enderror" name="client_name"
                                        required autocomplete="client_name" autofocus placeholder="Client name">

                                    @error('client_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-outline">
                                    <input id="cif" type="text"
                                        class="form-control @error('cif') is-invalid @enderror" name="cif"
                                        required autocomplete="cif" autofocus placeholder="Cif">

                                    @error('cif')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-outline">
                                    <input id="nr_reg" type="text"
                                        class="form-control @error('nr_reg') is-invalid @enderror" name="nr_reg"
                                        required autocomplete="nr_reg" placeholder="Trade register">

                                    @error('nr_reg')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>


                                <div class="form-outline">
                                    <input id="city" type="text"
                                        class="form-control @error('city') is-invalid @enderror" name="city"
                                        required autocomplete="city" placeholder="City">

                                    @error('paquantityssword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <br>

                                <div class="form-outline">
                                    <input id="county" type="text" class="form-control" name="county"
                                        required autocomplete="county" placeholder="County">
                                </div>
                                <br>
                                <div class="form-outline">
                                    <input id="address" type="text" class="form-control" name="address"
                                        required autocomplete="address" placeholder="Address">
                                </div>
                                <br>
                                <div class="form-outline">
                                    <input id="phone" type="text" class="form-control" name="phone"
                                        required autocomplete="phone" placeholder="Phone">
                                </div>
                                <br>
                                <div class="form-outline">
                                    <input id="email" type="text" class="form-control" name="email"
                                        required autocomplete="email" placeholder="Email">
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
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <script type="text/javascript">
        $('.show-alert-delete-box').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel", "Yes!"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>



</body>
