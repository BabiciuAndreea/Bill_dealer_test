@include('layouts.app')

<body>

    @include('layouts.menu')

    <div class="pull-left">
        <a href="{{ route('invoice.index') }}" class="btn btn-secondary btn-sm mt-2 mx-2">
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
    </div>

    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0" id="invoice" role="tabpanel" aria-labelledby="employee-tab">
            <div class="container">
                <form action="{{ route('show_order', $invoice->id) }}" method="POST">
                    @csrf
                    <h3 class="text-start">ORDER</h3>
                    <br>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <select name="list" class="form-select-lg products-select py-2 px-5">
                                        <option selected>Select products </option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </th>
                                <th scope="col">
                                    <div class="form-outline">
                                        <input id="order_quantity" type="text"
                                            class="form-control products-select px-0 text-center" name="order_quantity"
                                            autocomplete="order_quantity" placeholder="Quantity">
                                    </div>
                                </th>
                                <th scope="col"><select class="form-select-lg products-select py-2 px-5"
                                        name="tva">
                                        <option selected>TVA</option>
                                        <option value="19">19%</option>
                                        <option value="9">9%</option>
                                        <option value="5">5%</option>
                                    </select></th>
                                <th scope="col"><button type="submit" class="btn edit-button mx-3 px-5"
                                        name="add_product">Add</button></th>
                            </tr>
                        </thead>
                    </table>
                </form>
                <br>
                <br>
                <table class="table table-striped table-hover w-100 pr-5">
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

                        @if (count($invoice->orders) > 0)
                            {{-- @foreach ($orders as $order) --}}
                            @foreach ($invoice->orders as $order)
                                <tr>
                                    <td>{{ $order->product->id }}</td>
                                    <td>{{ $order->product->name }}</td>
                                    <td>{{ $order->product->price }}</td>
                                    <td>{{ $order->product->unit }}</td>
                                    <td>{{ $order->product->type }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ $order->tva }}%</td>
                                    <td>
                                        <form action="{{ route('order.destroy', ['id' => $order->id, 'invoice_id' => $invoice->id]) }}" method="POST">                                            @csrf
                                            @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
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
               
                <form action="{{ route('invoice.index') }}" method="get">
                    @csrf
                    <button type="submit" class="btn edit-button mx-3 mt-3 px-5" name="add_product">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function getSelectValue() {
            var selectedValue = document.getElementById("list").value;

            console.log(selectedValue);

        }
    </script>
</body>
