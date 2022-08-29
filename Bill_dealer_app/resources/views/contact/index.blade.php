@include('layouts.app')

<body>

    @include('layouts.menu')

    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0" id="client" role="tabpanel" aria-labelledby="employee-tab">

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
                    @foreach ($contactPersons as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->department }}</td>

                            <td>
                                <form action="{{ route('client.destroy', $contact->id) }}" method="POST">
                                    <a class="btn-sm edit-buttons"
                                        href="{{ route('client.edit', $contact->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $contactPersons->links('vendor.pagination.custom') !!}
        </div>
    </div>

</body>
