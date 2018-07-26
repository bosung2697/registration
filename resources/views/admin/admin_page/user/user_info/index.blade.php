@extends('admin.layouts.admin')
@include('detailedpage.detailed_style')
@section('content')
    <div class="userinfopage">
        <h3 style="margin: 0;">회원리스트&등급 변경</h3>
        <div style="text-align: right;">
            <form action="{{url('admin/search_user')}}" method="POST">
                {!! csrf_field() !!}
                <input name="search_user" class="search_user" type="search" placeholder="검색">
                <button type="search">회원 검색</button>
            </form>
        </div>
        <h4 style="text-align: left;">회원 검색 결과</h4>
        <div style="border:1px solid black; border-radius:1vw; margin-bottom:3vh; padding:1vw">
            <table class="pagecontents">
                <thead>
                <tr>
                    <th>이름</th>
                    <th>생년월일</th>
                    <th>전화번호</th>
                    <th>사건 분류</th>
                    <th>접수일</th>
                    <th>사건 진행 상황</th>
                    <th>결제 여부</th>
                    <th>종결 여부</th>
                </tr>
                </thead>
                <tbody>
                @forelse($result as $value)
                <tr class="userinfotable" onclick="tothedetailpage({{$value->id}})">
                    <td>{{$value->name}}</td>
                    <td>{{$value->birth}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->classification}}</td>
                    <td>{{$value->received_date}}</td>
                    <td>{{$value->event_status}}</td>
                    <td>{{$value->paid}}</td>
                    <td>{{$value->closing}}</td>
                </tr>
                @empty
                    <td colspan="8">회원 리스트에 등록된 회원이 없습니다.</td>
                @endforelse
                </tbody>
            </table>
        </div>
        <hr style=""/>
        <h4 style="text-align:left;">회원 리스트</h4>
        <div>
            <table class="pagecontents">
                <thead>
                <tr>
                    <th>이름</th>
                    <th>생년월일</th>
                    <th>전화번호</th>
                    <th>사건 분류</th>
                    <th>접수일</th>
                    <th>사건 진행 상황</th>
                    <th>결제 여부</th>
                    <th>종결 여부</th>
                </tr>
                </thead>
                <tbody>
                @forelse($data as $value)
                <tr class="userinfotable"  onclick="tothedetailpage({{$value->id}})">
                    <td>{{$value->name}}</td>
                    <td>{{$value->birth}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->classification}}</td>
                    <td>{{$value->received_date}}</td>
                    <td>{{$value->event_status}}</td>
                    <td>{{$value->paid}}</td>
                    <td>{{$value->closing}}</td>
                </tr>
                @empty
                    <td colspan="9">회원 리스트에 등록된 회원이 없습니다.</td>
                @endforelse
                </tbody>
            </table>
            @if($data->count())
                <div class="text-center">
                    {!! $data->render() !!}
                </div>
            @endif
        </div>
    </div>

    <script>
        function tothedetailpage(id) {
            location.href = "/user/"+id;
        }
    </script>
@endsection