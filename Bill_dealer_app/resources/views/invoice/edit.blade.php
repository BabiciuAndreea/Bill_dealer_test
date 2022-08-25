@include('layouts.app')

<body>

    @include('layouts.menu');

    <div class="tab-content mx-5 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0 mx-5" id="company" role="tabpanel"
            aria-labelledby="employee-tab">
            <div class="row mt-5">
                <div class="col-lg-12 my-5">
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

            <form action="{{ route('invoice.update', $invoice->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row text-start">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">data_emitere:</strong>
                            <input type="text" name="data_emitere" value="{{ $invoice->data_emitere }}"
                                class="form-control text-muted">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong class="px-2">data_scadenta:</strong>
                                <input type="text" name="data_scadenta" value="{{ $invoice->data_scadenta }}"
                                    class="form-control text-muted">
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">serie_factura:</strong>
                            <input type="text" name="serie_factura" value="{{ $invoice->serie_factura }}"
                                class="form-control text-muted">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">nr_factura:</strong>
                            <input type="text" name="nr_factura" value="{{ $invoice->nr_factura }}"
                                class="form-control text-muted">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">id_client:</strong>
                            <input type="text" name="id_client" value="{{ $invoice->id_client }}"
                                class="form-control text-muted">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong class="px-2">id_comanda:</strong>
                                <input type="text" name="id_comanda" value="{{ $invoice->id_comanda }}"
                                    class="form-control text-muted">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong class="px-2">status:</strong>
                                <input type="text" name="status" value="{{ $invoice->status }}"
                                    class="form-control text-muted">
                            </div>
                        </div>
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
