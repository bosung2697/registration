@extends('layouts.app')
@section('content')
    <style>
        @media (max-width:1200px) {
            .sub_info{
                display:none!important;
            }
        }
        @media (max-width:500px) {
            .sub_info{
                display:none!important;
            }
        }
    </style>
    <div class="page">
        <div class="grid" style="padding:0 8.1vw 0 6.2vw;">
            @include('layouts.partials.tab.intro_list')
        </div>
        <div class="grid" style="width: 63.3%; text-align: center; padding:0;">
            <div style="border-bottom: 0.6vw solid #cccccc; margin:0 0 5vh 0;">
                <img src="img/call.png" style="width:38%;">
            </div>
            <div class="introduction">
                <img src="img/intro.png">
            </div>
            <div style="margin:2vh 0;" id="location">
                <div style="padding: 1vw 1vh">
                    <table cellpadding="0" cellspacing="0" style="width:100%;">
                        <tr>
                            <td style="border:1px solid #cecece;"><a
                                        href="https://map.naver.com/?query=&searchCoord=&tab=1&lng=431e1f64826558fae75f3bbbf85212a5&mapMode=0&mpx=7c0f66178935bf10005a3f6518573c047e5167f9b3e4057285465cbcbd202f1e1a02e07b1b5ad012ae06718c675fba36&pinId=33109314&lat=c4109c875fe348960a6e01525260a5a2&dlevel=12&enc=b64&__pinOnly=false&menu=location&__fromRestorer=true&pinType=site"
                                        target="_blank"><img class="location_map"
                                            src="http://prt.map.naver.com/mashupmap/print?key=p1534472199950_347623976" alt="지도 크게 보기" title="지도 크게 보기" border="0" width="100%"
                                            style="vertical-align:top; width:100%;"/></a></td>
                        </tr>
                        <tr>
                            <td>
                                <table cellpadding="0" cellspacing="0" width="100%" style="display:table;" class="sub_info">
                                    <tr>
                                        <td height="30" bgcolor="#f9f9f9" align="left"
                                            style="padding-left:9px; border-left:1px solid #cecece; border-bottom:1px solid #cecece;">
                                            <span style="font-family: NanumBarunGothic; font-size: 11px; color:#666;">2018.8.17</span>&nbsp;<span
                                                    style="font-size: 11px; color:#e5e5e5;">|</span>&nbsp;
                                            <a style="font-family: dotum,sans-serif; font-size: 11px; color:#666; text-decoration: none; letter-spacing: -1px;"
                                                    href="https://map.naver.com/?query=&searchCoord=&tab=1&lng=431e1f64826558fae75f3bbbf85212a5&mapMode=0&mpx=7c0f66178935bf10005a3f6518573c047e5167f9b3e4057285465cbcbd202f1e1a02e07b1b5ad012ae06718c675fba36&pinId=33109314&lat=c4109c875fe348960a6e01525260a5a2&dlevel=12&enc=b64&__pinOnly=false&menu=location&__fromRestorer=true&pinType=site"
                                                    target="_blank">지도 크게 보기</a></td>
                                        <td width="98" bgcolor="#f9f9f9" align="right"
                                            style="text-align:right; padding-right:9px; border-right:1px solid #cecece; border-bottom:1px solid #cecece;">
                                            <span style="float:right;"><span style="font-size:9px; font-family:Verdana, sans-serif; color:#444;">&copy;&nbsp;</span>&nbsp;
                                                <a style="font-family:NanumBarunGothic; font-size:9px; font-weight:bold; color:#2db400; text-decoration:none;"
                                                   href="http://www.nhncorp.com" target="_blank">NAVER Corp.</a></span></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <img src="img/location.jpg" style="width:100%;">
            </div>
        </div>
    </div>
@endsection