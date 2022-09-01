@include('layouts.app')

<body>

    @include('layouts.menu')

    <div class="tab-content mx-5 text-center" id="v-pills-tabContent">

        <br>
        <div class="pull-left">
            <a href="{{ route('invoice.index') }}" class="btn btn-secondary btn-sm">
                <i class="fa-solid fa-arrow-left-long"></i>
            </a>
        </div>
        <div class="tab-pane fade show active px-5 py-0 my-0 mx-5" id="company" role="tabpanel"
            aria-labelledby="employee-tab">
            <div class="row mt-2">
                <div class="col-lg-12 my-4">
                    <div class="pull-left">
                        <h3>Edit Invoice</h3>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('invoices.update', $invoice->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row text-start">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">Issue date:</strong>
                            <input type="text" name="data_emitere" value="{{ $invoice->data_emitere }}"
                                class="form-control text-muted">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong class="px-2">Due date:</strong>
                                <input type="text" name="data_scadenta" value="{{ $invoice->data_scadenta }}"
                                    class="form-control text-muted">
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">Invoice serie:</strong>
                            <input type="text" name="serie_factura" value="{{ $invoice->serie_factura }}"
                                class="form-control text-muted">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">Invoice number:</strong>
                            <input type="text" name="nr_factura" value="{{ $invoice->nr_factura }}"
                                class="form-control text-muted">
                        </div>
                    </div>
                    @if (count($invoice->orders) > 0)
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <strong class="px-2">Status:</strong>
                            <select class="form-select py-2" name="status" aria-label="status">
                                <option value="Draft">Draft</option>
                                <option value="Issued">Issued</option>
                                <option value="Canceled">Canceled</option>
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                            </select>
                        </div>
                    @else
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <strong class="px-2">Status:</strong>
                            <select class="form-select py-2" name="status" aria-label="status">
                                <option value="Draft">Draft</option>
                                <option value="Issued">Issued</option>
                                <option value="Canceled">Canceled</option>
                                {{-- <option value="Paid">Paid</option> --}}
                                <option value="Unpaid">Unpaid</option>
                            </select>
                        </div>
                    @endif

                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <strong class="px-2">Client:</strong>
                        <select class="form-select py-2" name="client">
                            <option selected value="{{ $clients[$invoice->id_client - 1]->id }}">
                                {{ $clients[$invoice->id_client - 1]->client_name }}</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->client_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <br>

                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <strong class="px-2">Payment method:</strong>
                        <select class="form-select py-2" name="pay">
                            <option selected value="{{ $invoice->pay }}">{{ $invoice->pay }}</option>
                            <option value="OP">OP</option>
                            <option value="Cash">Cash</option>
                            <option value="Card">Card</option>

                        </select>
                    </div>
              
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <strong class="px-2">Contact:</strong>
                        <select class="form-select py-2" name="contact">
                            <option selected>Select contact </option>
                            @foreach ($invoice->client->contacts as $contact)
                                <option value="{{ $contact->id }}">{{ $contact->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    {{-- @if ($invoice->id_client == $client->$contact->client_id) --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 ">

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    </div>
    </div>

</body>

</html>
