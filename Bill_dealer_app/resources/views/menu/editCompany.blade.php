@include('layouts.app')

<body>
    @include('layouts.menu')

    <div class="tab-content mx-5 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0 mx-5" id="company" role="tabpanel"
            aria-labelledby="employee-tab">
            <div class="container edit-background mx-5">
                <div class="row">
                    <div class="col-2 pr-0 bg-org">
                    </div>
                    <div class="col-8 px-0">
                        <div class="card text-black">
                            <div class="card-body text-start">
                                <div class="row edit-background mx-5">
                                    <div class="col">
                                        <a href="{{ route('companies.index') }}" class="btn edit-button"><i
                                            class="bi bi-pencil"></i><span class="px-1">Edit</span></a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('company') }}" class="btn add-button"> <i
                                            class="bi bi-person-plus"></i> <span class=" px-1">Add
                                        </span></a>
                                    </div>
            
                                </div>

                                <HR />

                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your
                                        input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (count($companies) > 0)
                                @foreach ($companies as $company)
                                <form action="{{ route('companies.update', $company->id) }}" method="POST">
                                   
                                        <input type="text" name="company_name" class="form-control form-control-md"
                                            placeholder="Company name" value="{{ $company->company_name }}" />
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <input type="text" name="cif"
                                                    class="form-control form-control-md" value="{{ $company->cif}}" placeholder="TIN (CIF ro)" />

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <input type="text" name="nr_reg"
                                                    class="form-control form-control-md" value="{{ $company->nr_reg}}" placeholder="Trade register" />

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <input type="text" name="city"
                                                    class="form-control form-control-md" value="{{ $company->city}}" placeholder="City" />

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <input type="county" name="county"
                                                    class="form-control form-control-md" value="{{ $company->county}}" placeholder="County" />

                                            </div>
                                        </div>
                                        <div class="form-outline">
                                            <input type="county" name="address"
                                                    class="form-control form-control-lg text-sm" value="{{ $company->address}}" placeholder="Street address" />
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">

                                                <input type="text" name="caen" value="{{ $company->caen}}" 
                                                    class="form-control form-control-md" placeholder="Caen" />

                                            </div>
                                            <div class="col">

                                                <input type="text" name="capital" value="{{ $company->capital}}"
                                                    class="form-control form-control-md" placeholder="Social capital" />

                                            </div>
                                        </div>
                                        <BR>

                                            <input type="text" name="bank" class="form-control form-control-md"
                                        value="{{ $company->bank}}"  placeholder="Bank name" />
                                        </br>

                                        <input type="text" name="iban" class="form-control form-control-md"
                                        value="{{ $company->iban}}"  placeholder="IBAN" />

                                        <br>
                                        <div class="row">
                                            <div class="col">

                                                <input type="text" name="phone" value="{{ $company->phone}}"
                                                    class="form-control form-control-md" placeholder="Phone" />

                                            </div>
                                            <div class="col">

                                                <input type="email" name="email" value="{{ $company->email}}"
                                                    class="form-control form-control-md" placeholder="Email" />

                                            </div>
                                        </div>
                                        <div class="row mt-3 text-center">

                                            <div class="checkbox checkbox-success">
                                                <input class="form-check-input" name="tva" id="test"
                                                    type="checkbox" value="test">
                                                <label class="form-check-label text-muted" for="test">VAT
                                                    payer?</label>
                                            </div>

                                        </div>

                                        <div class="form-group row mt-2 ms-3">
                                            <label for="logo" class="col-md-2 col-form-label text-md-right"> LOGO
                                            </label>
                                            <div class="col-md-6">
                                                <input id="logo" type="file" name="logo">
                                            </div>
                                        </div>
                                        @csrf
                                        @method('PUT')

                                        <div class="row mt-3 ">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary mt-0">Edit
                                                    company</button>
                                            </div>
                                        </div>
                                   
                                </form>
                                @endforeach
                                @else
                            <tr>
                                <td colspan="2" align="center">There is no company to edit. <br> Please add one.</td>
                            </tr>
                        @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-2 px-0 bg-blue"></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
