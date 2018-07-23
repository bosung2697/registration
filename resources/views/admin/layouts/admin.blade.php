<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @yield('style')
    @include('admin.partials.header')
    @include('admin.partials.admin_style')
    {{--<link href="{{ asset('css/NanumSquare-master/nanumsquare.css') }}" rel="Stylesheet">--}}
</head>
<body>
<div id="wrapper">
    <div class="navbar">
        <div class="navbardiv grid-item"><a href="{{ url('admin') }}" id="appname">
                {{ config('app.name','Laravel') }}</a></div>
        <div id="userdate" class="grid-item">| {{ \Illuminate\Support\Facades\Auth::user()->name }}님 안녕하세요
            / {{ \Carbon\Carbon::now() }}</div>
        <div class="navbardiv grid-item">
            <a href="{{ route('admin.logout') }}"
               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                  style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <div class="navsubbar">
        <div class="grid-item basicinfo-selector {{ $_SERVER['REQUEST_URI'] === '/admin/basic' ? 'current' : ''}}"
             style="-ms-grid-column: 1"
             onclick="location.href='/admin/basic';">기초정보
        </div>
        <div class="grid-item userinfo-selector {{ $_SERVER['REQUEST_URI'] === '/admin/user' ? 'current' : ''}}"
             style="-ms-grid-column: 3"
             onclick="location.href='/admin/user';">회원정보
        </div>
        <div class="grid-item developmentinfo-selector {{ $_SERVER['REQUEST_URI'] === '/admin/dev' ? 'current' : ''}}"
             onclick="location.href='/admin/dev';" style="-ms-grid-column: 5">개발사업정보
        </div>
        <div class="grid-item judicialinfo-selector {{ $_SERVER['REQUEST_URI'] === '/admin/judicial' || $_SERVER['REQUEST_URI'] === '/admin/hotfocus'
        ||$_SERVER['REQUEST_URI'] === '/admin/policy'||$_SERVER['REQUEST_URI'] === '/admin/relatednews' ? 'current' : ''}}"
             onclick="location.href='/admin/judicial';" style="-ms-grid-column: 7">유권해석&판례
        </div>
        <div class="grid-item  noticeinfo-selector {{ $_SERVER['REQUEST_URI'] === '/admin/notice'||$_SERVER['REQUEST_URI']==='admin/fyi'|| $_SERVER['REQUEST_URI']==='admin/consulting' ? 'current' : ''}}"
             onclick="location.href='/admin/notice';" style="-ms-grid-column: 9">공고/공시
        </div>
        <div class="grid-item faq_list-selector {{ preg_match('/\/admin\/faq_registration.+/', $_SERVER['REQUEST_URI'])||
        preg_match('/\/admin\/faq_bankruptcy.+/', $_SERVER['REQUEST_URI'])||
        preg_match('/\/admin\/faq_rehabilitation.+/', $_SERVER['REQUEST_URI'])||
        preg_match('/\/admin\/faq_etc.+/', $_SERVER['REQUEST_URI'])||
        preg_match('/\/admin\/faq_etc/', $_SERVER['REQUEST_URI'])||
        preg_match('/\/admin\/faq_in_common.+/', $_SERVER['REQUEST_URI'])||
        preg_match('/\/admin\/faq_in_common/', $_SERVER['REQUEST_URI'])||
        preg_match('/\/admin\/faq_rehabilitation/', $_SERVER['REQUEST_URI'])||
        preg_match('/\/admin\/faq_bankruptcy/', $_SERVER['REQUEST_URI'])||
        preg_match('/\/admin\/faq_registration/',$_SERVER['REQUEST_URI']) ? 'current' : '' }}"
             onclick="location.href='/admin/faq_registration';" style="-ms-grid-column: 11">자주하는 질문
        </div>
        <div class="grid-item communityinfo-selector {{ preg_match('/\/admin\/community.+/' , $_SERVER['REQUEST_URI']) || preg_match('/\/admin\/basic.+/', $_SERVER['REQUEST_URI']) || preg_match('/\/admin\/report.+/', $_SERVER['REQUEST_URI']) ? 'current' : ''}}"
             onclick="location.href='/admin/community/';" style="-ms-grid-column: 13">커뮤니티
        </div>
    </div>

    <div class="navlayout">
        <div class="grid-item">
            {{--@component('admin.components.basicinfo')--}}
            {{--@endcomponent--}}
            @component('admin.components.userinfo')
            @endcomponent
            @component('admin.components.developmentinfo')
            @endcomponent
            @component('admin.components.judicialinfo')
            @endcomponent
            @component('admin.components.noticeinfo')
            @endcomponent
            @component('admin.components.faq_list')
            @endcomponent
            @component('admin.components.communityinfo')
            @endcomponent
        </div>
        <div class="grid-item">
            @yield('content')
        </div>
    </div>
</div>
<div class="footer">
    @include('admin.partials.footer')
</div>
@yield('script')
</body>
</html>