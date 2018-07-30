@extends('layouts.app')
@section('content')
    <div class="page">
        <div class='grid' style="padding:0 8.1vw 0 6.2vw;">
            @include('layouts.partials.tab.faq_list')
        </div>
        <div class='grid' style="width: 63.3%; text-align: center; padding:0;">
            <div style="border-bottom: 0.6vw solid #cccccc;">
                <img src="img/call.png" style="width:38%;">
            </div>
            @forelse($data as $value)
            <div class="QnA" id='{{$value->id}}'>
                <div class="questions" onclick="show_answers('{{$value->id}}')">
                    Q. {{$value->question}}
                </div>
                <div class="answers" style="display:none;">
                    <div>
                        <p>A. {{$value->answer}}</p>
                    </div>
                    <div class="answers_video">
                        <iframe width="100%" height="100%" src="{{$value->video_url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            @empty
                <div>입력된 정보가 없습니다.</div>
            @endforelse
            <div class="pagination1">
            @if($data->count())
                <div class="text-center">
                    {!! $data->render() !!}
                </div>
            @endif
            </div>
        </div>
    </div>
    <script>
        function show_answers(question) {
            var i;
            var x = document.getElementsByClassName("answers");
            var y = document.getElementsByClassName('questions');
            var target = document.getElementById(question).getElementsByClassName("answers")[0];
            var target_question = document.getElementById(question).getElementsByClassName("questions")[0];
            if (target_question.classList.contains('active_questions') === true) {
                target.style.display = "none";
                target_question.classList.remove('active_questions');
            } else {
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                    y[i].classList.remove('active_questions');
                }
                target_question.classList.add("active_questions");
                target.style.display = "";
            }
        }
    </script>
@endsection