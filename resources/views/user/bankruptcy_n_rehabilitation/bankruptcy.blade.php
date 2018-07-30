@extends('layouts.app')
@section('content')
    <div class="page">
        <div class='grid' style="padding:0 8.1vw 0 6.2vw;">
            @include('layouts.partials.tab.bank_n_rehab_list')
        </div>
        <div class='grid' style="width: 63.3%; text-align: center; padding:0; margin-left: 5vw;">
            <div style="border-bottom: 0.6vw solid #cccccc;">
                <img src="img/call.png" style="width:38%;">
            </div>

        </div>
    </div>
    <div>
        <img src="img/bankruptcy.jpg" class="testingimg">
    </div>
@endsection