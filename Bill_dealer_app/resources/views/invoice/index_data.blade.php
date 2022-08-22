@foreach ($invoices as $invoice)
<tr>
    <td>{{ $invoice->id }}</td>
    <td>{{ $invoice->data_emitere }}</td>
    <td>{{ $invoice->data_scadenta }}</td>
    <td>{{ $invoice->serie_factura }}</td>
    <td>{{ $invoice->nr_factura }}</td>
    <td>{{ $invoice->id_client }}</td>
    <td>{{ $invoice->id_comanda }}</td>
    <td>{{ $invoice->status }}</td>
    <td>
        <form action="{{ route('invoice.destroy', $invoice->id) }}" method="POST">
            <a class="btn-sm edit-buttons"
                href="{{ route('invoice.edit', $invoice->id) }}">Edit</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    </td>
</tr>
@endforeach