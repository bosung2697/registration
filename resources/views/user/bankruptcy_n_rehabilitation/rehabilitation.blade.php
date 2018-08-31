@extends('layouts.app')
@section('content')
    <div class="page">
        <div class='grid-item' style="padding:0 8.1vw 0 6.2vw;">
            @include('layouts.partials.tab.bank_n_rehab_list')
        </div>
        <div class='grid-item' style="width: 63.3%; text-align: center; padding:0; margin-left: 5vw;">
            <div style="border-bottom: 0.6vw solid #cccccc;">
                <img src="img/call.png" style="width:38%;">
            </div>
            <div class="lists">
                <div id="rehab1">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인회생이란?</b></p>
                    <p class="contents"><strong class="specialchars">「</strong> 개인회생이란 간단히 말해 일정하고 정기적인 급여 또는 향후에 소득이 보장되어 있는<br>
                        경우에 3년 동안 (2018년 6월13일 법률 시행 확정)<b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인회생 변제기간 5년->3년으로 단축 개정안</b></b><br>
                        법원에 일정한 변제금을 납부할 시 <b class="coloring_yellow">남은 채무를 탕감 받을 수 있는 제도</b>입니다.<strong class="specialchars">」</strong></p>
                </div>
                <div id="rehab2">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인회생 관할법원 선택</b><b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인회생 신청 관할법원 선택하기</b></b></p>
                    <p class="contents"><strong class="specialchars">「</strong>개인회생을 신청할 때 원칙적인 관할은 자신의 주소지 관할의 지방법원이<br>
                        본원이라 할 수 있습니다.<br>
                        그래서 만약 서울에 주소지가 있다면 서울 회생 법원에 신청할 수 있고,<br>
                        안양에 있으시면 수원지방법원에 신청할 수 있습니다.<br>
                        지방법원의 본원에만 관할이 있기 때문에 수원, 의정부 등의 지역은 본원 외에<br>
                        지원이 많이 있어도 의정부지방법원에만 신청이 가능합니다.<br>
                        그런데 여기서 말씀드리는 주소지라는 것은 형식상의 <b class="coloring_yellow">주민등록 소재지 상의 주소가 아니라 실제로 거주하고 계신 곳</b>을 말합니다.<strong class="specialchars">」</strong></p>
                </div>
                <div id="rehab3">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인회생 신청자격</b><b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인회생 신청할 때 필요한 자격조건은?</b></b></p>
                    <p class="contents">
                        <strong class="specialchars">「</strong>개인회생을 신청할 때 기본적으로 필요한 자격 조건은 다음과 같습니다.<strong class="specialchars">」</strong><br><br>

                            <b class="alphabet_listing">a.</b>자신의 소득이 있어야 합니다.<br>
                            여기서 말하는 소득은 급여 소득 및 자영업 하시는 분 들은 영업소득 둘 다 가능하지만<br>
                            부양가족에 따른 최소 생계비 이상의 소득이어야 합니다.<b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">최저생계비보다 소득이 적을 경우 개인 회생이 가능할까요?</b></b><br><br>

                        <b class="alphabet_listing">b.</b>채무가 재산보다 많아야 합니다.<b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">최근 채무가 높을 경우 개인회생</b></b><br>
                            재산을 검토할 때 보는 항목은 임대차 보증금, 보험 환급금, 자동차의 담보대출금<br>
                            할부금을 제외한 나머지 부분 등을 청산가치 재산에 반영하고 있습니다.<br><br>

                        <b class="alphabet_listing">c.</b>금액에 관한 사항으로 무담보 채무는 5억 원 이하이고 부동산, 자동차 등의 담보<br>
                        채무는 <b class="coloring_red">최대 10억 원 이하</b>로 가능합니다.<b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인회생 부동산담보대출 해결방법</b></b><br><br>

                        <b class="alphabet_listing">d.</b>이미 개인회생이나 파산 절차를 진행해서 면책을 받으셨던 분들이 다시 신청할 수<br>
                            있는지 궁금해 하시는데 이런 경우에는 면책 결정을 받으신 후 5년이 지나야<br>
                            가능합니다.<b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인회생 재신청은 몇 번까지 가능할까?</b></b><strong class="specialchars">」</strong></p>
                </div>
                <div id="rehab4">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인회생 신청서류</b><b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인회생 신청 시 필요서류</b></b></p>
                    <p class="contents background_document" style="border: 0.1vw solid #999; border-radius: 1%; padding:3vh 2vw;">
                        <strong class="specialchars">「</strong>파산면책의 경우에는 소득이 없는 분들이 해당 되지만, 개인회생의 경우에는<br>
                        소득이 있는 분들이 대상이 되기 때문에 그 소득을 증명할 수 있는 서류가 필요합니다.<strong class="specialchars">」</strong><br><br>
                        * 소득을 증명하는 서류<br>
                        <b class="alphabet_listing">a.</b> 급여소득자의 경우<br>
                        : 근로소득세 원천징수 영수증, 재직증명서, 급여통장, 예상 퇴직금 확인서 등<br><br>

                        <b class="alphabet_listing">b.</b> 영업소득자의 경우<br>
                        : 사업자 등록증, 소득금액 증명원, 매입, 매출 장부, 미납세액 확인서 등<br><br>

                        * 공통 서류<br>
                        채권자별 부채증명서(가장 까다로운 서류)<br>
                        -부채증명서는 사무실에서 대행하여 발급해드리고 있습니다.<br>
                        기본증명서<br>
                        주민등록등본 (주소이력 전부포함)<br>
                        주민등록초본 (주소이력 전부포함)<br>
                        가족관계증명서 (상세)<br>
                        혼인관계증명서<br>
                        무관할 지방세 세목별과세증명서(최근 5년간)<br>
                        자동차등록원부<br>
                        출입국사실증명원<br>
                        인감증명서(채권자 수 +3부)<br>
                        인감도장 (대리업무 관계로 법무사에게 제출할 수도 있음)<br>
                        신분증 사본(앞면)<br>
                        소득금액증명원(최근 3년)<br>
                        사업자등록증 및 폐업사실 확인원<br>
                        부가가치세 표준증명원(최근 3년)<br>
                        사실증명원(사업자유무, 납세증명, 체납 등)<br><br>
                        보험가입 확인조회서 (생명보험협회&손해보험협회)<b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">인터넷보험가입내역조회 결과서 발급방법</b></b><br><br>
                        신청자 개인별, 업종별로 사건내용에 따라 필요한 서면이 조금씩 다릅니다.<br><br>
                        <b class="coloring_yellow" style="font-size:0.81vw;">
                            * 개인회생위원은 채무자의 재산 수입 상황 등을 조사하고 적정한 변제계획안을 작성하도록 보정을 권고하는 등 법원을 보좌하는 업무를 수행합니다.<br>
                            개인회생신청서를 검토 후 개인 파산면책과 동일하게 부족한 부분의 서류 제출과 가용소득(월 변제금액)의 조정 등을 합니다.</b><br>
                            <b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인회생위원회 면담일이 궁금해요</b></b>
                </div>
                <div id="rehab5">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인회생 채권자 집회 기일</b></p>
                    <p class="contents">
                        <strong class="specialchars">「</strong>개인회생 신청 후 전국의 모든 법원을 기준으로 가장 중요한 것이 &lsaquo;채권자 집회 기일&rsaquo; 출석입니다.<strong class="specialchars">」</strong><br><br>

                            채권자 집회 기일까지 절차<br>
                        <b class="alphabet_listing" style="font:inherit!important;">a.</b> 법원에 신청서를 접수<br>
                        <b class="alphabet_listing" style="font:inherit!important;">b.</b> 회생 위원과 함께 본 정서를 추가 제출<br>
                        <b class="alphabet_listing" style="font:inherit!important;">c.</b> 개시결정 (2~3개월 안에 채권자 집회 기일이 결정)<br>
                        <b class="alphabet_listing" style="font:inherit!important;">d.</b> 채권자 이의절차 진행 (통상 1~2개월 동안)<br>
                        <b class="alphabet_listing" style="font:inherit!important;">e.</b> 채권자 이의절차 종료<br>
                        <b class="alphabet_listing" style="font:inherit!important;">f.</b> 채권자 집회 기일<br><br>

                            원래 채권자 집회는 말 그대로 채권자들도 같이 나와 변제계획안에 대해 논의해야 되는 날이지만, 사실상 채권자들이 집회 기일에 거의 출석을 하지 않기 때문에 판사가
                        채무자들을 불러 출석체크 하는 정도로 간단하게 진행되고 있습니다.<br><br>

                            채권자 집회 기일에는 직장에 다녀 시간을 빼기 어렵겠지만 미리 휴가를 내서라도<br>
                            반드시 참석하셔야 합니다.<br>
                            혹시 너무 급한 사정이 생겨서 불참을 하게 된 경우, <b class="coloring_red">1번의 불참으로는 절차가 폐지되지 않지만 2번까지 불참을 하시게 되면 절차가 폐지</b>될 수도 있으니 숙지를 잘 하고 계시다가 꼭 참석하셔야 합니다.<br>
                    </p>
                </div>
                <div id="rehab6">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인회생 절차안내</b><b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인회생 절차와 주의사항</b></b></p>
                    <p class="contents">
                        <b class="alphabet_listing">a.</b> 개시결정<br><br>

                        개인회생위원이 보정을 요구하는 사항에 대해 <b class="border_bottom">보정서를 잘 준비하여 제출</b>하면<br>
                        개인회생절차 개시결정이 납니다.<br>
                        개시결정은 서류상에 하자가 없어서 기각사유가 없다는 법원의 판단을 의미합니다.<br>
                        사실상 개시결정이 나면 법원에서 결정이 된 것이라고 보면 됩니다.<br><br>

                        <b class="alphabet_listing">b.</b> 인가절차<br><br>

                        개시결정이 나고 나면 그 다음 절차는 채권자 이의기간 및 인가절차 입니다.<br>
                        개인회생 개시결정이 나면 개시결정이 난 서류(채권자목록, 변제계획안)를<br>
                        개인회생 채권자들에게 모두 송달하며 서류를 받은 채권자들이 이의 신청 기간 안에<br>
                        이의신청을 할 수 있습니다.<br>
                        <b class="border_bottom">이의신청이 없는 경우 개인회생 채권자집회를 거쳐 최종적인 인가결정</b>으로 이어지게<br>
                        됩니다.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <img src="img/bankruptcy2.jpg" class="testingimg">
    </div>

@endsection