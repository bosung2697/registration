<div class="navigation_bar">
    <div class="grid-item" style="width:100%;">
        <img style="width:100%; height:17vh" src="img/no_image.jpg">
    </div>
    <div class="grid-item navigation_bar_contents">
        <div style="text-align: right; padding:2vw;">
            <form action="{{url('home/search')}}" method="POST">
                {!! csrf_field() !!}
                <div style="margin:0; padding:0; border:1px solid #8524e6; width: 11.5vw"><input name="search" class="home_search" type="search" placeholder="검색">
                <button type="search" style="width: 2vw; height:3vh; padding:0; margin:0; border:none;">
                    <img width="100%" src="/img/no_image.jpg" style="padding:0; margin:0; width:100%; height:100%;">
                </button>
                </div>
            </form>
        </div>
        <div class="navigation_bar_container">
            <div>법무사 소개</div>
            <div>온라인 등기대행</div>
            <div>개인파산/회생</div>
            <div><b style="color:#ff0000; font-weight:600;">자주하는 질문!</b></div>
            <div>사건관리</div>
            <div>고객센터</div>
        </div>
    </div>
</div>