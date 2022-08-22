@include('layouts.app')

<body>

    @include('layouts.menu');

    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0 bigger" id="invoice" role="tabpanel"
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

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Data emitere</th>
                        <th>Data scadenta</th>
                        <th>Serie factura</th>
                        <th>Numar factura</th>
                        <th>Id client</th>
                        <th>Id comanda</th>
                        <th>Status</th>
                        <th class="px-5">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->id }}</td>
                            <td>{{ $invoice->data_emitere }}</td>
                            <td>{{ $invoice->data_scadenta }}</td>
                            <td>{{ $invoice->serie_factura }}</td>
                            <td>{{ $invoice->nr_factura }}</td>
                            <td>{{ $invoice->id_client }}</td>
                            <td>{{ $invoice->id_comanda }}</td>
                            <td>{{ $invoice->status }}</td>
                            <td>
                                <form action="{{ route('invoice.destroy', $invoice->id) }}" method="POST">
                                    <a class="btn-sm edit-buttons"
                                        href="{{ route('invoice.edit', $invoice->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $invoices->links('vendor.pagination.custom') !!}

            <div id="addProductModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content px-5 py-5">
                        <form method="GET" action="{{ route('invoice.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-11">
                                    <h6 class="text-start">ADD Invoice</h6>
                                </div>
                                <div class="col-1"> <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                </div>
                            </div>
                            <p class="text-muted text-start"> Please fill the fields below.</p>
                                    <div class="form-outline">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror"
                                            name="data_emitere" required
                                            autocomplete="data_emitere" autofocus placeholder="data_emitere">

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
                                            name="data_scadenta"  required
                                            autocomplete="data_scadenta" autofocus placeholder="data_scadenta">

                                        @error('data_scadenta')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <br>
                            <div class="form-outline">
                                <input id="serie_factura" type="text"
                                    class="form-control @error('serie_factura') is-invalid @enderror" name="serie_factura"
                                required autocomplete="serie_factura" placeholder="serie_factura">

                                @error('serie_factura')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                          
                               
                                    <div class="form-outline">
                                        <input id="nr_factura" type="text"
                                            class="form-control @error('nr_factura') is-invalid @enderror" name="nr_factura"
                                            required autocomplete="nr_factura" placeholder="nr_factura">

                                        @error('paquantityssword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                               
                                    <br>
                                
                                    <div class="form-outline">
                                        <input id="id_client" type="text" class="form-control"
                                            name="id_client" required autocomplete="id_client"
                                            placeholder="id_client">
                                    </div>
                                    <br>
                                    <div class="form-outline">
                                        <input id="id_comanda" type="text" class="form-control"
                                            name="id_comanda" required autocomplete="id_comanda"
                                            placeholder="id_comanda">
                                    </div>
                                    <br>
                                    <div class="form-outline">
                                        <input id="status" type="text" class="form-control"
                                            name="status" required autocomplete="status"
                                            placeholder="status">
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
