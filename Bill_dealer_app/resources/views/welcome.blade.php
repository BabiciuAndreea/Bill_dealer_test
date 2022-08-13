@extends('layouts.app')

@section('content')
    <div id="app" class="w-100 h-100">
        @include('layouts.navbar')
        @yield('content')
    </div>
    <div class="container-expand px-0">
        <img src="{{ url('images/Bill_dealer_welcome.png') }}" alt="" class="img-fluid px-0">
    </div>
@endsection
