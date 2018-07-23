<div class="navigation_bar">
    <div class="navigation_bar_contents">
        <div style="text-align: right; padding:3.5vh 2vw 2vh 31vw;">
            <form action="{{url('home/search')}}" method="POST">
                {!! csrf_field() !!}
                <div style="margin: auto 0 auto auto; padding:0; border:1px solid #8524e6; width: 21%"><input name="search" class="home_search" type="search" placeholder="검색">
                <button type="search" style="width: 2vw; height:3vh; padding:0; margin:0.5% 0.1%; border:none;">
                    <img width="100%" src="/img/no_image.jpg" style=" padding:0; margin:0; width:100%; height:100%;">
                </button>
                </div>
            </form>
        </div>
        <div class="navigation_bar_container">
            <div>법무사 소개</div>
            <div>온라인 등기대행</div>
            <div>개인파산/회생</div>
            <div>자주하는 질문</div>
            <div>사건관리</div>
            <div>고객센터</div>
        </div>
    </div>
</div>