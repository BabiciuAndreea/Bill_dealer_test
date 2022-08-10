@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 pr-0 bg-org">
            </div>
            <div class="col-sm-6 px-0">
                <div class="card text-black">
                    <div class="card-body text-start">
                        <div class="row">
                            <h6>ADD YOUR COMPANY</h6>
                        </div>
                        <p class="text-muted"> Please fill the fields below.</p>
                        <HR/>
                        <form action="/action_page.php" class="" method="POST">
                            <div class="form-outline">
                                <input type="text" id="company_name" class="form-control form-control-md" placeholder="Company name"/>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="cif" class="form-control form-control-md" placeholder="TIN (CIF ro)"/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="nr_reg" class="form-control form-control-md" placeholder="Trade register"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="city" class="form-control form-control-md" placeholder="City"/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="county" id="county" class="form-control form-control-md" placeholder="County"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline">
                                <textarea id="address" class="form-control form-control-md" rows="2" placeholder="Street address"></textarea>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="caen" class="form-control form-control-md" placeholder="Caen"/>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="capital" class="form-control form-control-md" placeholder="Social capital"/>
                                    </div>
                                </div>
                            </div>
                            <BR>
                            <div class="form-outline">
                                <input type="text" id="iban" class="form-control form-control-md" placeholder="IBAN"/>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="phone" class="form-control form-control-md" placeholder="Phone"/>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="email" id="email" class="form-control form-control-md" placeholder="Email"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 ms-4">
                                <div class="col-4 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label text-muted" for="flexCheckDefault">
                                        TVA payer?
                                    </label>
                                </div>
                                <div class="col-8 justify-content-center ms-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                        <label class="form-check-label text-muted" for="form2Example31"> Agree with <a href="#!">Terms and Conditions </a></label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="text-center">
                                    <a href="{{ route('company.store') }}" class="type="submit" class="btn btn-primary mt-3" name="sign_in">Add company</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 px-0 bg-blue"></div>
    </div>
</div>
@endsection