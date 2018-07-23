<div class="sidebar faq_list
{{ preg_match('/\/admin\/faq_registration.+/', $_SERVER['REQUEST_URI'])||
 preg_match('/\/admin\/faq_bankruptcy.+/', $_SERVER['REQUEST_URI'])||
 preg_match('/\/admin\/faq_rehabilitation.+/', $_SERVER['REQUEST_URI'])||
 preg_match('/\/admin\/faq_etc.+/', $_SERVER['REQUEST_URI'])||
 preg_match('/\/admin\/faq_etc/', $_SERVER['REQUEST_URI'])||
 preg_match('/\/admin\/faq_in_common.+/', $_SERVER['REQUEST_URI'])||
 preg_match('/\/admin\/faq_in_common/', $_SERVER['REQUEST_URI'])||
 preg_match('/\/admin\/faq_rehabilitation/', $_SERVER['REQUEST_URI'])||
 preg_match('/\/admin\/faq_bankruptcy/', $_SERVER['REQUEST_URI'])||
 preg_match('/\/admin\/faq_registration/',$_SERVER['REQUEST_URI']) ? '' : 'hide'}}">
    <div class="sidemenu">자주하는 질문</div>
    <div class="sideuser">목록</div>
    <div class="sidesubmenu">
        <ul>
            <li class="selector {{preg_match('/\/admin\/faq_registration/', $_SERVER['REQUEST_URI'])||
            preg_match('/\/admin\/faq_registration.+/', $_SERVER['REQUEST_URI']) ? 'active':''}}">
                <a href="/admin/faq_registration/">등기</a></li>
            <li class="selector {{preg_match('/\/admin\/faq_bankruptcy/', $_SERVER['REQUEST_URI'])||
            preg_match('/\/admin\/faq_bankruptcy.+/', $_SERVER['REQUEST_URI']) ? 'active':''}}">
                <a href="/admin/faq_bankruptcy/">개인파산</a>
            </li>
            <li class="selector {{preg_match('/\/admin\/faq_rehabilitation/', $_SERVER['REQUEST_URI'])||
            preg_match('/\/admin\/faq_rehabilitation.+/', $_SERVER['REQUEST_URI']) ? 'active':''}}">
                <a href="/admin/faq_rehabilitation/">개인회생</a>
            </li>
            <li class="selector {{preg_match('/\/admin\/faq_in_common/', $_SERVER['REQUEST_URI'])||
            preg_match('/\/admin\/faq_in_common.+/', $_SERVER['REQUEST_URI']) ? 'active':''}}">
                <a href="/admin/faq_in_common/">개인파산 및 개인회생 공통</a>
            </li>
            <li class="selector {{preg_match('/\/admin\/faq_etc/', $_SERVER['REQUEST_URI'])||
            preg_match('/\/admin\/faq_etc.+/', $_SERVER['REQUEST_URI']) ? 'active':''}}">
                <a href="/admin/faq_etc/">기타</a>
            </li>
        </ul>
    </div>
</div>
