@include('layouts.app')

<body>

    @include('layouts.menu')


    <div class="tab-content mx-5">
        <br>
            <a href="{{ route('client.index') }}" class="btn btn-secondary btn-sm">
            <i class="fa-solid fa-arrow-left-long"></i>
            </a>
        </div>

    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">


    <div class="tab-content mt-5 mx-0 text-center" id="v-pills-tabContent">

        <div class="tab-pane fade show active px-5 py-0 my-0" id="client" role="tabpanel" aria-labelledby="employee-tab">
            <div class="container mt-5">
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
                        @if (count($contactPersons) > 0)
                            @foreach ($contactPersons as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->department }}</td>

                                    <td>
                                        <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                                            <a class="btn-sm edit-buttons"
                                                href="{{ route('contact.edit', $contact->id) }}">Edit</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" align="center">No Records Found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                {!! $contactPersons->links('vendor.pagination.custom') !!}
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <script type="text/javascript">
        $('.show-alert-delete-box').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel", "Yes!"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>

</body>
