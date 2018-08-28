<style>
    
    .intro_list_header{
        background-color: #666666;
        color:#FFFFFF;
        text-align:center;
        padding:0.7vh 0;
    }
    .intro_list>.selector{
        padding:0.7vh 0.5vw;
        color: #999999;
        font-weight:lighter;
        cursor:pointer;
    }
    .intro_list>.selector a{
        color: #999999;
        font-weight:lighter;
        cursor:pointer;
        text-decoration: none;
    }
    .intro_list{
        text-align:left;
        font-size:1.48vw
    }
    .intro_list>.active{
        background:linear-gradient(to right,#666666, #FFFFFF);
        color:white;
        text-decoration:none;
        font-weight:600;
    }
    .intro_list div:hover{
        color:#2b81d1;
    }

</style>
<div class="intro_list">
    <div class="intro_list_header">법무사소개</div>
    <div class="selector {{preg_match('/\/intro/', $_SERVER['REQUEST_URI'])||
            preg_match('/\/intro.+/', $_SERVER['REQUEST_URI']) ? 'active':''}}"
    onclick="location.href='/intro'">인사말</div>
    <div class="selector" onclick="window.open('https://blog.naver.com/gipapa93')">법무사 블로그</div>
    <div><img src="/img/navertv.png" width="100%" style="cursor:pointer;" onclick="window.open('https://tv.naver.com/daullaw')"></div>
    <div><img src="/img/columnpage.png" width="100%" style="cursor:pointer;" onclick="window.open('http://100photo.co.kr/1505')"></div>
    <div class="selector"><a href="/intro#location">오시는 길</a></div>
</div>