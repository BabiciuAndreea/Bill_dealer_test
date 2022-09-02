@include('layouts.app')



<head>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- css creat de Dana -->
    <link href="{{ asset('css/employee.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>


    @include('layouts.menu')


    <div class="content">
        <div class="container-fluid">
            <div class="row mx-2  mt-5 w-100">
                <!-- <div class="row mx-2 mt-1 w-100"> -->
                    <div class="col-xl-6">
                        <!-- table for invoices -->
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="card-tools">
                                    <h3 class="card-title">Unpaid invoices</h3>
                                    <a href="{{ route('unpaid_invoices_pdf') }}" class="btn btn-secondary btn-sm">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <a href="{{ route('excel_invoice') }}" target="_blank" class="btn btn-secondary btn-sm">
                                        <i class="fa-regular fa-file-excel"></i>
                                    </a>
                                </div>
                                <table class="table table-striped table-valign-middle" id="table">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Invoice</th>
                                            <th>Issue date</th>
                                            <th>Due date</th>
                                            <th>Status</th>
                                        </tr>
                                        @foreach($invoices as $invoice)

                                        <tr>
                                            <td>{{$invoice->id_client}}</td>
                                            <td>{{$invoice->nr_factura}}</td>
                                            <td>{{$invoice->data_emitere}}</td>
                                            <td>{{$invoice->data_scadenta}}</td>
                                            <td>{{$invoice->status}}</td>
                                        </tr>
                                        @endforeach

                                    </thead>
                                </table>
                                {!! $invoices->links('vendor.pagination.custom') !!}
                            </div>
                        </div>

                        <!-- another card -->
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title">Products</h3>
                                <div class="card-tools">

                                    <a href="{{ route('produs_pdf') }}" class="btn btn-secondary btn-sm">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <a href="{{ route('excel') }}" target="_blank" class="btn btn-secondary btn-sm">
                                        <i class="fa-regular fa-file-excel"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>More</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                {{ $product->name }}
                                            </td>
                                            <td>{{ $product->price }}</td>

                                            <td>{{ $product->quantity }}</td>
                                            <td>
                                                <a href="#" class="text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $products->links('vendor.pagination.custom') !!}
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-xl-6">


                    <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title">BNR COURSE</h3>
                                <div class="card-body">
                                    <table class="table">
                                        @foreach($curs->rates as $rate)
                                        @if(in_array($rate->currency, $coins))
                                        <tr>
                                            <td>{{$rate->multiplier}} {{$rate->currency}}</td>
                                            <td>{{$rate->rate}} RON</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                        </div>

                         <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Sales</h3>
                                    <div class="card-tools">

                                        <a href="{{ route('produs_pdf') }}" class="btn btn-secondary btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="{{ route('excel') }}" target="_blank" class="btn btn-secondary btn-sm">
                                            <i class="fa-regular fa-file-excel"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">$18,230.00</span>
                                        <span>Sales Over Time</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                                        <span class="text-success">
                                            <i class="fas fa-arrow-up"></i> 33.1%
                                        </span>
                                        <span class="text-muted">Since last month</span>
                                    </p>
                                </div>
                                <!-- /.d-flex --> -->

                                <div class="position-relative mb-4">
                                    <canvas id="sales-chart" height="200"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> This year
                                    </span>

                                    <span>
                                        <i class="fas fa-square text-gray"></i> Last year
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- /.card -->

                    </div>
                <!-- </div> -->
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>




    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


     <!-- de unde ia pentru primele doua grafice, pentru vizitatori si sales -->

   <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('dist/js/pages/dashboard3.js') }}"></script>

    @section('scripts')



    @endsection

</body>
