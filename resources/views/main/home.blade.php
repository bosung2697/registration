@extends('layouts.app')
@section('content')
    <style>
        .dot {
            margin: 0 1vw;
            height: 1vw;
            width: 1vw;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }
        .main_right > div {
            padding: 0 2.5vw 0 3vw;
        }

        .container1 {
            margin: 0 0 2vh 0;
            padding: 0 5.5vw;
            display: grid;
            display: -ms-grid;
            grid-template-columns: 30% 16% 31% 23%;
            column-gap: 0;
            -ms-grid-columns: 2.3fr 0 1.95fr 0 3.25fr 0 2.5fr;
            /*----------------------grid setting-----------------------------------------------*/
            width: 100%;
            height: 100%;
        }

        .grid-item:nth-child(2) {
            -ms-grid-column: 3;
        }

        .grid-item:nth-child(3) {
            -ms-grid-column: 5;
        }

        .grid-item:nth-child(4) {
            -ms-grid-column: 7;
        }

        .main_third_content {
            width: 100%;
        }

        .main_third_content_listed {
            width: 100%;
            font-size: 0.8vw;
            color: grey;
            font-weight: 500;
            padding: 0.6vh 0.7vw;
            background-color: #FFFFFF;
            cursor: pointer;
        }

        .main_third_content_listed:hover {
            background: linear-gradient(to right, #eddb0d, #FFFFFF);
            font-weight: 600;
            font-size: 0.8vw;
            color: #000000;
        }

        .main_third_listing {
            padding: 0;
            width: 100%;

        }

    </style>
    <div class="container1">
        <div class="grid-item">
            <div style="padding:1vh 1vw; position:relative;">
                <img id="banner1" class="banner" src="img/banner1.jpg" style="border:none; display:block;" width="100%">
                <img id="banner2" class="banner" src="img/banner2.png" style="border:none; display:none;" width="100%">
                <img id="banner3" class="banner" src="img/banner3.png" style="border:none; display:none;" width="100%">
                <div style="width:90%; cursor:pointer; text-align:center;position:absolute; bottom:7.2%;">
                    <span class="dot" onclick="ShowSlide('banner1')"></span>
                    <span class="dot" onclick="ShowSlide('banner2')"></span>
                    <span class="dot" onclick="ShowSlide('banner3')"></span>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="main_third_content">
                <div class="main_third_listing">
                    <div style="background-color: #ca95ff; color: #ffffff; font-size: 1.4vw; padding: 0.5vh 0; text-align: center;">
                        온라인 등기란?
                    </div>
                    <div class=" main_third_content_listed">
                        정관제작변경
                    </div>
                    <div class="main_third_content_listed">
                        법인설립동기
                    </div>
                    <div class="main_third_content_listed">
                        본점이전 (관내)
                    </div>
                    <div class="main_third_content_listed">
                        본점이전 (타관)
                    </div>
                    <div class="main_third_content_listed">
                        임원변경
                    </div>
                    <div class="main_third_content_listed">
                        대표이사 주소변경
                    </div>
                    <div class="main_third_content_listed">
                        상호, 목적, 공고방법변경
                    </div>
                    <div class="main_third_content_listed">
                        지점설치
                    </div>
                    <div class="main_third_content_listed">
                        지점이전, 폐지
                    </div>
                    <div class="main_third_content_listed">
                        신주발행 (유상증자)
                    </div>
                    <div class="main_third_content_listed">
                        주식매수선택권 설정
                    </div>
                    <div class="main_third_content_listed">
                        전환사채발행
                    </div>
                </div>
                <div style="padding:0 0;"><div style="background-color: #ca95ff; color: #ffffff; display:flex; padding:0 1.5vw; justify-content: space-between; align-items: center;">
                        <img src="img/main_button.png" style="width:25%;"><div style="font-size: 1vw; text-align:left;">등기견적서 받기</div>
                    </div></div>
            </div>
        </div>
        <div class="grid-item">
            <div>
                <div style="padding:1vh 1vw 1vh 3vw;">
                    <img src="img/banner2.jpg" style="border:1px solid grey;" width="100%">
                </div>
                <div style="padding:1vh 1vw 1vh 3vw;">
                    <img src="img/banner3.jpg" style="border:1px solid grey;" width="100%">
                </div>
            </div>
        </div>
        <div class="grid-item main_right">
            <div>
                <img src="img/receive.jpg" style="border:none;" width="100%">
            </div>
            <div>
                <img src="img/kakaotalk.jpg" style="border:none;" width="100%">
            </div>
            <div>
                <img src="img/main_call.png" style="border:none;" width="100%">
            </div>
        </div>
    </div>
    <script>
        function ShowSlide(ele){
            var i;
            var x = document.getElementsByClassName("banner");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(ele).style.display = "block";
        }
    </script>
@endsection