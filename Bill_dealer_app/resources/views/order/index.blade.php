@include('layouts.app')

<body>

    @include('layouts.menu')

    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0" id="invoice" role="tabpanel" aria-labelledby="employee-tab">
            <div class="container">

                <h3 class="text-start">ORDER</h3>
                <br>
                <div class="row text-start">
                    <select id="list" onchange="getSelectValue()" class="form-select ms-3 products-select"
                        aria-label="Default select example">
                        <option selected>Select products </option>
                        @foreach ($products as $product)
                            <option value="{{ $product->name }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                {{-- {!! $products->links('vendor.pagination.custom') !!} --}}
                <br>


                <br>
                <table class="table table-striped table-hover w-100">
                    <thead>
                        <tr>
                        <tr>
                            <th class="px-4">ID</th>
                            <th class="px-4">Name</th>
                            <th class="px-4">Price</th>
                            <th class="px-4">Unit</th>
                            <th class="px-4">Type</th>
                            <th class="px-5">Quantity</th>
                            <th class="px-5">TVA</th>
                            <th class="px-5">Actions</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @if (count($invoices) > 0)
                            @foreach ($invoices as $invoice) --}}
                        <tr>
                            {{-- <td>{{ $invoice->id }}</td>
                                    <td>{{ $invoice->data_emitere }}</td>
                                    <td>{{ $invoice->data_scadenta }}</td>
                                    <td>{{ $invoice->serie_factura }}</td>
                                    <td>{{ $invoice->nr_factura }}</td>
                                    <td>{{ $invoice->id_client }}</td>
                                    <td>{{ $invoice->id_comanda }}</td>
                                    <td>{{ $invoice->status }}</td> --}}
                            <td>1</td>
                            <td>Mere</td>
                            <td>12 lei</td>
                            <td>Kilograme</td>
                            <td>Product</td>
                            <td>
                                <div class="form-outline">
                                    <input id="order_quantity" type="text"
                                        class="form-control-center ms-4 px -0 text-center" name="order_quantity"
                                        required autocomplete="order_quantity" placeholder="">
                                </div>
                            </td>
                            <td>
                                <select class="form-select ms-3 py-0" aria-label="tva">
                                    <option value="19">19%</option>
                                    <option value="9">9%</option>
                                    <option value="5">5%</option>
                                </select>
                            </td>
                            <td>
                                {{-- <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE') --}}

                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                {{-- </form> --}}
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                        {{-- @else
                                    <tr>
                                        <td colspan="9" align="center">No Records Found.</td>
                                    </tr>
                                @endif --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function getSelectValue() {
            var selectedValue = document.getElementById("list").value;
        
        }
    </script>
</body>
