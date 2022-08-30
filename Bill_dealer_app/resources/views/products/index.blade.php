@include('layouts.app')

<body>

    @include('layouts.menu')

    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-4 py-0 my-0 mx-0 bigger" id="company" role="tabpanel"
            aria-labelledby="employee-tab">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pull-left">
                        <h3>Products</h3>
                    </div>
                    <div class="pull-right">
                        <a href="#addProductModal" class="btn add-button my-3" data-toggle="modal"> <i
                            class="bi bi-person-plus"></i> <span class="py-1 px-1">Add product</span></a>
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
                        <th>Name</th>
                        <th>Price</th>
                        <th>Unit</th>
                        <th>Quantity</th>
                        <th>Type</th>
                        <th class="px-5">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($products) > 0)
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->unit }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->type }}</td>
                            <td>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    <a class="btn-sm edit-buttons"
                                        href="{{ route('products.edit', $product->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else
                            <tr>
                                <td colspan="7" align="center">No Records Found.</td>
                            </tr>
                        @endif
                </tbody>
            </table>

            {!! $products->links('vendor.pagination.custom') !!}

            <div id="addProductModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content px-5 py-5">
                        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-11">
                                    <h6 class="text-start">ADD PRODUCT</h6>
                                </div>
                                <div class="col-1"> <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                </div>
                            </div>
                            <p class="text-muted text-start"> Please fill the fields below.</p>
                                    <div class="form-outline">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror"
                                            name="name" required
                                            autocomplete="name" autofocus placeholder="Product name">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-outline">
                                        <input id="price" type="text"
                                            class="form-control @error('price') is-invalid @enderror"
                                            name="price"  required
                                            autocomplete="price" autofocus placeholder="Price">

                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <br>
                            <div class="form-outline">
                                <input id="unit" type="text"
                                    class="form-control @error('unit') is-invalid @enderror" name="unit"
                                required autocomplete="unit" placeholder="Unit">

                                @error('unit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                          
                               
                                    <div class="form-outline">
                                        <input id="quantity" type="text"
                                            class="form-control @error('quantity') is-invalid @enderror" name="quantity"
                                            required autocomplete="quantity" placeholder="Quantity">

                                        @error('paquantityssword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                               
                                    <br>
                                
                                    <div class="form-outline">
                                        <input id="type" type="text" class="form-control"
                                            name="type" required autocomplete="type"
                                            placeholder="Type">
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
