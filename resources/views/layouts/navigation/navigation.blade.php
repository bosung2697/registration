<div class="navigation_bar">
    <img src="img/profile.png" style="width:100%; height:100%; cursor:pointer;" class="grid-item" onclick="location.href='/home'">
    <div class="navigation_bar_contents grid-item">
        <div style="text-align: right; padding: 1vh 1.68vw 2vh 0;">
            <form action="{{url('home/search')}}" method="POST">
                {!! csrf_field() !!}
                <div style="margin: auto 0 auto auto; padding:0; border:0.2vw solid #3993e0; width: 28.2%; height:6.5vh">
                    <input name="search" class="home_search" type="search" placeholder="법률이야기" style="font-size:1.5vw;">
                    <button type="search" style="width: 2vw; height:3vh; padding:0; margin:0.5% 0.1%; border:none;">
                        <img width="100%" src="/img/no_image.jpg"
                             style=" padding:0; margin:0; width:100%; height:100%;">
                    </button>
                </div>
            </form>
        </div>
        <div class="navigation_bar_container">
            <div class="{{preg_match('/\/intro/',$_SERVER['REQUEST_URI'])||preg_match('/\/intro.+/', $_SERVER['REQUEST_URI'])||
             preg_match('/\/location/',$_SERVER['REQUEST_URI'])||preg_match('/\/location.+/', $_SERVER['REQUEST_URI'])? 'active_nav' : ''}}"
                 onclick="location.href='/intro'">법무사 소개</div>
            <div class="{{preg_match('/\/online_reg/',$_SERVER['REQUEST_URI'])||preg_match('/\/online_reg.+/', $_SERVER['REQUEST_URI'])? 'active_nav' : ''}}" onclick="location.href='/online_reg'">온라인등기대행<img src="img/hot.png"></div>
            <div class="{{preg_match('/\/bankruptcy/',$_SERVER['REQUEST_URI'])||preg_match('/\/bankruptcy.+/', $_SERVER['REQUEST_URI'])||
            preg_match('/\/rehabilitation/',$_SERVER['REQUEST_URI'])||preg_match('/\/rehabilitation.+/', $_SERVER['REQUEST_URI'])? 'active_nav' : ''}}"
                 onclick="location.href='/bankruptcy'">개인파산/ 회생</div>
            <div class="{{preg_match('/\/faq_registration/',$_SERVER['REQUEST_URI'])||preg_match('/\/faq_registration.+/', $_SERVER['REQUEST_URI'])||
             preg_match('/\/faq_bankruptcy/',$_SERVER['REQUEST_URI'])||preg_match('/\/faq_bankruptcy.+/', $_SERVER['REQUEST_URI'])||
             preg_match('/\/faq_rehabilitation/',$_SERVER['REQUEST_URI'])||preg_match('/\/faq_rehabilitation.+/', $_SERVER['REQUEST_URI'])||
             preg_match('/\/faq_in_common/',$_SERVER['REQUEST_URI'])||preg_match('/\/faq_in_common.+/', $_SERVER['REQUEST_URI'])||
             preg_match('/\/faq_etc/',$_SERVER['REQUEST_URI'])||preg_match('/\/faq_etc.+/', $_SERVER['REQUEST_URI'])? 'active_nav' : ''}}"
                 onclick="location.href='/faq_registration'">자주하는질문<img src="img/hot.png"></div>
            <div>사건관리</div>
            <div>고객센터</div>
        </div>
    </div>
</div>