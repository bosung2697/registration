<style>
    .faq_list_header{
        background-color: #666666;
        color:#FFFFFF;
        text-align:center;
        padding:0.7vh 0;
    }
    .faq_list>.selector{
        padding:0.7vh 0.5vw;
        color: #999999;
        font-weight:lighter;
        cursor:pointer;
    }
    .faq_list{
        text-align:left;
        font-size:1.48vw
    }
    .faq_list>.active{
        background:linear-gradient(to right,#666666, #FFFFFF);
        color:white;
        text-decoration:none;
        font-weight:600;
    }

</style>
<div class="faq_list">
    <div class="faq_list_header">자주하는 질문</div>
    <div class="selector {{preg_match('/\/faq_registration/', $_SERVER['REQUEST_URI'])||
            preg_match('/\/faq_registration.+/', $_SERVER['REQUEST_URI']) ? 'active':''}}"
    onclick="location.href='/faq_registration'">등기</div>
    <div class="selector {{preg_match('/\/faq_bankruptcy/', $_SERVER['REQUEST_URI'])||
    preg_match('/\/faq_bankruptcy.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"
    onclick="location.href='/faq_bankruptcy'">개인파산</div>
    <div class="selector {{preg_match('/\/faq_rehabilitation/', $_SERVER['REQUEST_URI'])||
    preg_match('/\/faq_rehabilitation.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"
    onclick="location.href='/faq_rehabilitation'">개인회생</div>
    <div class="selector {{preg_match('/\/faq_in_common/', $_SERVER['REQUEST_URI'])||
    preg_match('/\/faq_in_common.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"
    onclick="location.href='/faq_in_common'">개인파산 및<br>개인회생 공통</div>
    <div class="selector {{preg_match('/\/faq_etc/', $_SERVER['REQUEST_URI'])
    ||preg_match('/\/faq_etc.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"
    onclick="location.href='/faq_etc'">기타</div>
</div>