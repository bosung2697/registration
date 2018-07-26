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

        .QnA {
            width: 100%;
        }

        .questions {
            color: #a7a7a7;
            padding:2vh 6vw 1vh 7.76vw;
            text-align: left;
            font-size: 1.1vw;
            font-weight: 500;
        }

        .answers {
            height:37.5vh;
            background-color:#FFFFFF;
            border: 1px solid #d3d3d3;
            -webkit-box-shadow: 0.1vw 0.3vw 0.5vw #888888;
            -moz-box-shadow:  0.1vw 0.3vw 0.5vw #888888;
            box-shadow:  0.1vw 0.3vw 0.5vw #888888;
            display: grid;
            display:-ms-grid;
            grid-template-columns:38% 62%;
            column-gap: 0;
            -ms-grid-columns: 3.8fr 0 6.2fr;
            margin:2vh 0 3vh 0;
        }
        .answers>div>p{
            color: #6d6d6d;
            margin:0;
            width:100%;
            height: 37vh;
            overflow-y: scroll;
            padding:5vh 1vw;
            font-size: 1.1vw;
            font-weight: 600;
        }
        .active_questions{
            font-size: 1.54vw!important;
            font-weight: 600!important;
            color: #727272!important;
            text-decoration: underline;
        }
        .answers_video{
            width: 100%;
            height: 37vh;
            padding: 1.15vh 0.6vw;
        }
        /* width */
        ::-webkit-scrollbar {
            width: 0.7vw;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }


    </style>
    <div class="faq">
        <div style="padding:0 8.1vw 0 6.2vw;">
            @include('layouts.partials.tab.faq_list')
        </div>
        <div style="width: 63.3%; text-align: center; padding:0;">
            <div style="border-bottom: 0.6vw solid #cccccc;">
                <img src="img/call.png" style="width:38%;">
            </div>
            <div class="QnA" id="list1">
                <div class="questions" onclick="show_answers('list1')">
                    Q. 파산신청 전, 부동산은 어떻게 해야 할까? !
                </div>
                <div class="answers" style="display:none;">
                    <div>
                        <p>A. 개인파산에는 기존 상법엔 자본금 5000만원 이상의 법인만 설립이 가능했으며
                        '소기업 및 소상공인지원을 위한 특별 조치법 적용을 받는 소상공인만 5로롤롤로롤로ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff롤ㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹ</p>
                    </div>
                    <div class="answers_video">
                        <img src="img/banner3.jpg" style="width:100%; height:100%; border: 1px solid #d3d3d3;">
                        {{--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/FRxr-9VZY2I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>--}}
                    </div>
                </div>
            </div>
            <div class="QnA" id="list2">
                <div class="questions" onclick="show_answers('list2')">
                    Q. 개인파산 신청할 때 보험해약환급금 처리 방법
                </div>
                <div class="answers" style="display:none;">

                </div>
            </div>
        </div>
    </div>
    <div>
        <img src="/img/example3.jpg" class="testingimg">

    </div>
    <script>
        function show_answers(question){
            var i;
            var x = document.getElementsByClassName("answers");
            var y = document.getElementsByClassName('questions');
            var target = document.getElementById(question).getElementsByClassName("answers")[0];
            var target_question = document.getElementById(question).getElementsByClassName("questions")[0];
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
                y[i].classList.remove('active_questions');
            }

            target_question.classList.add("active_questions");
            target.style.display="";
        }
    </script>
@endsection