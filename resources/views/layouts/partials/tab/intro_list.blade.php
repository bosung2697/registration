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

</style>
<div class="intro_list">
    <div class="intro_list_header">법무사소개</div>
    <div class="selector {{preg_match('/\/intro/', $_SERVER['REQUEST_URI'])||
            preg_match('/\/intro.+/', $_SERVER['REQUEST_URI']) ? 'active':''}}"
    onclick="location.href='/intro'">인사말</div>
    <div class="selector {{preg_match('/\/blog/', $_SERVER['REQUEST_URI'])||
    preg_match('/\/blog.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"
    onclick="location.href='/blog'">법무사 블로그</div>
    <div class="selector {{preg_match('/\/law_story/', $_SERVER['REQUEST_URI'])||
    preg_match('/\/law_story.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"
    onclick="location.href='/law_story'">김영룡법무사<br>법률이야기</div>
    <div class="selector {{preg_match('/\/intro_column/', $_SERVER['REQUEST_URI'])||
    preg_match('/\/intro_column.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"
    onclick="location.href='/intro_column'">김영룡법무사<br>소개 컬럼</div>
    <div class="selector {{preg_match('/\/location/', $_SERVER['REQUEST_URI'])
    ||preg_match('/\/location.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"
    onclick="location.href='/location'">오시는 길</div>
</div>