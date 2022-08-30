@include('layouts.app')

<body>

    @include('layouts.menu')

    <div class="tab-content mx-5 text-center" id="v-pills-tabContent">
        <div class="tab-pane fade show active px-5 py-0 my-0 mx-5" id="company" role="tabpanel"
            aria-labelledby="employee-tab">
            <div class="container edit-background mx-5">
                <div class="row">
                    <div class="col-12 px-0">
                        <div class="card text-black">
                            <div class="card-body text-start">
                                <div class="row edit-background ">
                                    <div class="col">
                                        <h6 class="text-sm"> COMPANY INFORMATION </h6>
                                    </div>
                                    <div class="col text-end">
                                        <a href="{{ route('companies.index') }}" class="btn edit-button"><i
                                            class="bi bi-pencil"></i><span class="px-1">Edit</span></a>
                                    </div>
                                    <div class="col text-start">
                                        <a href="{{ route('company') }}" class="btn add-button"> <i
                                            class="bi bi-person-plus"></i> <span class=" px-1">Add
                                        </span></a>
                                    </div>
            
                                </div>

                                <HR />
                                <form action="{{ route('addCompany') }}" class="" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="company_name" class="form-control form-control-md"
                                        placeholder="Company name" />
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <input type="text" name="cif" class="form-control form-control-md"
                                                placeholder="TIN (CIF ro)" />

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <input type="text" name="nr_reg" class="form-control form-control-md"
                                                placeholder="Trade register" />

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <input type="text" name="city" class="form-control form-control-md"
                                                placeholder="City" />

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <input type="county" name="county" class="form-control form-control-md"
                                                placeholder="County" />

                                        </div>
                                    </div>
                                    <div class="form-outline">
                                        <textarea name="address" class="form-control form-control-md" rows="1" placeholder="Street address"></textarea>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">

                                            <input type="text" name="caen" class="form-control form-control-md"
                                                placeholder="Caen" />

                                        </div>
                                        <div class="col">

                                            <input type="text" name="capital" class="form-control form-control-md"
                                                placeholder="Social capital" />

                                        </div>
                                    </div>
                                    <BR>

                                        <input type="text" name="bank" class="form-control form-control-sm"
                                        placeholder="Bank name" />

                                    <br>

                                    <input type="text" name="iban" class="form-control form-control-sm"
                                        placeholder="IBAN" />

                                    <br>

                                    <div class="row">
                                        <div class="col">

                                            <input type="text" name="phone" class="form-control form-control-md"
                                                placeholder="Phone" />

                                        </div>
                                        <div class="col">

                                            <input type="email" name="email" class="form-control form-control-md"
                                                placeholder="Email" />

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
                                    <div class="row mt-3">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary mt-0">Add
                                                company</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>
