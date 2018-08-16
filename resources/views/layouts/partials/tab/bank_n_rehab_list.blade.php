<style>
    .id_list a {
        font-size: 1.16vw;
        font-weight: 600;
        color: #6c6c6c;
        cursor:pointer;
        padding:0; margin:0;
        text-decoration: none;
    }
    .id_list{
        padding: 1.3vh 1.35vw;
    }
    .id_list>div>a:hover, .id_list>.active {
        color:#2b81d1;
    }
    .bank_n_rehab_header{
        background-color: #666666;
        color:#FFFFFF;
        text-align:center;
        padding:0.7vh 0;
    }
    .bank_n_rehab>.selector{
        padding:0.7vh 0.5vw;
        color: #999999;
        font-weight:lighter;
        cursor:pointer;
    }
    .bank_n_rehab{
        text-align:left;
        font-size:1.48vw
    }
    .bank_n_rehab>.active{
        background:linear-gradient(to right,#666666, #FFFFFF);
        color:white;
        text-decoration:none;
        font-weight:600;
    }

</style>
<div class="bank_n_rehab">
    <div class="bank_n_rehab_header">개인파산/ 회생</div>
    <div class="selector {{preg_match('/\/bankruptcy/', $_SERVER['REQUEST_URI'])||
    preg_match('/\/bankruptcy.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"
    onclick="location.href='/bankruptcy'">개인파산</div>
    <div class="id_list">
        <div><a href="bank1">개인파산이란?</a></div>
        <div><a href="bank2">개인파산 목적</a></div>
        <div><a href="bank3">개인파산 신청자격</a></div>
        <div><a href="bank4">개인파산 신청서류</a></div>
        <div><a href="bank5">개인파산 장점</a></div>
        <div><a href="bank6">개인파산 단점</a></div>
        <div><a href="bank7">개인파산 절차안내</a></div>
    </div>
    <div class="selector {{preg_match('/\/rehabilitation/', $_SERVER['REQUEST_URI'])||
    preg_match('/\/rehabilitation.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"
    onclick="location.href='/rehabilitation'">개인회생</div>
    <div class="id_list">
        <div><a href="#rehab1">개인회생이란?</a></div>
        <div><a href="#rehab2">개인회생 목적</a></div>
        <div><a href="#rehab3">개인회생 신청자격</a></div>
        <div><a href="#rehab4">개인회생 신청서류</a></div>
        <div><a href="rehab5">개인회생 장점</a></div>
        <div><a href="rehab6">개인회생 단점</a></div>
        <div><a href="rehab7">개인회생 절차안내</a></div>
    </div>
</div>