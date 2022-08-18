@include('layouts.app')

<body>

    @include('layouts.menu');

    <div class="tab-content mx-5 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0 mx-5" id="company1" role="tabpanel"
            aria-labelledby="employee-tab">
            <div class="row mt-5">
                <div class="col-lg-12 my-5">
                    <div class="pull-left">
                        <h3>Add Product</h3>
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

            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="row text-start">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">Name:</strong>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">Price:</strong>
                            <input type="text" name="price" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">Unit:</strong>
                            <input type="text" name="unit" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">Quantity:</strong>
                            <input type="text" name="quantity" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong class="px-2">Type:</strong>
                            <input type="text" name="type" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
                        <button type="submit" class="btn btn-success">Add Product</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>
