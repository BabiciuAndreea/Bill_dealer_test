@include('layouts.app')

<body>
    <link href="{{ asset('css/employee.css') }}" rel="stylesheet">
        <div class="container-fluid py-0 px-0 mx-0">
            <div class=" rounded-lg d-block d-sm-flex settings_container">
                <div class="profile-tab-nav border-right profile-tab my-0">
                    <div class="d-flex flex-column background align-items-center align-items-sm-start px-1 pt-2 text-white min-vh-100">
                        <div class="row p-0 py-2">
                            <div class="col"> <a href="/home"
                                    class="d-flex align-items-center pb-1 mb-md-0 mx-3 px-0 me-md-auto text-white text-decoration-none">
                                    <img src="{{ 'images/Logo_aplicatie_facturi.png' }}" class="rounded-circle logo mb-1 shadow1">
                                </a> </div>
                            <div class="col">
                                <div class="company_name text-centered px-0 mx-0 mt-3"> Bill Dealer </div>
                            </div>
                        </div>
                        <ul class="nav nav-pills flex-column mb-sm-auto mt-5 pl-2 mb-0 align-items-center align-items-sm-start"
                            id="menu">
                            <li class="nav-item">
                                <button type="button" class="tab btn-lg px-4 nav-item" data-bs-toggle="dropdown">
                                    <i class="bi bi-house"></i> Dashboard
                                </button>
                            </li>
    
                            <li class="">
                                <div class="dropdown dropend">
                                    <button type="button" class="tab btn-lg px-4 nav-item dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        <i class="bi bi-receipt"></i> Issue invoices
                                    </button>
                                    <ul class="dropdown-menu mx-2">
                                        <div class="row">
                                            <div class="col-5 px-5">
                                                <span class="header"> <b> Issuing: </b></span>
                                                <li><a class="dropdown-item" href="#">Invoice</a></li>
                                                <li><a class="dropdown-item" href="#">Receipt</a></li>
                                                <li><a class="dropdown-item" href="#">Canceled invoice</a></li>
                                                <li><a class="dropdown-item" href="#">Proform invoice</a></li>
                                                <li><a class="dropdown-item" href="#">Notice</a></li>
                                                <li><a class="dropdown-item" href="#">Voucher</a></li>
                                            </div>
                                            <div class="col-6">
                                                <span class="header"> <b> Collections: </b></span>
                                                <li><a class="dropdown-item" href="#">Cash(receipt, OP and others)</a>
                                                </li>
    
                                                <br>
                                                <span class="header"> <b> Expenses and payments: </b></span>
                                                <li><a class="dropdown-item" href="#">Expediture</a></li>
                                                <li><a class="dropdown-item" href="#">Supplier invoice payment</a></li>
    
                                                <br>
                                                <span class="header"> <b> Recurring documents: </b></span>
                                                <li><a class="dropdown-item" href="#">Invoices</a></li>
                                                <li><a class="dropdown-item" href="#">Proforms</a></li>
                                            </div>
                                    </ul>
                                </div>
                            </li>
    
                            <li class="nav-item">
                                <div class="dropdown dropend">
                                    <button type="button" class="tab btn-lg px-4 nav-item dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        <i class="bi bi-bar-chart-line"></i> Reports
                                    </button>
                                    <ul class="dropdown-menu mx-5">
                                        <div class="row mx-3">
                                            <div class="col-4 ">
                                                <span class="header"> <b> Issued documents: </b></span>
                                                <li><a class="dropdown-item" href="#">Invoice</a></li>
                                                <li><a class="dropdown-item" href="#">Check-in</a></li>
                                                <li><a class="dropdown-item" href="#">Proforma</a></li>
                                                <li><a class="dropdown-item" href="#">Notice</a></li>
                                                <li><a class="dropdown-item" href="#">Voucher</a></li>
                                                <li><a class="dropdown-item" href="#">Recurring documents</a></li>
    
                                                <br>
                                                <span class="header"> <b> Graphics: </b></span>
                                                <li><a class="dropdown-item" href="#">Invoices</a></li>
                                                <li><a class="dropdown-item" href="#">Clients</a></li>
    
                                            </div>
                                            <div class="col-4">
                                                <span class="header"> <b> Advanced reports: </b></span>
                                                <li><a class="dropdown-item" href="#">Unpaid invoices</a></li>
                                                <li><a class="dropdown-item" href="#">Product sales</a></li>
                                                <li><a class="dropdown-item" href="#">Collected amounts <br>per
                                                        customer</a></li>
                                                <li><a class="dropdown-item" href="#">Client data sheet</a></li>
                                                <li><a class="dropdown-item" href="#">TVA report</a></li>
                                                <li><a class="dropdown-item" href="#">Sales per agent</a></li>
    
                                                <br>
                                                <span class="header"> <b> Checkout registry: </b></span>
                                                <li><a class="dropdown-item" href="#">Show checkout registry</a></li>
                                                <li><a class="dropdown-item" href="#">Checkout operations</a></li>
    
                                            </div>
                                            <div class="col-4 ">
                                                <span class="header"> <b> Expenses and payments: </b></span>
                                                <li><a class="dropdown-item" href="#">Expenses</a></li>
                                                <li><a class="dropdown-item" href="#">Payments</a></li>
                                                <li><a class="dropdown-item" href="#">Payment status</a></li>
                                                <li><a class="dropdown-item" href="#">Expediture by category</a></li>
    
                                                <br>
                                                <span class="header"> <b> Extracts and register: </b></span>
                                                <li><a class="dropdown-item" href="#">Account statement</a></li>
                                                <li><a class="dropdown-item" href="#">Collection register</a></li>
                                                <li><a class="dropdown-item" href="#">Extracted imports and register</a>
                                                </li>
                                            </div>
                                    </ul>
                                </div>
                            </li>
    
                            <li class="nav-item">
                                <div class="dropdown dropend">
                                    <button type="button" class="tab btn-lg px-4 nav-item dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        <i class="bi bi-gear"></i> Configurations
                                    </button>
                                    <ul class="dropdown-menu mx-2 px-5">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="header"> <b> Company information: </b></span>
                                                <li><a class="dropdown-item" href="#">General</a></li>
                                                <li><a class="dropdown-item" href="#">Bank accounts</a></li>
                                                <br>
                                                <span class="header"> <b> Issue documents: </b></span>
                                                <li><a class="dropdown-item" href="#">Series</a></li>
                                                <li><a class="dropdown-item" href="#">Personalize</a></li>
                                                <li><a class="dropdown-item" href="#">TVA rate</a></li>
                                                <li><a class="dropdown-item" href="#">Checkout</a></li>
                                                <li><a class="dropdown-item" href="#">Languages</a></li>
                                            </div>
                                            <div class="col-6">
                                                <span class="header"> <b> Program configurations: </b></span>
                                                <li><a class="dropdown-item" href="#">Personal preferences</a></li>
                                                <li><a class="dropdown-item" href="#">General preferences</a></li>
                                                <li><a class="dropdown-item" href="#">Clients notifications</a></li>
                                                <li><a class="dropdown-item" href="#">Email</a></li>
                                            </div>
                                    </ul>
                                </div>
                            </li>
    
                            <li class="nav-item">
                                <div class="dropdown dropend">
                                    <button type="button" class="tab btn-lg px-4 nav-item dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        <i class="bi bi-card-heading"></i> Nomenclature
                                    </button>
                                    <ul class="dropdown-menu mx-2">
                                        <div class="row">
                                            <div class="col-6 px-5">
                                                <span class="header"> <b> Articles: </b></span>
                                                <li><a class="dropdown-item" href="#">Products</a></li>
                                                <li><a class="dropdown-item" href="#">Expenditure category</a></li>
                                                <li><a class="dropdown-item" href="#">Products category</a></li>
    
                                                <br>
                                                <span class="header"> <b> Monitorizing: </b></span>
                                                <li><a class="dropdown-item" href="#">Monitorizing partners</a></li>
                                            </div>
                                            <div class="col-6">
                                                <span class="header"> <b> Partners: </b></span>
                                                <li><a class="dropdown-item" href="#">Clients</a></li>
                                                <li><a class="dropdown-item" href="#">Providers</a></li>
                                                <li><a class="dropdown-item" href="#">Connections</a></li>
                                            </div>
                                    </ul>
                                </div>
                            </li>
    
                            <li class="nav-item">
                                <a type="button" class="tab text-decoration-none btn-lg px-4 nav-item" data-bs-toggle="dropdown" data-toggle="pill" 
                                aria-controls="notification" aria-selected="false" href="#employee" role="tab">
                                    <i class="bi bi-people"></i> Employee
                                </a>
                            </li>
    
                            <li class="nav-item">
                                <a type="button" class="tab text-decoration-none btn-lg px-4 nav-item" data-bs-toggle="dropdown" data-toggle="pill" 
                                aria-controls="notification" aria-selected="false" href="#password" role="tab">
                                    <i class="bi bi-people"></i> Company
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div class="dropdown pb-5">
                                <a href="#"
                                    class="d-flex px-4 align-items-center text-white text-decoration-none dropdown-toggle"
                                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img 
                                            src="{{'storage/' . Auth::user()->avatar}}"
                                     alt="hugenerd" width="30"
                                        height="30" class="rounded-circle">
                                    <span class="tab d-none d-sm-inline mx-1">{{ Auth::user()->first_name }}
                                        {{ Auth::user()->last_name }}</span>
                                </a>
                                <ul class="dropdown-menu account text-small shadow" aria-labelledby="dropdownUser1">
                                    <li><a class="dropdown-item" href="{{ route('settings') }}">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><button type="submit" class="dropdown-item">Sign out</>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="tab-content mt-5 " id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="dash" role="tabpanel" aria-labelledby="account-tab">
                       dashboard
                    </div>
                    <div class="tab-pane fade" id="employee" role="tabpanel" aria-labelledby="employee-tab">
                        <div class="container">
                           
                                <div class="table-wrapper px-0 mx-0 py-0 px-0">
                                    <div class="table-title px-2 mt-5">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h2 class="my-3"><b>Manage Employees</b></h2>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="#addEmployeeModal" class="btn btn-success my-3" data-toggle="modal"> <i class="bi bi-person-plus"></i> <span class="py-1 px-1">Add employee</span></a>
                                                <a href="#deleteEmployeeModal" class="btn btn-danger my-3" data-toggle="modal"><i class="bi bi-trash3"></i><span class="py-1 px-1">Delete employee</span></a>						
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover">
                                        <thead >
                                            <tr>
                                                <th>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="selectAll">
                                                        <label for="selectAll"></label>
                                                    </span>
                                                </th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>CNP</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                        <label for="checkbox1"></label>
                                                    </span>
                                                </td>
                                                <td>Thomas Hardy</td>
                                                <td>thomashardy@mail.com</td>
                                                <td>89 Chiaroscuro Rd, Portland, USA</td>
                                                <td>(171) 555-2222</td>
                                                <td>6220801016967</td>
                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil" data-toggle="tooltip" title="Edit"></i></a>
                                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash3" data-toggle="tooltip" title="Delete"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox2" name="options[]" value="1">
                                                        <label for="checkbox2"></label>
                                                    </span>
                                                </td>
                                                <td>Dominique Perrier</td>
                                                <td>dominiqueperrier@mail.com</td>
                                                <td>Obere Str. 57, Berlin, Germany</td>
                                                <td>(313) 555-5735</td>
                                                <td>6220801016967</td>
                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil" data-toggle="tooltip" title="Edit"></i></a>
                                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash3" data-toggle="tooltip" title="Delete"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox3" name="options[]" value="1">
                                                        <label for="checkbox3"></label>
                                                    </span>
                                                </td>
                                                <td>Maria Anders</td>
                                                <td>mariaanders@mail.com</td>
                                                <td>25, rue Lauriston, Paris, France</td>
                                                <td>(503) 555-9931</td>
                                                <td>6220801016967</td>
                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil" data-toggle="tooltip" title="Edit"></i></a>
                                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash3" data-toggle="tooltip" title="Delete"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox4" name="options[]" value="1">
                                                        <label for="checkbox4"></label>
                                                    </span>
                                                </td>
                                                <td>Fran Wilson</td>
                                                <td>franwilson@mail.com</td>
                                                <td>C/ Araquil, 67, Madrid, Spain</td>
                                                <td>(204) 619-5731</td>
                                                <td>6220801016967</td>
                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil" data-toggle="tooltip" title="Edit"></i></a>
                                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash3" data-toggle="tooltip" title="Delete"></i></a>
                                                </td>
                                            </tr>					
                                            <tr>
                                                <td>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                                        <label for="checkbox5"></label>
                                                    </span>
                                                </td>
                                                <td>Martin Blank</td>
                                                <td>martinblank@mail.com</td>
                                                <td>Via Monte Bianco 34, Turin, Italy</td>
                                                <td>(480) 631-2097</td>
                                                <td>6220801016967</td>
                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil" data-toggle="tooltip" title="Edit"></i></a>
                                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash3" data-toggle="tooltip" title="Delete"></i></a>
                                                </td>
                                            </tr> 
                                        </tbody>
                                    </table>
                                    <div class="clearfix">
                                        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a href="#">Previous</a></li>
                                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                                            <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                              
                        </div>
                        <!-- Edit Modal HTML -->
                        <div id="addEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content px-5 py-5">
                                    <form method="POST" action="{{ url('register') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-11">
                                                <h6>ADD EMPLOYEE</h6>
                                            </div>
                                            <div class="col-1"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                        </div>
                                        <p class="text-muted"> Please fill the fields below.</p>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input id="first_name" type="text"
                                                        class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                                        value="{{ old('first_name') }}" required autocomplete="first_name" autofocus
                                                        placeholder="First Name">
            
                                                    @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input id="last_name" type="text"
                                                        class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                                        value="{{ old('last_name') }}" required autocomplete="last_name" autofocus
                                                        placeholder="Last Name">
            
                                                    @error('last_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-outline">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                                        required autocomplete="new-password" placeholder="Password">
            
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input id="password-confirm" type="password" class="form-control"
                                                        name="password_confirmation" required autocomplete="new-password"
                                                        placeholder="Cofirm Password">
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col-md-12 mb-4">
                                            <div class="form-outline">
                                                <input id="address" type="text"
                                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                                    value="{{ old('address') }}" required autocomplete="address" placeholder="Address">
            
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 mb-4">
                                                <div class="form-outline">
                                                    <input id="phone" type="text"
                                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                        value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone">
            
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-7 mb-4">
                                                <div class="form-outline">
                                                    <input id="cnp" type="text"
                                                        class="form-control @error('cnp') is-invalid @enderror" name="cnp"
                                                        value="{{ old('cnp') }}" required autocomplete="cnp" placeholder="CNP">
            
                                                    @error('cnp')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="avatar" class="col-md-4 col-form-label text-md-right"> Profile picture </label>
                                            <div class="col-md-6">
                                                <input id="avatar" type="file" name="avatar">
                                            </div>
                                        </div>
            
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary mt-3" name="sign_in">Add
                                                employee</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Edit Modal HTML -->
                        <div id="editEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content px-5 py-3">
                                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-11 my-3">
                                                <h6>EDIT EMPLOYEE</h6>
                                            </div>
                                            <div class="col-1"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input id="first_name" type="text"
                                                        class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                                        value="{{ old('first_name') }}" required autocomplete="first_name" autofocus
                                                        placeholder="First Name">
            
                                                    @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input id="last_name" type="text"
                                                        class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                                        value="{{ old('last_name') }}" required autocomplete="last_name" autofocus
                                                        placeholder="Last Name">
            
                                                    @error('last_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-outline">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                                        required autocomplete="new-password" placeholder="Password">
            
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input id="password-confirm" type="password" class="form-control"
                                                        name="password_confirmation" required autocomplete="new-password"
                                                        placeholder="Cofirm Password">
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col-md-12 mb-4">
                                            <div class="form-outline">
                                                <input id="address" type="text"
                                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                                    value="{{ old('address') }}" required autocomplete="address" placeholder="Address">
            
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 mb-4">
                                                <div class="form-outline">
                                                    <input id="phone" type="text"
                                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                        value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone">
            
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-7 mb-4">
                                                <div class="form-outline">
                                                    <input id="cnp" type="text"
                                                        class="form-control @error('cnp') is-invalid @enderror" name="cnp"
                                                        value="{{ old('cnp') }}" required autocomplete="cnp" placeholder="CNP">
            
                                                    @error('cnp')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="avatar" class="col-md-4 col-form-label text-md-right"> Profile picture </label>
                                            <div class="col-md-6">
                                                <input id="avatar" type="file" name="avatar">
                                            </div>
                                        </div>
            
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary mt-3" name="sign_in">Add
                                                employee</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- Delete Modal HTML -->
                        <div id="deleteEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form>
                                        <div class="modal-header">						
                                            <h4 class="modal-title">Delete Employee</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">					
                                            <p>Are you sure you want to delete these records?</p>
                                            <p class="text-warning">This action cannot be undone.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                                          
                    </div>
				</div>
			</div>
		</div>

        <script>
            $(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});

        </script>
</body>

</html>
