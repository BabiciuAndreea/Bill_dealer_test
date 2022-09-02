<!DOCTYPE html>
<html lang="en">

<head>

    <style type="text/css">
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: center;
            padding: 16px;
        }

        th:first-child,
        td:first-child {
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Unpaid invoices</h2>

    </div>
    <table class="table table-bordered mb-5">
        <thead>
            <tr class="table-danger">
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
            </tbody>
    </table>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>
