<link href="{{ asset('css/employee.css') }}" rel="stylesheet">
<div class="container-fluid py-0 px-0 mx-0">
    <div class=" rounded-lg d-block d-sm-flex settings_container">
        <div class="profile-tab-nav border-right profile-tab my-0">
            <div
                class="d-flex flex-column background align-items-center align-items-sm-start px-1 pt-2 text-white min-vh-100">
                <div class="row p-0 py-2">
                    <div class="col"> <a href="/dashboard"
                            class="d-flex align-items-center pb-1 mb-md-0 mx-3 px-0 me-md-auto text-white text-decoration-none">
                            <img src="{{ '/images/Logo_aplicatie_facturi.png' }}"
                                class="rounded-circle logo mb-1 shadow1">
                        </a> </div>
                    <div class="col">
                        <div class="company_name text-centered px-0 mx-0 mt-3"> Bill Dealer </div>
                    </div>
                </div>
                <ul class="nav nav-pills flex-column mb-sm-auto mt-5 pl-2 mb-0 align-items-center align-items-sm-start"
                    id="menu">
                    <li class="nav-item">
                        <a type="button" class="tab text-decoration-none btn-lg px-4 nav-item"
                            aria-controls="notification" aria-selected="false" href="{{ route('dashboard') }}"
                            role="tab">
                            <i class="bi bi-graph-up-arrow"></i> Dashboard
                        </a>
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
                        <a type="button" class="tab text-decoration-none btn-lg px-4 nav-item"
                            aria-controls="notification" aria-selected="false" href="{{ route('products.index') }}"
                            role="tab">
                            <i class="bi bi-box"></i> Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="tab text-decoration-none btn-lg px-4 nav-item"
                            aria-controls="notification" aria-selected="false" href="{{ route('invoice.index') }}"
                            role="tab">
                            <i class="bi bi-envelope-paper"></i> Invoices
                        </a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="tab text-decoration-none btn-lg px-4 nav-item"
                            aria-controls="notification" aria-selected="false" href="{{ route('client.index') }}"
                            role="tab">
                            <i class="bi bi-person"></i> Clients
                        </a>
                    </li>

                    <li class="nav-item">
                        <a type="button" class="tab text-decoration-none btn-lg px-4 nav-item"
                            aria-controls="notification" aria-selected="false" href="{{ route('addEmployee') }}"
                            role="tab">
                            <i class="bi bi-people"></i> Employees
                        </a>
                    </li>

                    <li class="nav-item">
                        <a type="button" class="tab text-decoration-none btn-lg px-4 nav-item"
                            aria-controls="notification" aria-selected="false" href="{{ route('company') }}"
                            role="tab">
                            <i class="bi bi-building"></i> Company
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
                            <img src="{{ '/storage/' . Auth::user()->avatar }}" alt="hugenerd" width="30"
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
