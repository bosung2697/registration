@extends('layouts.app')
@section('content')
    <style>
        .faq {
            display: grid;
            display: -ms-grid;
            -ms-grid-columns: 27.3fr 0 72.7fr;
            column-gap: 0;
            grid-template-columns: 27.3% 72.7%;
        }

        .questions {
            color: #a7a7a7;
            padding: 1vh 6.75vw;
            text-align: left;
            font-size: 1.11vw;
            font-weight: 500;
        }

    </style>
    <div class="faq">
        <div style="padding:0 8.1vw 0 6.2vw;">
            @include('layouts.partials.tab.faq_list')
        </div>
        <div style="width: 63%; text-align: center; padding: 0 1vw;">
            <div style="border-bottom: 0.6vw solid #cccccc;">
                <img src="img/call.png" style="width:38%;">
            </div>
            <div class="questions">
                Q. 파산신청 전, 부동산은 어떻게 해야 할까? !
            </div>
            <div class="questions">
                Q. 개인파산 신청할 때 보험해약환급금 처리 방법
            </div>
        </div>
    </div>
    <div>
        <img src="/img/example2.jpg" class="testingimg">

    </div>
@endsection