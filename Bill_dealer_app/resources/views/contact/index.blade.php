@include('layouts.app')

<body>

    @include('layouts.menu')

    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0" id="client" role="tabpanel"
            aria-labelledby="employee-tab">

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

            <table class="table table-striped table-hover w-100">
                <thead>
                    <tr>
                        <th class="px-1">ID</th>
                        <th class="px-4">Contact name</th>
                        <th class="px-4">Phone</th>
                        <th class="px-4">Email</th>
                        <th class="px-4">Department</th>
                        <th class="px-5">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($clients as $client) --}}
                        <tr>
                            {{-- <td>{{ $client->id }}</td>
                            <td>{{ $client->client_name }}</td>
                            <td>{{ $client->cif }}</td>
                            <td>{{ $client->nr_reg }}</td>
                            <td>{{ $client->city }}</td>
                            <td>{{ $client->county }}</td>
                            <td>{{ $client->address }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>{{ $client->email }}</td> --}}
                            <td>
                                {{-- <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                                    <a class="btn-sm edit-buttons"
                                        href="{{ route('client.edit', $client->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>

            {{-- {!! $clients->links('vendor.pagination.custom') !!} --}}
        </div>
    </div>

</body>