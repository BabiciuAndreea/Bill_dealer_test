@include('layouts.app')

<body>

    @include('layouts.menu')

    <div class="tab-content mt-5 mx-0 text-center text-size" id="v-pills-tabContent">

        <div class="tab-pane fade show active px-5 py-0 my-0" id="invoice" role="tabpanel" aria-labelledby="employee-tab">

            <div class="tab-pane fade show active px-5 py-0 my-0" id="invoice" role="tabpanel"
                aria-labelledby="employee-tab">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="pull-left">
                            <h3>Invoices</h3>
                        </div>
                        <div class="pull-right">

                            <a href="#addProductModal" class="btn add-button my-3" data-toggle="modal"> <i
                                    class="bi bi-person-plus"></i> <span class="py-1 px-1">Add invoice</span></a>
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
                            <th class="px-4">Issue date</th>
                            <th class="px-4">Due date</th>
                            <th class="px-4">Invoice serie</th>
                            <th class="px-4">Invoice number</th>
                            <th class="px-5 mx-3">Client</th>
                            <th class="px-4">Order</th>
                            <th class="px-4">Payment method</th>
                            <th class="px-4">Status</th>
                            <th class="px-5">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($invoices) > 0)
                            @foreach ($invoices as $invoice)
                                <tr>
                                    <td>{{ $invoice->id }}</td>
                                    <td>{{ $invoice->data_emitere }}</td>
                                    <td>{{ $invoice->data_scadenta }}</td>
                                    <td>{{ $invoice->serie_factura }}</td>
                                    <td>{{ $invoice->nr_factura }}</td>
                                    <td>
                                        <a>{{ $invoice->client->client_name }}</a>
                                    </td>
                                    <td>

                                            <a href="{{ route('order', $invoice->id) }}"> <i
                                                    class="bi bi-clipboard-plus"></i></a>

                                    </td>
                                    <td>
                                        {{ $invoice->pay }}
                                    </td>
                                    <td>
                                        {{ $invoice->status }}
                                    </td>
                                    <td>
                                        @if ($invoice->status == 'Paid' || $invoice->status == 'Canceled')
                                            <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST">
                                                <a type="button" class="btn-sm edit-buttons"><del>Edit</del></a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" disabled
                                                    class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm"
                                                    data-toggle="tooltip" title='Delete'>Delete</button>
                                                <!-- <button type="submit" class="btn btn-sm btn-danger">Delete</button> -->
                                            </form>
                                        @else
                                            <form action="{{ route('invoices.destroy', $invoice->id) }}"
                                                method="POST">
                                                <a class="btn-sm edit-buttons"
                                                    href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm"
                                                    data-toggle="tooltip" title='Delete'>Delete</button>
                                                <!-- <button type="submit" class="btn btn-sm btn-danger">Delete</button> -->
                                            </form>
                                        @endif
                                        <a href="{{ route('pdf', $invoice->id) }}"> <i
                                                class="bi bi-file-earmark-pdf"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9" align="center">No Records Found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>


                {!! $invoices->links('vendor.pagination.custom') !!}

                <div id="addProductModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content px-5 py-5">
                            <form method="POST" action="{{ route('invoices.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-11">
                                        <h6 class="text-start">Add Invoice</h6>
                                    </div>
                                    <div class="col-1"> <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                </div>
                                <p class="text-muted text-start"> Please fill the fields below.</p>
                                <div class="form-outline">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="data_emitere"
                                        required autocomplete="data_emitere" autofocus placeholder="Issue date">

                                    @error('data_emitere')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-outline">
                                    <input id="data_scadenta" type="text"
                                        class="form-control @error('data_scadenta') is-invalid @enderror"
                                        name="data_scadenta" required autocomplete="data_scadenta" autofocus
                                        placeholder="Due date">

                                    @error('data_scadenta')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-outline">
                                    <input id="serie_factura" type="text"
                                        class="form-control @error('serie_factura') is-invalid @enderror"
                                        name="serie_factura" required autocomplete="serie_factura"
                                        placeholder="Invoice serie">

                                    @error('serie_factura')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>


                                <div class="form-outline">
                                    <input id="nr_factura" type="text"
                                        class="form-control @error('nr_factura') is-invalid @enderror"
                                        name="nr_factura" required autocomplete="nr_factura"
                                        placeholder="Invoice number">

                                    @error('paquantityssword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <br>
                                <select class="form-select py-2" name="client">
                                    <option selected>Select client </option>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->client_name }}</option>
                                    @endforeach
                                </select>

                                <br>

                                <select class="form-select py-2" name="pay">
                                    <option selected>Select payment</option>
                                        <option value="OP">OP</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Card">Card</option>

                                </select>

                                {{-- <div class="form-outline">
                                <input id="id_client" type="text" class="form-control" name="id_client" required autocomplete="id_client" placeholder="Client">
                            </div>
                            <br>
                            <div class="form-outline">
                                <input id="id_comanda" type="text" class="form-control" name="id_comanda" required autocomplete="id_comanda" placeholder="Order">
                            </div>
                            <br>



                            <div class="form-outline">
                                <input id="nr_factura" type="text" class="form-control @error('nr_factura') is-invalid @enderror" name="nr_factura" required autocomplete="nr_factura" placeholder="Invoice number">

                                @error('paquantityssword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <br>

                            <div class="form-outline">
                                <input id="id_client" type="text" class="form-control" name="id_client" required autocomplete="id_client" placeholder="Client">
                            </div>
                            <br>
                            <div class="form-outline">
                                <input id="id_comanda" type="text" class="form-control" name="id_comanda" required autocomplete="id_comanda" placeholder="Order">
                            </div>
                            <br>
                            <div class="form-outline">
                                <input id="status" type="text" class="form-control" name="status" required autocomplete="status" placeholder="Status">
                            </div>

                            <div class="form-outline">
                                <input id="status" type="text" class="form-control" name="status" required autocomplete="status" placeholder="Status">
                            </div> --}}


                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-3" name="sign_in">Add</button>

                                </div>
                            </form>
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
