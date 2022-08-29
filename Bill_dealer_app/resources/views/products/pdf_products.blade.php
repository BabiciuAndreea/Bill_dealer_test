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
        <h2 class="text-center mb-3">Products</h2>

    </div>
    <table class="table table-bordered mb-5">
        <thead>
            <tr class="table-danger">
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Unit</th>
                <th>Quantity</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->unit }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->type }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>
