@include('layouts.app')

<body>

    @include('layouts.menu');

    <div class="tab-content mx-5 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0 mx-5" id="company" role="tabpanel"
            aria-labelledby="employee-tab">
            <div class="row mt-5">
                <div class="col-lg-12 my-5">
                    <div class="pull-left">
                        <h3>Edit Client</h3>
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

            <form action="{{ route('client.update', $client->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row text-start">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">client_name:</strong>
                            <input type="text" name="client_name" value="{{ $client->client_name }}"
                                class="form-control text-muted">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong class="px-2">cif:</strong>
                                <input type="text" name="cif" value="{{ $client->cif }}"
                                    class="form-control text-muted">
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">nr_reg:</strong>
                            <input type="text" name="nr_reg" value="{{ $client->nr_reg }}"
                                class="form-control text-muted">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">city:</strong>
                            <input type="text" name="city" value="{{ $client->city }}"
                                class="form-control text-muted">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">county:</strong>
                            <input type="text" name="county" value="{{ $client->county }}"
                                class="form-control text-muted">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong class="px-2">address:</strong>
                                <input type="text" name="address" value="{{ $client->address }}"
                                    class="form-control text-muted">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong class="px-2">phone:</strong>
                                <input type="text" name="phone" value="{{ $client->phone }}"
                                    class="form-control text-muted">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong class="px-2">email:</strong>
                                <input type="text" name="email" value="{{ $client->email }}"
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
