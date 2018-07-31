@extends('layouts.app')
@section('content')
    <div class="page">
        <div class='grid' style="padding:0 8.1vw 0 6.2vw;">
            @include('layouts.partials.tab.bank_n_rehab_list')
        </div>
        <div class='grid' style="width: 63.3%; text-align: center; padding:0; margin-left: 5vw;">
            <div style="border-bottom: 0.6vw solid #cccccc;">
                <img src="img/call.png" style="width:38%;">
            </div>
            <div class="lists">
                <div id="1">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인파산이란?</b></p>
                    <p class="contents"><strong class="specialchars">「</strong>개인 본인의 재산으로 모든 채무를 변제할 수 없는 상태에 빠진 경우,
                        채무의 정리를
                        위하여 스스로 파산신청을 하는 경우를 말합니다.<br>
                        <b class="border_bottom">스스로 파산을 신청</b>하는 <b class="coloring_yellow">‘소비자파산’</b>과, <b
                                class="border_bottom">개인사업자가 영업활동을 통한 채무</b>로
                        <b class="border_bottom">파탄에 이르러 파산을 신청</b>하는 <b class="coloring_yellow">‘영업자파산’</b>을 모두
                        포함합니다.<strong class="specialchars">」</strong></p>
                </div>
                <div id="2">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인파산 목적</b></p>
                    <p class="contents"><strong class="specialchars">「</strong>개인파산제도의 주된 목적은 모든 채권자가 평등하게 채권을 변제받도록
                        보장함과 동시에
                        채무자에게 면책절차를 통하여 남아 있는 <b class="coloring_yellow">채무에 대한 변제 책임을 면제</b>받아 경제적으로
                        재기, 갱생할 수 있는 기회를 부여하는 것입니다.<br><br>
                        개인파산제도는 성실하지만 불운하게도 과도한 채무를 지게 되어 절망에 빠지고
                        생활의 의욕을 상실한 채무자에게는 좋은 구제책이 될 수 있습니다.<br>
                        개인파산을 신청하는 이유는 파산선고를 거쳐 면책결정까지 받음으로써 채무로부터
                        해방되기 위한 것입니다.<strong class="specialchars">」</strong></p>
                </div>
                <div id="3">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인파산 신청자격</b><b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인파산 신청할 때 자격요건</b></b></p>
                    <p class="contents"><strong class="specialchars">「</strong><b class="coloring_yellow">채권자, 채무자 및
                            채무자에 준하는 자</b>(법정대리인, 파산회사 대표자, 이사, 지배인)가
                        신청할 수 있습니다.<br>
                        개인파산의 경우 대부분 면책을 목적으로 하는 채무자의 신청이 가장 많지만, <b class="border_bottom">채권자도 채무자에 대해 파산을 신청하여 재산을 환가하여 배당받을 목적</b>으로<br> 신청할 수 있습니다.<br><br>

                        현재 자신의 재산보다 채무가 많아야 하며, <b class="coloring_red">채무액이 최소 1000만원 이상</b>이여야 하고,
                        최저생계비에 비해 소득이 적거나 없어야 합니다.<strong class="specialchars">」</strong></p>
                </div>
                <div id="4">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인파산 신청서류</b><b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인파산 신청 시 필요서류</b></b></p>
                    <p class="contents background_document" style="border: 0.1vw solid #999; border-radius: 1%; padding:3vh 2vw;">채권자별 부채증명서(가장 까다로운 서류)<br>
                        -부채증명서는 사무실에서 대행하여 발급해드리고 있습니다.<br>
                        기본증명서<br>
                        주민등록등본 (주소이력 전부포함)<br>
                        주민등록초본 (주소이력 전부포함)<br>
                        가족관계증명서 (상세)<br>
                        혼인관계증명서<br>
                        무관할 지방세 세목별과세증명서(최근 10년간)<br>
                        자동차등록원부<br>
                        출입국사실증명원<br>
                        인감증명서(채권자 수 +3부)<br>
                        인감도장 (대리업무 관계로 법무사에게 제출할 수도 있음)<br>
                        신분증 사본(앞면)<br>
                        소득금액증명원(최근5년)<br>
                        사업자등록증 및 폐업사실 확인원<br>
                        부가가치세 표준증명원(최근3년)<br>
                        사실증명원(사업자유무, 납세증명, 체납, 무소득)<br>
                        보험가입 확인조회서 (생명보험협회&손해보험협회)<b class="video_url_page"><img src="img/video_url.png" class="video_desc"></b><br>
                        과거5년부터 현재까지 채무자 당사자의 금융거래내역서(통장)<br>
                        개인 진술서, 병원 진단서 등<br><br>

                        <b class="coloring_yellow" style="font-size:0.81vw;">
                            ※ 진술서<br>
                            진술서는 신청인에게 파산원인사실 및 면책불허가사유가 있는지 여부를 판단하기 위한 자료입니다.<br>
                            특히 채무증대경위 및 지급불능시점과 그 경위는 법원이 가장 주의 깊게 검토하는<br>
                            부분으로서 구체적으로 상세하게 시간적 순서에 따라 사실대로 작성해야 합니다.
                            <b style="font-size:0.7vw; font-style:normal; font-weight:500;">(기타 개인상황에 따라 필요서류가 추가될 수 있습니다.)</b></b><br>

                        <b style="font-size:0.81vw; font-style:normal; font-weight:600; color:#3399cc;">▶ 신청 서류가 있다면 법무사를 만나 상담 후 서류부분 작성과
                            추가서류를 안내 받으시면 됩니다.</b></p>
                </div>
                <div id="5">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인파산</b><b class="coloring_red" style="font-size:1.94vw; font-weight:600!important;"> 장점</b></p>
                    <p class="contents">
                        <b class="alphabet_listing">a.</b> 개인회생은 장래의 소득으로 채무의 전부 또는 일부를 변제해야 하지만, 개인파산의 경우 에는 면책결정이 이루어지면 장래의 소득은 모두 채무자에게 귀속된다는 점이 파산의
                        최대 장점입니다.<br><br>
                        <b class="alphabet_listing">b.</b> 면책 신청을 하면 면책불허가사유에 해당하지 아니하는 한 면책결정이 이루어집니다.<b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인파산 면책불허가 사유와 해결방법</b></b><br><br>
                        <b class="alphabet_listing">c.</b> 압류 등 기존에 진행되었던 강제집행은 모두 해제됩니다.<br><br>
                        <b class="alphabet_listing">d.</b> 파산면책 후에는 모든 독촉이 중지됩니다. 또한 가족들에게는 전혀 불이익이 없습니다.</p>
                </div>
                <div id="6">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인파산</b><b class="coloring_red" style="font-size:1.94vw; font-weight:600!important;"> 단점</b></p>
                    <p class="contents"><strong class="specialchars">「</strong>파산선고가 내려지면 불이익은 파산선고를 받은 자 본인에게 한정되고, 가족
                        등 다른 사람 에게는 아무런 <b class="coloring_yellow">불이익이 없습니다.</b><strong class="specialchars">」</strong><b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">파산선고 받으면 불이익이 있을까?</b></b><br><br>

                        <b class="alphabet_listing">a.</b> <b>공법(公法)상의 제한</b><br>
                        사법상 후견인, 친족회원, 유언집행자, 수탁자가 될 수 없습니다.<br>
                        다만, 권리능력, 행위능력 및 소송능력은 제한받지 아니합니다.<br><br>

                        공법상 공무원, 변호사, 공인회계사, 변리사, 공증인, 부동산중개업자, 사립학교교원,
                        건축사 등이 될 수 없습니다.<br>
                        다만, 대통령, 국회의원, 지방자치단체장의 선거권 및 피선거권은 계속 보유합니다.<br>
                        자격증에 관한 자세한 사항은 자격증을 발급해주는 기관에 문의하시기 바랍니다.<br><br>

                        <b class="alphabet_listing">b.</b> <b>상법(私法)상의 제한</b><br>
                        상법상 합명회사, 합자회사 사원의 퇴사 원인이 됩니다.<br>
                        주식회사, 유한회사와 위임관계에 있는 이사의 경우 그 위임관계가 파산선고로 종료되어 당연 퇴임하게 됩니다.<br><br>

                        <b class="alphabet_listing">c.</b> <b>필요설명의 의무</b><br>
                        파산관재인이나 채권자집회의 요청이 있으면 파산에 관하여 필요한 설명을 할 의무가 있습니다.<br>
                        이유 없이 설명을 아니 하거나, 허위의 설명을 하는 때에는 형사처벌의 대상이 되고, 면책불허가 사유에 해당됩니다.<br><br>

                        <b class="alphabet_listing">d.</b> <b>경제활동의 제한</b><br>
                        파산선고결정이 확정되면 파산자의 신원증명업무를 관장하는 본적지 시·구·읍·면장에게
                        파산선고사실이 통지되고 신원증명서에 신원증명사항의 하나로 기재되어<br>
                        (호적에 등재되는 것은 아닙니다) 각종 금융거래와 취직 등에 있어서<br>
                        불이익을 받을 수 있습니다.<br><br>

                        <b class="alphabet_listing">e.</b> <b class="coloring_red" style="font-weight:600;">불이익의 제거</b><br>
                        그러나 <b class="coloring_red">전부면책결정이 확정</b>되면 위와 같은 <b class="coloring_red">불이익은 모두 소멸</b>하고,<br>
                        파산자의 신원증명업무를 관장하는 본적지 시·구·읍·면장에게 면책결정 확정사실이<br>
                        통지되어 파산선고를 받은 사실이 <b class="coloring_red">신원증명사항에서 삭제</b>됩니다.</p>
                </div>
                <div id="7">
                    <p class="header_p"><img src="img/listing_img.png"><b class="list_header">개인파산 절차 안내</b></p>
                    <p class="contents"><strong class="specialchars">「</strong> 개인파산면책 절차는 파산<b class="coloring_yellow">절차와 면책 절차 2가지 절차로 진행</b>됩니다.<br>
                        <b class="coloring_red" style="font-size:0.77vw;">( 신청은 동시에 가능합니다.)</b><br>
                        진행절차는 법원마다 조금 차이가 있지만 서울지방법원을 기준으로 말씀드립니다.<strong class="specialchars">」</strong><br><b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인회생 신청 관할법원 선택하기</b></b><br><br>

                        <b class="coloring_red"><strong class="specialchars" style="font-size:1vw; color:#ff6666">「</strong>파산 면책 신청서 법원에 접수<strong class="specialchars" style="font-size:1vw; color:#ff6666;">」</strong><br></b>
                        <b class="smaller_font">▶ 신청의 적법여부를 검토<br>
                        ▶ 1달 내외로 " 파산관재인 선임을 위한 예납금 납부 명령서 " 송달<br>
                        <b class="coloring_red">(복잡한 사건은 금액이 더 많이 나오긴 하지만 보통은 30만원을 예납)</b> <b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">개인파산 신청할 때 필요한 비용과 예납금</b></b><br>
                        ▶ <b class="coloring_red">15일 전후</b>하여 파산선고기일 확정<br>
                        ▶ <b>신분증을 지참</b>하여 법원에 출석<br><br>

                        <b class="coloring_yellow">※ 파산관재인 정의<br>
                            파산관재인은 많은 분들이 파산면책을 신청하고 있는 상황에서<br>
                            서울지방법원에서 효과적인 업무 처리를 위해 주로 변호사를 선발하여<br>
                            면책불허가사유의 유무를 조사하도록 하고 있으며 이를 파산관재인이라고 합니다.</b><br><br>

                        * 면책 불허가사유의 조사는 통상 2달 정도의 기간 동안 진행되며 이 기간 동안<br>
                        서류제출과 면담을 통해 조사를 하고 법원에 면책에 대한 보고서를 제출합니다.<br><br>

                        * 파산선고기일은 절차가 복잡한 것이 아니라 파산선고를 하고 결정문과<br>
                        파산관재인에 대 한 자료제출 목록을 나누어 주고 있습니다.<br>
                        파산선고기일은 받는 자료제출목록의 서류를 준비하여 파산관재인에게 제출해야 하며,<br>
                        파산관재인은 제출된 자료를 검토하고 면담일을 정하여 면담할 수 있습니다.<br>
                        면담일에 여러 가지 부분에 대해 조사하고 추가 서류를 요구 할 수 있습니다.<b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">파산 관재인에 대한 채무자의 자료제출서류</b></b><br><br>
                        파산관재인은 서류제출요구와 면담을 통해 면책불허가사유의 유무를 조사하여 법원에<br>
                        조사보고서를 제출하게 됩니다.<br><br>

                        * 의견 청취 기일에는 채무자가 법원에 출석해야 하며 판사님 및 파산관재인과<br>
                        면담을 하게 됩니다.<br>
                        채권자는 대부분 참여하지 않고 있으며, 의견청취기일이 종결된 후 보름 정도 후<br>
                        면책결정문을 받게 됩니다.<br><br>

                            * 참고</b><br>
                        <strong class="specialchars">「</strong>파산면책 처리되는 시간<strong class="specialchars">」</strong><b class="video_url_page"><img src="img/video_url.png" class="video_desc"><b class="video_name">파산면책에 걸리는 시간</b></b><br>
                       <b class="smaller_font"> 서울중앙지방법원의 경우 신청서 접수 후 법원에서 신청의 적법여부를 검토하는 기간 -----> 1개월<br>
                        파산선고기일 후 파산관재인에게 추가서류 제출 및 면담을 통해 면책불허가사유<br>
                        조사기간 -----> 2개월<br>
                        마지막으로 의결청취기일에 법원에 다녀오면 보름 정도 후에 절차가 종결되며 특별한<br> 문제가 없는 사건의 경우 5~6개월의 시간이 소요되고 있습니다.<br>
                        전국 법원별로 소요되는 시간이 다르며, 길게는 1년~1년 3개월의 시간이 소요되는<br>
                           법원도 있습니다.<br></b>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection